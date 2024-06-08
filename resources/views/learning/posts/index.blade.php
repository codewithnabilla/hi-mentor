<div>

    @if ($programs->isEmpty())
        <p>No programs bought yet.</p>
    @else
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
                                <img class="w-full"
                                    src="https://picsum.photos/300/200?random={{ urlencode($program->category->name) }}"
                                    alt="{{ $program->category->name }}">
                            @endif
                            <div class="flex-grow pl-6 pr-6 pt-6 pb-2">
                                <h1 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                                    {{ $program->title }}</h1>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">by {{ $program->user->name }}
                                </p>
                                <hr class="border-gray-200 dark:border-gray-800 mb-4">
                                <p class="text-sm text-gray-700 dark:text-gray-300 mb-4">{{ $program->description }}</p>
                                <p class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                                    Rp{{ $program->price }}</p>
                            </div>

                            <div class="mt-auto flex py-6 px-3">
                                <a href="/learning/{{ $program->id }}">
                                    <button type="button"
                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                        Start Learn</button>
                                </a>
                            </div>



                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endif
</div>
