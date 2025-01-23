@extends('layouts.master')

@section('content')
   <div class="relative">
      <div class=" ml-auto mr-auto">
         <div>
            <!-- Video -->
            <video class="object-contain w-full" src="{{ asset('storage/' . $movie->video) }}"
               poster="{{ asset('storage/' . $movie->poster) }}"></video>


         </div>
      </div>

      <!-- Radial Gradient Overlay -->

      <!-- Content Wrapper -->
      <div class="relative">


         <!-- Content -->
         <div class="absolute bottom-10 left-10 z-20">

            <h1 class="text-4xl text-white cursor-pointer font-bold">{{ $movie->title }}</h1>
            <p class="mt-2 text-lg text-white max-w-[500px]">
               {{ $movie->description }}
            </p>

            <div class="flex gap-4 mt-4">
               <a href="{{ route('movies.watch', ['movie' => $movie->id]) }}"
                  class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                  <div>
                  <i class="icon-Play2 text-2xl"></i>
                  </div>
                  Şimdi İzle
               </a>

               <div x-data="{ open: false }" class="group relative">
                  <button @click="open = true"
                     class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                     <i class="icon-Movie text-2xl"></i>
                  </button>

                  <div
                     class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                     <span
                        class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                     Fragman İzle
                  </div>

                  <!-- Modal -->
                  <div x-show="open" @click.away="open = false" @click="open = false"
                     class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75">
                     <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                        <div class="bg-gray-900 p-4">
                           <button @click="open = false" class="text-white float-right">&times;</button>
                           <h3 class="text-lg leading-6 font-medium text-white">
                              Fragman İzle
                           </h3>
                        </div>
                        <div class="bg-gray-900  p-4 w-full">
                           <iframe class=" w-[560px] h-100 lg:w-[560px] lg:h-[315px]"
                              src="https://www.youtube.com/embed/{{ str_replace('https://www.youtube.com/watch?v=', '', $movie->youtube_link) }}"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="group relative" x-data="{ isFavorite: {{ $movie->isFavorite() ? 'true' : 'false' }} }">
                  <button @click="toggleFavorite({{ $movie->id }}, '{{ $movie->poster }}', $event); isFavorite = !isFavorite" 
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

   </div>



   <div class=" px-4  mt-10">

      <div class="flex">
         <div class="bg-third rounded-md w-full  p-4 lg:w-3/4 md:w-2/3">

            <h3 class="mb-4 text-lg font-semibold bg-h text-white ">Comments</h3>


            <div class="h-96 overflow-y-auto">
               @if ($movie->comments->isEmpty())
                  <p class="text-white">İlk yorumu siz yapın!</p>
               @else
                  @foreach ($movie->comments as $comment)
                     {{-- mevcut yorumlar --}}

                     <div class="flex  space-y-4 ">
                        <div class="flex-shrink-0 mr-3">
                           <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                              src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                              alt="">
                        </div>
                        <div
                           class="flex-1 border bg-white text-gray-900 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">

                           <div class="flex justify-between">
                              {{-- Yorum Yapan: --}}
                              <div>
                                 <strong>{{ $comment->user->name }}</strong> <span class="text-xs text-gray-400">3:34
                                    PM</span>

                              </div>
                              <!-- Yorum Silme Butonu -->
                              @auth
                                 @if (auth()->user()->id === $comment->user_id || auth()->user()->isAdmin())
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                                       style="display: inline;">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit"
                                          class="flex  rounded-md px-4 py-2 text-sm   hover:bg-red-100 active:bg-red-200 cursor-pointer text-red-700">
                                          Sil
                                       </button>
                                    </form>
                                 @endif
                              @endauth
                           </div>

                           {{-- Yorum içerik --}}

                           <p class="text-sm">
                              {{ $comment->content }}
                           </p>

                        </div>
                     </div>
                  @endforeach
               @endif
            </div>

            <div class="mt-10">
               <!-- Yorum Ekleme Formu -->
               @auth
                  <form action="{{ route('movies.comment', $movie->id) }}" method="POST" style="margin-top: 20px;">
                     @csrf
                     <textarea name="content" rows="3" placeholder="Yorumunuzu yazın..." required
                        class="w-100 border rounded-md mb-4 w-full p-3"></textarea>
                     <button type="submit"
                        class="px-4 py-2 bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex  rounded">
                        Yorum Ekle
                     </button>
                  </form>
               @endauth

            </div>

            <div>

        
            </div>


         </div>


         <div class="bg-third rounded-md hidden sm:!block sm:w-1/2 md:w-1/3 lg:w-1/4   ml-4  p-4">
            <h3 class="mb-4 text-lg font-semibold bg-h text-white ">Önerilen Flimler</h3>

            @if(isset($recommendedMovies))
               <div class="max-h-[660px] overflow-y-auto space-y-4">
                  @foreach ($recommendedMovies as $recommendedMovie)
                     @if ($recommendedMovie->id !== $movie->id && $recommendedMovie->categories->intersect($movie->categories)->isNotEmpty())
                        <div class="group relative rounded-lg overflow-hidden">
                           <img src="{{ asset('storage/' . $recommendedMovie->poster) }}" alt="{{ $recommendedMovie->title }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                           <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-70"></div>
                           <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                              <a href="{{ route('movies.show', ['id' => $recommendedMovie->id]) }}" class="px-4 py-2 bg-white text-black rounded-lg">Details</a>
                           </div>
                        </div>
                     @endif
                  @endforeach
               </div>
            @else
               <p class="text-white">No recommended movies available.</p>
            @endif
         </div>

      </div>


   </div>
@endsection

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
            if (data.status === 'added') {
                alert('Added to favorites');
            } else if (data.status === 'removed') {
                alert('Removed from favorites');
            }
        });
    }
</script>
