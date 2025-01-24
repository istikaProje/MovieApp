@extends('layouts.master')
@section('title', 'About Us')
@section('description', 'Learn more about us.')
@section('keywords', 'about, us, company')
@section('content')

@include('layouts.sections._heroSection', ['title' => 'Hakkımızda' , 'subtitle'=> 'Movie Watch' , 'backgroundImage' => asset('images/hak.jpg') ])


<div class="mt-10 text-center text-white">
    <h2 class="text-3xl font-bold mb-5"> Biz Kimiz </h2>
    <p class="text-lg mb-5"> Her türden filmlerin bulunduğu bir film sitesiyiz </p>

    <h2 class="text-3xl font-bold mb-5"> Neyi Amaçlıyoruz </h2>
    <p class="text-lg"> Zaman zaman oksitosin (MUTLULUK), kimi zamanda Kortizol (Üzüntü-Korku) </p>
    <p class="text-lg mb-5"> yada Adrenalin Hormonu salgılamanızı  ve günün stresini atmanızı amaçlıyoruz. </p>
    <h2 class="text-3xl font-bold mb-5"> Bu amaç için </h2>
    <p class="text-lg"> Her kitleye , her ülkeye uygun içerik sunuyoruz </p>
    <p class="text-lg">  Önerileriniz Bizim için Önemli Sizlere Daha İyi bir site, daha iyi bir aktivite sunmamız için önerilerinizi önemsiyoruz </p>

@endsection

