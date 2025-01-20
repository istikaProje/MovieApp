<div class="rounded-md mb-5 mt-5">
    @foreach($categories as $category)
        <h2 class="bold mb-2 text-xl text-white">
            <!-- Kategori başlığına tıklanabilir bağlantı ekledik -->
            <a href="{{ route('movies.index', ['category' => $category->id]) }}" class="hover:underline">
                {{ $category->name }}
            </a>
        </h2>
        <div class="swiper slider1 ">
            <div class="pb-1">
                <div class="swiper-button-prev custom-prev"></div>
                <div class="swiper-button-next custom-next"></div>
            </div>
            <div class="swiper-wrapper bg-third p-5  ">
                @foreach($category->movies as $movie)
                    <div class="swiper-slide">
                        <!-- Filme tıklanabilir bağlantı -->
                        <a href="{{ route('movies.show', $movie->id) }}" class="block">
                            <div class="relative group overflow-hidden rounded-md cursor-pointer">
                                <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
                                <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
                                    <h1 class="text-xl font-bold text-white">{{ $movie->title }}</h1>
                                    <h3 class="text-sm font-semibold text-white mt-1">
                                        <i class="fa-solid fa-star"></i> {{ $movie->rating }} | {{ $movie->release_date }} | {{ $movie->duration }} Min
                                    </h3>
                                    <p class="text-sm mt-2 text-white">{{ $movie->description }}</p>
                                    <div class="flex space-x-4 mt-3">
                                        <span class="text-white hover:translate-y-[-2px] transition-transform">
                                            <i class="fa-solid fa-heart"></i>
                                        </span>
                                        <span class="text-white hover:translate-y-[-2px] transition-transform">
                                            <i class="fa-solid fa-bookmark"></i>
                                        </span>
                                        <span class="text-white hover:translate-y-[-2px] transition-transform">
                                            <i class="fa-solid fa-share"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
