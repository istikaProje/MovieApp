@extends('layouts.master')
@section('title', 'About Us')
@section('description', 'Learn more about us.')
@section('keywords', 'about, us, company')
@section('content')

<section class="relative z-10 py-20">
<div class="container mx-auto py-8">
    <div class="bg-white lg:h-[455px] flex flex-row items-center justify-end pr-20">

        <h1 class="text-5xl font-bold text-center mr-6">About Movie Watch</h1>

    <img src="{{ asset('images/loginBg.jpg') }}" alt="about us" class="w-[500px] h-[330px] object-cover" />

    </div>

    <div class="mt-10 text-center text-white">
        <h2 class="text-3xl font-bold mb-5">Our Mission</h2>
        <p class="text-lg">We create digital experiences for brands and companies by using technology.</p>
    </div>

</div>

</section>



@endsection
