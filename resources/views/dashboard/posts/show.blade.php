@extends('dashboard.layouts.main')

@section('container')
    <h1>{{ $program->title }}</h1>
    <p>Category: {{ $program->category->name }}</p>
    <p>Price: Rp{{ $program->price }},00</p>
    <p>Description: {{ $program->description }}</p>
    @if ($program->image)
        <img class="w-full" src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->category->name }}">
    @else
        <img class="w-full" src="https://source.unsplash.com/1200x400/?{{ $program->category->name }}"
            alt="{{ $program->category->name }}">
    @endif
    {!! $program->body !!}
@endsection
