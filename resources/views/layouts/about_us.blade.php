@extends('layouts.master')
@section('title', 'About Us')
@section('description', 'Learn more about us.')
@section('keywords', 'about, us, company')
@section('content')

<div class="relative z-10 py-20">
<x-hero-section title="About Us" subtitle="Learn more about us." backgroundImage="{{ asset('images/loginBg.jpg') }}" />
</div>

<div class="mt-10 text-center text-white">
    <h2 class="text-3xl font-bold mb-5">Our Mission</h2>
    <p class="text-lg">We create digital experiences for brands and companies by using technology.</p>

</div>

@endsection
