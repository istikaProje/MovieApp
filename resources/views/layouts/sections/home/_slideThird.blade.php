@foreach($categories as $category)
    @if($category->movies->isNotEmpty())
        <div class="bg-third my-4 p-4 rounded-md">
            <div class="swiper slider1">
                <h2 class="bold mb-2 text-xl text-white">
                    <!-- Kategori başlığına tıklanabilir bağlantı ekledik -->
                    <a href="{{ route('movies.index', ['category' => $category->id]) }}" class="hover:underline">
                        {{ $category->name }}
                    </a>
                </h2>
                <div class="pb-1">
                    <div class="swiper-button-prev custom-prev"></div>
                    <div class="swiper-button-next custom-next"></div>
                </div>
                <div class="swiper-wrapper">
                    @foreach($category->movies as $movie)
                        <div class="swiper-slide">
                            <div class="block group relative rounded-lg overflow-hidden">
                                <a href="{{ route('movies.show', $movie->id) }}">
                                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}" class="w-full h-auto aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-10"></div>
                                </a>
                                <div class="absolute top-2 right-2 opacity-100" x-data="{ isFavorite: {{ $movie->isFavorite() ? 'true' : 'false' }} }">
                                    <button type="button" class="add-to-favorites" @click="toggleFavorite({{ $movie->id }}, '{{ asset('storage/' . $movie->image) }}', $event)" @click.prevent>
                                        <i :class="isFavorite ? 'icon-BookmarkOn' : 'icon-BookmarkOff'" class="text-white"></i>
                                    </button>
                                </div>              
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function toggleFavorite(movieId, image, event) {
        $.ajax({
            url: '/favorites/toggle',
            type: 'POST',
            data: {
                movie_id: movieId,
                image: image,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                if (data.status === 'added' || data.status === 'removed') {
                    location.reload();
                }
            }
        });
    }
</script>
