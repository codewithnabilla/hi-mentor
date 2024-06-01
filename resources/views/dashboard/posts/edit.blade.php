@extends('dashboard.layouts.main')
@section('container')
    <div class="container mx-auto p-4">
        <form action="/dashboard/posts/{{ $program->id }}" method="post" enctype="multipart/form-data"
            class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            @method('put')
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course
                    Name</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ old('title', $program->title) }}">
                @error('title')
                    <div class="alert alert-danger text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    @foreach ($categories as $category)
                        @if (old('category_id', $program->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach

                </select>
            </div>

            <div class="mb-6">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" id="description" name="description"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ old('description', $program->description) }} ">
                @error('description')
                    <div class="alert alert-danger text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail</label>
                <input type="text" id="body" name="body"
                    class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ old('body', $program->body) }}">
                @error('body')
                    <div class="alert alert-danger text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Add
                    Image</label>
                <img class="img-preview img-fluid">
                <input type="hidden" name="oldImage" value="{{ $program->image }}">
                @if ($program->image)
                    <img src="{{ asset('storage/' . $program->image) }}" class="img-preview img-fluid block">
                @else
                    <img class="img-preview img-fluid">
                @endif
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="image" type="file" name="image" onchange="previewImage()">
                @error('image')
                    <div class="alert alert-danger text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-6 mt-5">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input type="number" id="price" name="price"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ old('price', $program->price) }}">
                @error('price')
                    <div class="alert alert-danger text-sm text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Save Changes
            </button>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector(#image);
            const imgPreview = document.querySelector('img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
