<div class="swiper swiperHero">
   <div class="swiper-wrapper">
       <div class="swiper-slide">
           <div class="relative ml-auto mr-auto">
               <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                   <!-- Video -->
                   <video x-ref="video" class="object-contain w-full" src="<?php echo e(asset('videos/BreakingBad.webm')); ?>" poster="<?php echo e(asset('images/heroslider.webp')); ?>"></video>
               </div>
           </div>

           <!-- Radial Gradient Overlay -->

           <div class="hero-overlay pointer-events-none"></div>
           <!-- Content -->
           <div class="absolute bottom-10 left-10 z-20">
               <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">
                   
                   <img src="<?php echo e(asset('images/freelance.webp')); ?>" alt="freelance tetikci" />

                   <p
                       x-show="show"
                       x-transition:enter="transition ease-out duration-300"
                       x-transition:enter-start="opacity-0 transform translate-y-4"
                       x-transition:enter-end="opacity-100 transform translate-y-0"
                       x-transition:leave="transition ease-in duration-300"
                       x-transition:leave-start="opacity-100 transform translate-y-0"
                       x-transition:leave-end="opacity-0 transform translate-y-4"
                       class="mt-2 text-lg text-white line-clamp-2"
                   >
                       Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste modi magnam est maxime nesciunt, officiis fugiat fuga. Quidem nemo, vero assumenda dolore sed quos, ut laborum nostrum eum necessitatibus fugit.
                       Inventore ut corporis quas assumenda voluptatum, nisi modi est incidunt vero tempora nobis dolor excepturi, at, dicta libero commodi ullam voluptas. Dolorem neque dolores rem voluptatibus aspernatur, placeat eos a.
                       Ut delectus ea eum expedita omnis aspernatur reprehenderit excepturi optio, reiciendis error laboriosam laudantium ipsam iste odit aut officiis, et tempora quasi sequi voluptas. Minus a vel exercitationem excepturi
                       molestias. Quos non corporis iusto ab fuga accusamus hic qui ipsam blanditiis? In, ab impedit amet debitis alias enim unde iure excepturi iusto eaque cum rerum, quod consequatur perspiciatis laudantium aperiam?
                       Voluptates reiciendis dolore nulla, aut ex commodi aspernatur enim reprehenderit facere rem! Sint perferendis nisi recusandae debitis? Quo nostrum, quia saepe autem earum tempore atque voluptates, praesentium vitae
                       fuga sit.
                   </p>
               </div>
               <div class="flex gap-4 mt-4">
                   <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                       <div>
                           <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                               <title>Play</title>
                               <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                       d="M6.643 3.069 C 6.546 3.103,6.392 3.206,6.300 3.298 C 5.973 3.624,6.000 2.855,6.000 12.000 C 6.000 21.144,5.974 20.376,6.299 20.701 C 6.568 20.970,6.964 21.065,7.308 20.944 C 7.580 20.848,20.606 12.815,20.748 12.656 C 21.074 12.289,21.074 11.710,20.748 11.345 C 20.607 11.188,7.572 3.150,7.305 3.055 C 7.107 2.985,6.867 2.990,6.643 3.069 "
                                       fill="currentColor"
                                       stroke="none"
                                       fill-rule="evenodd"
                                   ></path>
                               </svg>
                           </svg>
                       </div>
                       Şimdi İzle
                   </button>

                   <div class="group relative inline-block">
                       <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                           <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                               <title>Add</title>
                               <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                       d="M11.664 2.063 C 11.436 2.146,11.257 2.297,11.131 2.511 L 11.020 2.700 11.009 6.850 L 10.999 11.000 6.924 11.000 C 2.491 11.000,2.677 10.991,2.374 11.222 C 2.301 11.277,2.192 11.408,2.131 11.511 C 2.036 11.672,2.020 11.744,2.020 12.000 C 2.020 12.256,2.036 12.328,2.131 12.489 C 2.192 12.592,2.301 12.723,2.374 12.778 C 2.677 13.009,2.491 13.000,6.925 13.000 L 11.000 13.000 11.000 17.070 C 11.000 19.750,11.015 21.191,11.042 21.289 C 11.103 21.509,11.315 21.762,11.531 21.874 C 11.932 22.080,12.390 22.012,12.700 21.702 C 13.018 21.385,13.000 21.656,13.000 17.073 L 13.000 13.000 17.073 13.000 C 21.654 13.000,21.385 13.017,21.701 12.701 C 22.092 12.310,22.092 11.690,21.701 11.299 C 21.385 10.983,21.654 11.000,17.073 11.000 L 13.000 11.000 13.000 6.927 C 13.000 2.346,13.017 2.615,12.701 2.299 C 12.429 2.027,12.018 1.933,11.664 2.063 "
                                       fill="currentColor"
                                       stroke="none"
                                       fill-rule="evenodd"
                                   ></path>
                               </svg>
                           </svg>
                       </button>
                       <div class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                           <span class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                           İzleme Listesi
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="swiper-slide">
         <div class="relative ml-auto mr-auto">
             <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                 <!-- Video -->
                 <video x-ref="video" class="object-contain w-full" src="<?php echo e(asset('videos/BreakingBad.webm')); ?>" poster="<?php echo e(asset('images/heroslider.webp')); ?>"></video>
             </div>
         </div>

         <!-- Radial Gradient Overlay -->

         <div class="hero-overlay pointer-events-none"></div>
         <!-- Content -->
         <div class="absolute bottom-10 left-10 z-20">
             <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">
                 
                 <img src="<?php echo e(asset('images/freelance.webp')); ?>" alt="freelance tetikci" />

                 <p
                     x-show="show"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform translate-y-4"
                     class="mt-2 text-lg text-white line-clamp-2"
                 >
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste modi magnam est maxime nesciunt, officiis fugiat fuga. Quidem nemo, vero assumenda dolore sed quos, ut laborum nostrum eum necessitatibus fugit.
                     Inventore ut corporis quas assumenda voluptatum, nisi modi est incidunt vero tempora nobis dolor excepturi, at, dicta libero commodi ullam voluptas. Dolorem neque dolores rem voluptatibus aspernatur, placeat eos a.
                     Ut delectus ea eum expedita omnis aspernatur reprehenderit excepturi optio, reiciendis error laboriosam laudantium ipsam iste odit aut officiis, et tempora quasi sequi voluptas. Minus a vel exercitationem excepturi
                     molestias. Quos non corporis iusto ab fuga accusamus hic qui ipsam blanditiis? In, ab impedit amet debitis alias enim unde iure excepturi iusto eaque cum rerum, quod consequatur perspiciatis laudantium aperiam?
                     Voluptates reiciendis dolore nulla, aut ex commodi aspernatur enim reprehenderit facere rem! Sint perferendis nisi recusandae debitis? Quo nostrum, quia saepe autem earum tempore atque voluptates, praesentium vitae
                     fuga sit.
                 </p>
             </div>
             <div class="flex gap-4 mt-4">
                 <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                     <div>
                         <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                             <title>Play</title>
                             <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M6.643 3.069 C 6.546 3.103,6.392 3.206,6.300 3.298 C 5.973 3.624,6.000 2.855,6.000 12.000 C 6.000 21.144,5.974 20.376,6.299 20.701 C 6.568 20.970,6.964 21.065,7.308 20.944 C 7.580 20.848,20.606 12.815,20.748 12.656 C 21.074 12.289,21.074 11.710,20.748 11.345 C 20.607 11.188,7.572 3.150,7.305 3.055 C 7.107 2.985,6.867 2.990,6.643 3.069 "
                                     fill="currentColor"
                                     stroke="none"
                                     fill-rule="evenodd"
                                 ></path>
                             </svg>
                         </svg>
                     </div>
                     Şimdi İzle
                 </button>

                 <div class="group relative inline-block">
                     <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                         <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                             <title>Add</title>
                             <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M11.664 2.063 C 11.436 2.146,11.257 2.297,11.131 2.511 L 11.020 2.700 11.009 6.850 L 10.999 11.000 6.924 11.000 C 2.491 11.000,2.677 10.991,2.374 11.222 C 2.301 11.277,2.192 11.408,2.131 11.511 C 2.036 11.672,2.020 11.744,2.020 12.000 C 2.020 12.256,2.036 12.328,2.131 12.489 C 2.192 12.592,2.301 12.723,2.374 12.778 C 2.677 13.009,2.491 13.000,6.925 13.000 L 11.000 13.000 11.000 17.070 C 11.000 19.750,11.015 21.191,11.042 21.289 C 11.103 21.509,11.315 21.762,11.531 21.874 C 11.932 22.080,12.390 22.012,12.700 21.702 C 13.018 21.385,13.000 21.656,13.000 17.073 L 13.000 13.000 17.073 13.000 C 21.654 13.000,21.385 13.017,21.701 12.701 C 22.092 12.310,22.092 11.690,21.701 11.299 C 21.385 10.983,21.654 11.000,17.073 11.000 L 13.000 11.000 13.000 6.927 C 13.000 2.346,13.017 2.615,12.701 2.299 C 12.429 2.027,12.018 1.933,11.664 2.063 "
                                     fill="currentColor"
                                     stroke="none"
                                     fill-rule="evenodd"
                                 ></path>
                             </svg>
                         </svg>
                     </button>
                     <div class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                         <span class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                         İzleme Listesi
                     </div>
                 </div>
             </div>
         </div>
     </div>

      
   </div>

   <div class="swiper-button-next !text-white hover:scale-125"></div>
   <div class="swiper-button-prev !text-white hover:scale-125"></div>
   <div class="swiper-pagination"></div>
</div>
<?php /**PATH /var/www/MovieApp/resources/views/layouts/sections/home/_slideHero.blade.php ENDPATH**/ ?>