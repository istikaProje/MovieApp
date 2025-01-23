@extends('layouts.master')

@section('content')

@include('layouts.sections._heroSection', ['title' => 'Movies' , 'subtitle'=> 'Explore our extensive collection of movies' , 'backgroundImage' => asset('images/moviebg.jpg') ])


   <div class="container mx-auto py-8">
      <h1 class="text-3xl font-bold text-white mb-6">Movies</h1>

      <div class="flex flex-col md:flex-row">
         <div class="w-full md:w-4/12 px-4 mb-6 md:mb-0">
            <div class="rounded-lg bg-third py-6 px-8 lg:px-6 xl:px-8">
               <h3 class="border-b border-[#b67c7c] pb-4 text-lg font-semibold text-white">
                  Categories
               </h3>
               <ul class="pt-6 max-h-96 overflow-y-auto">
                  <li class="mb-3">
                     <a href="{{ route('movies.index', ['category' => 'all']) }}"
                        class="text-white hover:text-primary flex p-2 rounded-md items-center text-base font-medium {{ $category_id == 'all' ? 'bg-secondary text-white' : 'bg-primary text-white hover:bg-secondary' }}">
                        Tümü
                     </a>
                  </li>
                  @foreach ($categories as $category)
                     <li class="mb-3">
                        <a href="{{ route('movies.index', ['category' => $category->id]) }}"
                           class="text-white hover:text-primary flex p-2 rounded-md items-center text-base font-medium {{ $category_id == $category->id ? 'bg-secondary text-white' : 'bg-primary text-white hover:bg-secondary' }}">
                           {{ $category->name }}
                        </a>
                     </li>
                  @endforeach
               </ul>
            </div>
         </div>
         <!-- Movies List -->
         <div class="w-full md:w-8/12">
            @if ($movies->isEmpty())
               <div class="text-white text-center py-8">
                  <h2 class="text-2xl font-semibold">Yakın zamanda eklenecek içerikler</h2>
               </div>
            @else
               <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                  @foreach ($movies as $movie)
                     <a href="{{ route('movies.show', $movie->id) }}" class="relative group overflow-hidden rounded-md cursor-pointer">
                        <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}"
                           class="w-full h-full transition-transform duration-500 group-hover:scale-105"
                           onerror="this.onerror=null;this.src='{{ asset('images/fallback.jpg') }}';">
                        <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
                           <h2 class="text-xl font-bold line-clamp-1 text-white">{{ $movie->title }}</h2>
                           <p class="text-sm font-semibold text-white mt-1 flex">
                              <i class="icon-Star text-xl text-yellow-600"> <span class=" !text-md text-white">{{ $movie->vote_average }}/10</span> </i> <!-- Check Icon -->
                           </p>
                           <p class="text-sm my-3  line-clamp-3 text-white">{{ $movie->description }}</p>

                           <div class="absolute bottom-0 left-4  opacity-100" x-data="{ isFavorite: {{ $movie->isFavorite() ? 'true' : 'false' }} }">
                              <button type="button" class="add-to-favorites" @click="toggleFavorite({{ $movie->id }}, '{{ asset('storage/' . $movie->image) }}', $event)" @click.prevent>
                                 <i :class="isFavorite ? 'icon-BookmarkOn' : 'icon-BookmarkOff'" class="text-white"></i>
                              </button>
                           </div>
                        </div>
                     </a>
                  @endforeach
               </div>
            @endif
         </div>
      </div>

      <!-- Pagination -->
      <div class="mt-6 px-3">
         {{ $movies->links() }}
      </div>
   </div>

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
@endsection
