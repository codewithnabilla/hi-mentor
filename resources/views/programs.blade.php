@extends('layouts.main')

@section('container')
    <div>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ustify-items-center">
                @foreach ($programs as $program)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg flex flex-col h-full">
                        {{-- <img class="w-full" src="https://source.unsplash.com/300x200/?{{ $program->category->name }}"
                            alt="{{ $program->category->name }}"> --}}
                        @if ($program->image)
                            <img class="w-full" src="{{ asset('storage/' . $program->image) }}"
                                alt="{{ $program->category->name }}">
                        @else
                            <img class="w-full" src="https://source.unsplash.com/300x200/?{{ $program->category->name }}"
                                alt="{{ $program->category->name }}">
                        @endif
                        <div class="flex-grow">
                            <h2 class="font-bold">{{ $program->title }}</h2>
                            <p>{{ $program->description }}</p>
                            <p>Rp{{ $program->price }}</p>
                        </div>
                        <div class="mt-auto flex">
                            <a href="/program/{{ $program->id }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                                    Detail</button>
                            </a>
                            @auth
                                @if (Auth::check() && Auth::user()->isStudent())
                                    @if (!Auth::user()->boughtPrograms->contains($program))
                                        <a href="/learning">
                                            <button type="button"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                                Start Learn</button>
                                        </a>
                                    @else
                                        <form action = "{{ route('buyProgram', ['id' => $program->id]) }}" method="POST">
                                            @csrf

                                            <button type="submit" id="buyButton"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Buy</button>

                                        </form>
                                    @endif
                                @endif
                            @else
                                <a href="/login">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Buy</button>
                                </a>
                            @endauth
                        </div>



                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buyButton = document.getElementById('buyButton');

            buyButton.addEventListener('click', function() {
                @if (Auth::check() && Auth::user()->isMentor())
                    alert('Please register as a student to buy this program.');
                    return false
                @endif
            })
        })
    </script> --}}
@endsection
