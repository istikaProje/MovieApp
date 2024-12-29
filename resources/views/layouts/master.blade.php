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
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    </head>
    <body>
        @include('layouts.header')
        @yield('content')

        @include('layouts.footer')
    </body>
</html>
