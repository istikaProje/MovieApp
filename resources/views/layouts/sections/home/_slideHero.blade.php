@if(isset($sliderMovies) && $sliderMovies->isNotEmpty())
   <div class="swiper swiperHero">
      <div class="swiper-wrapper">
         @foreach ($sliderMovies as $movie)
            <div class="swiper-slide">
               <div class="relative ml-auto mr-auto">
                  <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                     <!-- Video -->
                     <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                        <video x-ref="video" class="object-contain w-full" src="{{ asset('storage/' . $movie->video) }}"
                           poster="{{ asset('storage/' . $movie->poster) }}">
                        </video>
                     </a>
                  </div>
               </div>

               <!-- Radial Gradient Overlay -->
               <div class="hero-overlay pointer-events-none"></div>

               <div class="hero-overlay pointer-events-none"></div>
               <!-- Content -->
               <div class="absolute bottom-10 left-10 z-20">
                  <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">

                     <h2 class="text-4xl text-white cursor-pointer font-bold">{{ $movie->title }}</h2>

                     <p x-show="show" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform translate-y-4"
                        class="mt-2 text-lg text-white line-clamp-2">
                        {{ $movie->description }}
                     </p>
                  </div>
                  <div class="flex gap-4 mt-4">
                     <a href="{{ route('movies.watch', ['movie' => $movie->id]) }}"
                        class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                        <div>
                        <i class="icon-Play2 text-2xl"></i>
                        </div>
                        Şimdi İzle
                     </a>

                     <div class="group relative inline-block" x-data="{ isFavorite: {{ $movie->isFavorite() ? 'true' : 'false' }} }">
                        <button @click="toggleFavorite({{ $movie->id }}, '{{ $movie->poster }}', $event)" 
                                class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                           <i :class="isFavorite ? 'icon-Check' : 'icon-Plus'" class="text-2xl"></i>
                        </button>
                        <div
                           class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                           <span
                              class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                           İzleme Listesi
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>

      <div class="swiper-button-next !text-white hover:scale-125"></div>
      <div class="swiper-button-prev !text-white hover:scale-125"></div>
      <div class="swiper-pagination"></div>
   </div>
@else
   <p class="text-white text-center text-lg md:text-xl lg:text-2xl py-4">İçerikler en kısa zamanda eklenecek.</p>
@endif

<script>
   document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.swiperHero', {
         loop: true,
         autoplay: {
            delay: 5000,
         },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         slidesPerView: 1,
         spaceBetween: 10,
      });
   });
</script>


<script>
   function toggleFavorite(movieId, image, event) {
       if (event) {
           event.preventDefault();
       }
       
       fetch(`/favorites/toggle`, {
           method: 'POST',
           headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': '{{ csrf_token() }}'
           },
           body: JSON.stringify({ movie_id: movieId, image: image })
       })
       .then(response => response.json())
       .then(data => {
           const element = event.target.closest('[x-data]').__x.$data;
           if (data.status === 'added') {
               element.isFavorite = true;
               alert('Added to favorites');
           } else if (data.status === 'removed') {
               element.isFavorite = false;
               alert('Removed from favorites');
           }
       });
   }
</script>
