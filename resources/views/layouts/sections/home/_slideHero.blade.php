<div class="swiper swiperHero">
   <div class="swiper-wrapper">
       <div class="swiper-slide">
           <div class="relative ml-auto mr-auto">
               <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                   <!-- Video -->
                   <video x-ref="video" class="object-contain w-full" src="{{ asset('videos/BreakingBad.webm') }}" poster="{{ asset('images/heroslider.webp') }}"></video>
               </div>
           </div>

           <!-- Radial Gradient Overlay -->

           <div class="hero-overlay pointer-events-none"></div>
           <!-- Content -->
           <div class="absolute bottom-10 left-10 z-20">
               <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">
                   {{--
                   <h1 class="text-4xl text-white cursor-pointer font-bold">Kaçık Astronot</h1>
                   --}}
                   <img src="{{asset('images/freelance.webp')}}" alt="freelance tetikci" />

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

                   <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex items-center px-6 py-3 rounded">
                    <div class="flex items-center mr-2">
                        <i class="icon-Play2" style="font-size: 24px;"></i> <!-- Play SVG -->
                    </div>
                    Şimdi İzle
                    </button>

                   <div class="group relative inline-block">
                       <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                            <i class="icon-Plus" style="font-size: 24px;"> </i> <!-- Plus SVG -->
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
                 <video x-ref="video" class="object-contain w-full" src="{{ asset('videos/BreakingBad.webm') }}" poster="{{ asset('images/heroslider.webp') }}"></video>
             </div>
         </div>

         <!-- Radial Gradient Overlay -->

         <div class="hero-overlay pointer-events-none"></div>
         <!-- Content -->
         <div class="absolute bottom-10 left-10 z-20">
             <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">
                 {{--
                 <h1 class="text-4xl text-white cursor-pointer font-bold">Kaçık Astronot</h1>
                 --}}
                 <img src="{{asset('images/freelance.webp')}}" alt="freelance tetikci" />

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
                <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex items-center px-6 py-3 rounded">
                    <div class="flex items-center mr-2">
                        <i class="icon-Play2" style="font-size: 24px;"></i> <!-- Play SVG -->
                    </div>
                    Şimdi İzle
                    </button>

                 <div class="group relative inline-block">
                    <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                        <i class="icon-Plus" style="font-size: 24px;"> </i> <!-- Plus SVG -->
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
