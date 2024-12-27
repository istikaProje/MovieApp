@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')




@section('content')

<section class="container h-lvh">



    @auth
    <h1>ANASAYFA -giriş yapıldı</h1>

        
    @endauth    

    @guest

    <h1>ANASAYFA -giriş yapılmadı</h1>

    @endguest
  

</section>

@endsection
