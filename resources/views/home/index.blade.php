@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')
    @auth
        @include('layouts.sections.home._slideHero')

        <section class="container mx-auto">
            @include('layouts.sections.home._slideFirst', ['favorites' => $favorites])
            @include('layouts.sections.home._slideThird')
        </section>

        @push('styles')
            @vite(['resources/css/swiper.css'])
        @endpush

        @push('scripts')
            @vite(['resources/js/swiper.js','resources/js/toggleFavorite.js', 'resources/js/sliders.js'])
        @endpush
    @endauth

    @guest
        <section class="container mx-auto">
            @include('layouts.sections.home._guestHero')
            @include('layouts.sections.home._guestWatchEnjoy')
            @include('layouts.sections.home._chooseYourPlan')
        </section>
    @endguest
@endsection
