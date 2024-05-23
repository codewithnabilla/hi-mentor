@extends('layouts.main')

@section('container')
    <h2 class="font-bold">{{ $program->title }}</h2>
    {!! $program->body !!}
@endsection
