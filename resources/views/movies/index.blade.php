@extends('layouts.master')

@section('content')

<x-hero-section title="Movies" subtitle="You can select a category and watch the movie you want." backgroundImage="{{ asset('images/loginBg.jpg') }}" />


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
                              <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" id="star">
                                 <path fill="#f8b84e" d="M-1220 1212.362c-11.656 8.326-86.446-44.452-100.77-44.568-14.324-.115-89.956 51.449-101.476 42.936-11.52-8.513 15.563-95.952 11.247-109.61-4.316-13.658-76.729-69.655-72.193-83.242 4.537-13.587 96.065-14.849 107.721-23.175 11.656-8.325 42.535-94.497 56.86-94.382 14.323.116 43.807 86.775 55.327 95.288 11.52 8.512 103.017 11.252 107.334 24.91 4.316 13.658-68.99 68.479-73.527 82.066-4.536 13.587 21.133 101.451 9.477 109.777z" color="#000" overflow="visible" style="marker:none" transform="matrix(.04574 0 0 .04561 68.85 -40.34)"></path>
                              </svg>{{ $movie->vote_average }}/10
                           </p>
                           <p class="text-sm mt-2 line-clamp-3 text-white">{{ $movie->description }}</p>
                           <div class="flex text-white hover:translate-y-[-2px] transition-transform mt-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="save" fill="currentColor">
                                 <path d="M18,2H6A1,1,0,0,0,5,3V21a1,1,0,0,0,1.65.76L12,17.27l5.29,4.44A1,1,0,0,0,18,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,19,21V3A1,1,0,0,0,18,2ZM17,18.86,12.64,15.2a1,1,0,0,0-1.28,0L7,18.86V4H17Z"></path>
                              </svg>
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
@endsection
