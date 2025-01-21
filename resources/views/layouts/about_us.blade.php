@extends('layouts.master')
@section('title', 'About Us')
@section('description', 'Learn more about us.')
@section('keywords', 'about, us, company')
@section('content')

@include('layouts.sections._heroSection', ['title' => 'About Us' , 'subtitle'=> 'Hello' , 'backgroundImage' => asset('images/loginBg.jpg') ])


<div class="mt-10 text-center text-white">
    <h2 class="text-3xl font-bold mb-5">Our Mission</h2>
    <p class="text-lg">We create digital experiences for brands and companies by using technology.</p>
    <i class="icon-BookmarkOff"> </i>
    <i class="icon-BookmarkOn"> </i>
    <i class="icon-Logout2"> </i>
    <i class="icon-Logout1"> </i>
</div>

@endsection

