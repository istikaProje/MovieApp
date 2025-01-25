
<div class="bg-third rounded-md hidden sm:block sm:w-1/2 md:w-1/3 lg:w-1/4 ml-4 p-4">
    <h3 class="mb-4 text-lg font-semibold bg-h text-white ">Önerilen Flimler</h3>

    @if(isset($recommendedMovies))
       <div class="max-h-[660px] overflow-y-auto space-y-4">
          @foreach ($recommendedMovies as $recommendedMovie)
             @if ($recommendedMovie->id !== $movie->id && $recommendedMovie->categories->intersect($movie->categories)->isNotEmpty())
                <div class="group relative rounded-lg overflow-hidden">
                   <img src="{{ asset('storage/' . $recommendedMovie->poster) }}"  loading="lazy" alt="{{ $recommendedMovie->title }}" class="w-full  object-cover transition-transform duration-300  group-hover:scale-105">
                   <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-70"></div>
                   <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                      <a href="{{ route('movies.show', ['id' => $recommendedMovie->id]) }}" class="px-4 py-2 bg-white text-black rounded-lg">Detaylar</a>
                   </div>
                </div>
             @endif
          @endforeach
       </div>
    @else
       <p class="text-white">Önerilen film bulunamadı.</p>
    @endif
 </div>
