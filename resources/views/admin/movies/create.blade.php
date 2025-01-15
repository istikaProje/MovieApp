@extends('layouts.adminMaster')

@section('title', 'Movies')
@section('description', 'Movies page.')
@section('keywords', 'movies, admin, dashboard')

@section('content')

<div class="container mx-auto">
    @include('layouts.sections.admin._createMovies')
</div>
@endsection