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
            @vite(['resources/js/swiper.js'])
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const swiper = new Swiper('.slider', {
                        loop: true,
                        autoplay: {
                            delay: 5000,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                });
                document.addEventListener('DOMContentLoaded', () => {
                    const swiper = new Swiper('.slider1', {
                        loop: true,

                        navigation: {
                            nextEl: '.custom-next',
                            prevEl: '.custom-prev',
                        },

                        breakpoints: {
                            // Mobile - 1 slide
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 10
                            },
                            // Mobile landscape - 2 slides
                            480: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            // Tablet - 3 slides
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            // Desktop - 4 slides
                            1024: {
                                slidesPerView: 5,
                                spaceBetween: 20
                            },

                        }

                    });
                });

                document.addEventListener('DOMContentLoaded', () => {
                    const swiper = new Swiper('.slider2', {
                        loop: true,

                        navigation: {
                            nextEl: '.custom-next',
                            prevEl: '.custom-prev',
                        },

                        breakpoints: {
                            // Mobile - 1 slide
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 10
                            },
                            // Mobile landscape - 2 slides
                            480: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            // Tablet - 3 slides
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            // Desktop - 4 slides
                            1024: {
                                slidesPerView: 5,
                                spaceBetween: 20
                            },

                        }

                    });
                });
            </script>

            <script>
                var video = $('.wrap-video').hover(hoverVideo, hideVideo);

                function hoverVideo(e) {
                    $('video', this).get(0).play();
                }

                function hideVideo(e) {
                    $('video', this).get(0).pause();
                }
            </script>
        @endpush
    @endauth

    @guest
        <section class="container mx-auto">
            <div class="w-full p-8   md:min-h-[41rem]">
                <div class="wrap-video">
                    <video class=" shadow-[-13px_14px_6px_-5px_#ff5758] inline w-full h-full object-center object-cover rounded-2xl" preload="metadata" data-src="{{asset('videos/PeakyBlinders.webm')}}"  src="{{asset('videos/PeakyBlinders.webm')}}"></video>
                </div>
            </div>
           @include('layouts.sections.home._guestWatchEnjoy')

            @include('layouts.sections.home._chooseYourPlan')

            @push('scripts')
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    var video = $('.wrap-video').hover(hoverVideo, hideVideo);

                    function hoverVideo(e) {
                        $('video', this).get(0).play();
                    }

                    function hideVideo(e) {
                        $('video', this).get(0).pause();
                    }
                </script>
                
            @endpush
     
        </section>
    @endguest
@endsection
