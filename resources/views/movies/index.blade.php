@extends('layouts.master')

@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')

@include('layouts.sections._heroSection', ['title' => 'Filmler' , 'subtitle'=> 'Kapsamlı film koleksiyonumuzu keşfedin' , 'backgroundImage' => asset('images/MoviesBg.jpg') ])


@include('layouts.sections.movies._movieList')

@endsection



@push('scripts')
    @vite('resources/js/toggleFavorite.js')
@endpush
