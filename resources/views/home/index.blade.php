@extends('layouts.master')
 @section('title', 'Anasayfa')
 @section('description', 'test.')
 @section('keywords', 'test, test, test')
 @section('content')

<section class="container mx-auto">
    @auth
    @include('layouts.sections._slideHero')


    @include('layouts.sections._slideFirst')
    @include('layouts.sections._slideSecond')


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

                        {{-- choose your plan --}}


                    <div class="mx-3 ">
                        <h2 class="font-black text-7xl text-white py-8 text-center uppercase">
                            Choose Your Plan
                                </h2>
                        <div class="flex  justify-between lg:flex-row flex-col gap-6 mt-8 items-center">


                            <!-- Free Plan -->
                            <div class="bg-white p-8 flex flex-col rounded-lg w-full    h-96">
                                <div>
                                    <h2 class="text-lg font-semibold  mb-4 text-gray-800">Monthly Plan
                                    </h2>
                                    <div class="text-4xl font-bold text-gray-800 mb-6">$9.99</div>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center text-gray-700">
                                            <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Sınırsız izleme
                                                    </li>
                                        <li class="flex items-center text-gray-700">
                                            <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Reklamsız deneyim

                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Çoklu cihaz desteği

                                        </li>
                                    </ul>

                                </div>

                                <button class="w-full bg-primary mt-auto text-white py-2 rounded-lg hover:bg-gray-900 transition">Hemen Başla</button>
                            </div>

                            <!-- Pro Plan -->
                            <div class="bg-third text-white flex flex-col  p-8 w-full rounded-lg h-96">
                                <div>
                                    <h2 class="text-lg mb-4 font-semibold">Yearly Plan</h2>

                                    <div class="text-4xl font-bold mb-6">$50</div>
                                    <ul class="space-y-3 mb-6">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            12 aylık kesintisiz erişim
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            Tüm premium özellikler
                                        </li>

                                    </ul>

                                </div>


                                    <button class="w-full  mt-auto bg-white text-primary  py-2 rounded-lg hover:bg-gray-200 transition">Hemen Başla</button>



                            </div>

                        </div>

                    </div>



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
