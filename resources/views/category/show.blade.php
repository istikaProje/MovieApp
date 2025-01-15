@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        @foreach($movies as $movie)
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold">{{ $movie->title }}</h2>
            <p>{{ $movie->description }}</p>
            <!-- Add more movie details as needed -->
        </div>
        @endforeach
    </div>
</div>
@endsection
