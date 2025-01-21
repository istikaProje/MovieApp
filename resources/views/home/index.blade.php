@extends('layouts.master')
 @section('title', 'Anasayfa')
 @section('description', 'test.')
 @section('keywords', 'test, test, test')
 @section('content')
 @auth
 @include('layouts.sections.home._slideHero')

<section class="container mx-auto">


    @include('layouts.sections.home._slideFirst')
    @include('layouts.sections.home._slideSecond')
    @include('layouts.sections.home._slideThird')



    @push('styles')
        @vite(['resources/css/swiper.css']) <!-- Swiper CSS dosyanızı ekleyin -->
    @endpush

    @push('scripts')
        @vite(['resources/js/swiper.js']) <!-- Swiper JS dosyanızı ekleyin -->
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
    @endpush



    @endauth

    @guest
        {{-- Hero Section --}}

                <div class="w-full p-8   md:min-h-[41rem]">
                    <div class="wrap-video">
                        <video class=" shadow-[-13px_14px_6px_-5px_#ff5758] inline w-full h-full object-center object-cover rounded-2xl" preload="metadata" data-src="{{asset('videos/PeakyBlinders.webm')}}"  src="{{asset('videos/PeakyBlinders.webm')}}"></video>

                       </div>

                </div>
                {{-- watch and enjoy --}}

                <div class="relative flex  flex-col">
                    <div class="min-h-28">
                        <div class="mx-auto py-4">
                            <h2 class="font-black text-center text-7xl text-white uppercase">
                                Watch and Enjoy
                            </h2>

                            <div class="gap-6 mt-8 mx-4 md:flex">
                                <div class="md:w-1/2">
                                    <div class="wrap-video">

                                        <video class=" object-contain h-96 w-full "  src="{{asset('videos/BreakingBad.webm')}}"></video>

                                    </div>

                                </div>
                                <div class="md:w-1/2">
                                    <div class="wrap-video">
                                        <video class=" object-contain h-96 w-full "  src="{{asset('videos/TheFastandtheFurious.webm')}}"></video>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="gap-6 mt-8 mx-4 md:flex">
                            <div class="md:w-1/2">
                                <div class="wrap-video">
                                    <video class=" object-contain h-96 w-full "  src="{{asset('videos/Nobody.webm')}}"></video>
                                </div>


                            </div>
                            <div class="md:w-1/2">
                                <div class="wrap-video">
                                    <div class="wrap-video">
                                        <video class=" object-contain h-96 w-full "  src="{{asset('videos/johnwick.webm')}}"></video>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

              @include('layouts.sections.home._chooseYourPlan')

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

      @endguest
   </section>

@endsection
