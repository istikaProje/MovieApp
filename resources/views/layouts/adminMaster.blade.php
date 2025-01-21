<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MovieWatch - En İyi Filmleri Online İzle')</title>
          <!-- Açıklama -->
        <meta name="description" content= "@yield('description', 'MovieWatch ile en yeni filmleri, klasik başyapıtları ve popüler dizileri HD kalitede ücretsiz olarak izleyin. Film severler için tasarlanmış mükemmel bir platform.')">
        <!-- Anahtar Kelimeler -->
        <meta name="keywords" content="@yield('keywords', 'film izle, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu')">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Sayfaya Özel Style --}}
        @stack('styles')

        <link rel="stylesheet" href="{{ asset('Icons/style.css') }}">

    </head>
    <body class="bg-gradient-to-b from-gray-800 to-gray-900  ">

        {{-- Navbar --}}
        @include('layouts.adminHeader')
        @yield('content')
        @include('layouts.adminFooter')


        {{-- Sayfaya Özel Script --}}
        @stack('scripts')

    </body>
</html>
