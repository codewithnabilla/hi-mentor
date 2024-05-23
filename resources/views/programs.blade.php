@extends('layouts.main')

@section('container')
    <div>
        <h1>ini halaman programs</h1>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ustify-items-center">
                @foreach ($programs as $program)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg flex flex-col h-full">
                        <img class="w-full" src="https://source.unsplash.com/300x200/?{{ $program->category->name }}"
                            alt="{{ $program->category->name }}">
                        <div class="flex-grow">
                            <h2 class="font-bold">{{ $program->title }}</h2>
                            <p>{{ $program->description }}</p>
                        </div>
                        <div class="mt-auto">
                            <a href="/program/{{ $program->id }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                                    Detail</button>
                            </a>
                        </div>



                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
