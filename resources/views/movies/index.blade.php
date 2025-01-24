@extends('layouts.master')

@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')

@include('layouts.sections._heroSection', ['title' => 'Movies' , 'subtitle'=> 'Explore our extensive collection of movies' , 'backgroundImage' => asset('images/moviebg.jpg') ])


@include('layouts.sections.movies._movieList')

@endsection



@push('scripts')
    @vite('resources/js/toggleFavorite.js')
@endpush
