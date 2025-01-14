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
         @push('styles')
            <!-- Swiper CSS dosyanızı ekleyin -->
            @vite(['resources/css/swiper.css'])
         @endpush

         @push('scripts')
            @vite(['resources/js/swiper.js'])



            <script>
               document.addEventListener("DOMContentLoaded", () => {
                  const swiper = new Swiper(".swiperHero", {
                     loop: true,

                     autoplay: {
                        delay: 3000,
                     },
                     navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                     },
                     pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                     },
                  });
               });
               document.addEventListener("DOMContentLoaded", () => {
                  const swiper = new Swiper(".slider1", {
                     loop: true,

                     navigation: {
                        nextEl: ".custom-next",
                        prevEl: ".custom-prev",
                     },

                     breakpoints: {
                        // Mobile - 1 slide
                        320: {
                           slidesPerView: 1,
                           spaceBetween: 10,
                        },
                        // Mobile landscape - 2 slides
                        480: {
                           slidesPerView: 2,
                           spaceBetween: 15,
                        },
                        // Tablet - 3 slides
                        768: {
                           slidesPerView: 3,
                           spaceBetween: 15,
                        },
                        // Desktop - 4 slides
                        1024: {
                           slidesPerView: 5,
                           spaceBetween: 20,
                        },
                     },
                  });
               });
               document.addEventListener("DOMContentLoaded", () => {
                  const swiper = new Swiper(".slider2", {
                     loop: true,

                     navigation: {
                        nextEl: ".custom-next",
                        prevEl: ".custom-prev",
                     },

                     breakpoints: {
                        // Mobile - 1 slide
                        320: {
                           slidesPerView: 1,
                           spaceBetween: 10,
                        },
                        // Mobile landscape - 2 slides
                        480: {
                           slidesPerView: 2,
                           spaceBetween: 15,
                        },
                        // Tablet - 3 slides
                        768: {
                           slidesPerView: 3,
                           spaceBetween: 15,
                        },
                        // Desktop - 4 slides
                        1024: {
                           slidesPerView: 5,
                           spaceBetween: 20,
                        },
                     },
                  });
               });
            </script>


<script>
    document.addEventListener("alpine:init", () => {
       Alpine.data("videoHandler", () => ({
          playVideo() {
             this.$refs.video.play();
          },
          pauseVideo() {
             this.$refs.video.pause();
          },
       }));
    });
 </script>

<script>
    document.addEventListener("alpine:init", () => {
      Alpine.data("videoHandler", () => ({
        playVideo() {
          const video = this.$refs.video;
  
          // Videoyu oynat
          video.play();
          video.classList.remove("paused"); // CSS sınıfını temizle
        },
        pauseVideo() {
          const video = this.$refs.video;
  
          // Videoyu durdur
          video.pause();
          video.classList.add("paused"); // CSS sınıfını ekle
        },
      }));
    });
  </script>
       
         @endpush

      @endauth


      @guest

         @include('layouts.sections.home._guestHero')

         @include('layouts.sections.home._guestWatchEnjoy')

         @include('layouts.sections.home._chooseYourPlan')

         <script>
            document.addEventListener("alpine:init", () => {
               Alpine.data("videoHandler", () => ({
                  playVideo() {
                     this.$refs.video.play();
                  },
                  pauseVideo() {
                     this.$refs.video.pause();
                  },
               }));
            });
         </script>

      @endguest
   </section>

@endsection
