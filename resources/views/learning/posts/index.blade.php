<div>
    <h1>My Learning</h1>
    @if ($programs->isEmpty())
        <p>No programs bought yet.</p>
    @else
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center">
                @foreach ($programs as $program)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg flex flex-col h-full">
                        <img class="w-full" src="https://source.unsplash.com/300x200/?{{ $program->category->name }}"
                            alt="{{ $program->category->name }}">
                        <div class="flex-grow">
                            <h2 class="font-bold">{{ $program->title }}</h2>
                            <p>{{ $program->description }}</p>
                            <p>Rp{{ number_format($program->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
