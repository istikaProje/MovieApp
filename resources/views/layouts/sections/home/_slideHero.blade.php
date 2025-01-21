<div class="swiper swiperHero">
    <div class="swiper-wrapper">
        @foreach ($sliderMovies as $movie)
            <div class="swiper-slide">
                <div class="relative ml-auto mr-auto">
                    <div x-data="videoHandler" @mouseenter="playVideo" @mouseleave="pauseVideo">
                        <!-- Video -->
                      <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                            <video x-ref="video" class="object-contain w-full"
                                src="{{ asset('storage/' . $movie->video) }}"
                                poster="{{ asset('storage/' . $movie->poster) }}">
                            </video>
                        </a>
                    </div>
                </div>

                <!-- Radial Gradient Overlay -->
                <div class="hero-overlay pointer-events-none"></div>

                <!-- Content -->
                <div class="absolute bottom-10 left-10 z-20">
                    <div x-data="{ show: false }" class="max-w-[400px]" @mouseenter="show = true" @mouseleave="show = false">
                        <h1 class="text-4xl text-white cursor-pointer font-bold">{{ $movie->title }}</h1>
                        <p
                            x-show="show"
                            x-transition:enter="transition ease-out duration-300"
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
                        <a href="{{ route('movies.watch', ['movie' => $movie->id]) }}">
                            <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                                Şimdi İzle
                            </button>
                        </a>
                        <div class="group relative inline-block">
                            <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                                İzleme Listesine Ekle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Slider Navigasyonu -->
    <div class="swiper-button-next !text-white hover:scale-125"></div>
    <div class="swiper-button-prev !text-white hover:scale-125"></div>
    <div class="swiper-pagination"></div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
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
