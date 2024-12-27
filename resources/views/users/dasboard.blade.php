@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')




@section('content')

<section class="container h-lvh">



<h1>hello {{auth()->user()->name}}</h1>
  

</section>

@endsection
