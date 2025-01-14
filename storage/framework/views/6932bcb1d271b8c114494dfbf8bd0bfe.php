<?php $__env->startSection('title', 'Anasayfa'); ?>
<?php $__env->startSection('description', 'test.'); ?>
<?php $__env->startSection('keywords', 'test, test, test'); ?>
<?php $__env->startSection('content'); ?>
   <?php if(auth()->guard()->check()): ?>
      <?php echo $__env->make('layouts.sections.home._slideHero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <section class="container mx-auto">
         <?php echo $__env->make('layouts.sections.home._slideFirst', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('layouts.sections.home._slideSecond', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php $__env->startPush('styles'); ?>
            <!-- Swiper CSS dosyanızı ekleyin -->
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/swiper.css']); ?>
         <?php $__env->stopPush(); ?>

         <?php $__env->startPush('scripts'); ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/js/swiper.js']); ?>



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
       
         <?php $__env->stopPush(); ?>

      <?php endif; ?>


      <?php if(auth()->guard()->guest()): ?>

         <?php echo $__env->make('layouts.sections.home._guestHero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php echo $__env->make('layouts.sections.home._guestWatchEnjoy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php echo $__env->make('layouts.sections.home._chooseYourPlan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

      <?php endif; ?>
   </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MovieApp/resources/views/home/index.blade.php ENDPATH**/ ?>