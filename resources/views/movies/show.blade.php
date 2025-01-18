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
               <a href="{{ route('movies.watch', ['movie' => $movie->id]) }}" class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                  <div>
                     <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                        <title>Play</title>
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M6.643 3.069 C 6.546 3.103,6.392 3.206,6.300 3.298 C 5.973 3.624,6.000 2.855,6.000 12.000 C 6.000 21.144,5.974 20.376,6.299 20.701 C 6.568 20.970,6.964 21.065,7.308 20.944 C 7.580 20.848,20.606 12.815,20.748 12.656 C 21.074 12.289,21.074 11.710,20.748 11.345 C 20.607 11.188,7.572 3.150,7.305 3.055 C 7.107 2.985,6.867 2.990,6.643 3.069 "
                              fill="currentColor" stroke="none" fill-rule="evenodd"></path>
                        </svg>
                     </svg>
                  </div>
                  Şimdi İzle
               </a>

               <div x-data="{ open: false }" class="group relative">
                  <button @click="open = true" class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                     <svg class="fbl-icon _30dE3d _1a_Ljt" viewBox="0 0 24 24" height="24" width="24" role="img"
                        aria-hidden="true">
                        <title>Trailer</title><svg width="24" height="24" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M4.503 3.042 C 3.487 3.214,2.556 3.976,2.202 4.925 C 1.994 5.481,2.001 5.233,2.001 11.992 C 2.000 18.878,1.989 18.550,2.234 19.151 C 2.521 19.857,3.143 20.479,3.849 20.766 C 4.453 21.012,4.024 21.000,12.000 21.000 C 19.974 21.000,19.547 21.012,20.150 20.767 C 20.850 20.482,21.482 19.850,21.767 19.150 C 22.011 18.551,22.000 18.876,22.000 12.000 C 22.000 5.123,22.011 5.449,21.766 4.849 C 21.499 4.193,20.964 3.633,20.296 3.312 C 19.636 2.994,20.412 3.023,12.120 3.015 C 8.039 3.012,4.611 3.024,4.503 3.042 M19.340 5.066 C 19.455 5.105,19.603 5.201,19.701 5.299 C 20.023 5.621,20.000 5.097,20.000 12.000 C 20.000 18.903,20.023 18.379,19.701 18.701 C 19.377 19.025,20.023 19.000,12.000 19.000 C 3.977 19.000,4.623 19.025,4.299 18.701 C 3.977 18.379,4.000 18.903,4.000 12.000 C 4.000 5.096,3.976 5.621,4.300 5.298 C 4.616 4.982,3.975 5.007,11.983 5.003 C 18.550 5.000,19.162 5.006,19.340 5.066 M5.660 6.652 C 5.495 6.817,5.467 6.980,5.486 7.649 C 5.501 8.185,5.537 8.291,5.749 8.429 C 5.840 8.489,5.953 8.500,6.500 8.500 C 7.047 8.500,7.160 8.489,7.251 8.429 C 7.463 8.291,7.499 8.185,7.514 7.649 C 7.533 6.980,7.505 6.817,7.340 6.652 L 7.208 6.520 6.500 6.520 L 5.792 6.520 5.660 6.652 M16.660 6.652 C 16.495 6.817,16.467 6.980,16.486 7.649 C 16.501 8.185,16.537 8.291,16.749 8.429 C 16.840 8.489,16.953 8.500,17.500 8.500 C 18.047 8.500,18.160 8.489,18.251 8.429 C 18.463 8.291,18.499 8.185,18.514 7.649 C 18.533 6.980,18.505 6.817,18.340 6.652 L 18.208 6.520 17.500 6.520 L 16.792 6.520 16.660 6.652 M10.208 9.081 C 9.955 9.235,9.960 9.175,9.960 12.000 C 9.960 14.825,9.955 14.763,10.208 14.921 C 10.473 15.088,10.486 15.081,12.720 13.687 C 14.134 12.806,14.808 12.363,14.870 12.276 C 14.974 12.128,14.986 11.927,14.901 11.761 C 14.856 11.675,14.332 11.328,12.831 10.389 C 11.725 9.698,10.762 9.103,10.692 9.066 C 10.522 8.978,10.369 8.983,10.208 9.081 M5.768 11.067 C 5.534 11.182,5.500 11.301,5.500 12.000 C 5.500 12.952,5.548 13.000,6.500 13.000 C 7.452 13.000,7.500 12.952,7.500 12.000 C 7.500 11.047,7.452 10.999,6.494 11.001 C 6.028 11.002,5.872 11.016,5.768 11.067 M16.768 11.067 C 16.534 11.182,16.500 11.301,16.500 12.000 C 16.500 12.952,16.548 13.000,17.500 13.000 C 18.452 13.000,18.500 12.952,18.500 12.000 C 18.500 11.047,18.452 10.999,17.494 11.001 C 17.028 11.002,16.872 11.016,16.768 11.067 M5.660 15.652 C 5.495 15.817,5.467 15.980,5.486 16.649 C 5.501 17.185,5.537 17.291,5.749 17.429 C 5.840 17.489,5.953 17.500,6.500 17.500 C 7.047 17.500,7.160 17.489,7.251 17.429 C 7.463 17.291,7.499 17.185,7.514 16.649 C 7.533 15.980,7.505 15.817,7.340 15.652 L 7.208 15.520 6.500 15.520 L 5.792 15.520 5.660 15.652 M16.660 15.652 C 16.495 15.817,16.467 15.980,16.486 16.649 C 16.501 17.185,16.537 17.291,16.749 17.429 C 16.840 17.489,16.953 17.500,17.500 17.500 C 18.047 17.500,18.160 17.489,18.251 17.429 C 18.463 17.291,18.499 17.185,18.514 16.649 C 18.533 15.980,18.505 15.817,18.340 15.652 L 18.208 15.520 17.500 15.520 L 16.792 15.520 16.660 15.652 "
                              fill="currentColor" stroke="none" fill-rule="evenodd"></path>
                        </svg>
                     </svg>
                  </button>

                  <div class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                    <span
                       class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                    Fragman İzle
                 </div>

                  <!-- Modal -->
                  <div x-show="open" @click.away="open = false" @click="open = false" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75">
                     <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                        <div class="bg-gray-900 p-4">
                           <button @click="open = false" class="text-white float-right">&times;</button>
                           <h3 class="text-lg leading-6 font-medium text-white">
                              Fragman İzle
                           </h3>
                        </div>
                        <div class="bg-gray-900  p-4 w-full">
                            
                            <iframe class=" w-[560px] h-100 lg:w-[560px] lg:h-[315px]" src="https://www.youtube.com/embed/{{ str_replace('https://www.youtube.com/watch?v=', '', $movie->youtube_link) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        </div>
                     </div>
                  </div>
               </div>
               <div class="group relative ">
                  <button class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                     <svg viewBox="0 0 24 24" height="24" width="24" role="img" aria-hidden="true">
                        <title>Add</title>
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M11.664 2.063 C 11.436 2.146,11.257 2.297,11.131 2.511 L 11.020 2.700 11.009 6.850 L 10.999 11.000 6.924 11.000 C 2.491 11.000,2.677 10.991,2.374 11.222 C 2.301 11.277,2.192 11.408,2.131 11.511 C 2.036 11.672,2.020 11.744,2.020 12.000 C 2.020 12.256,2.036 12.328,2.131 12.489 C 2.192 12.592,2.301 12.723,2.374 12.778 C 2.677 13.009,2.491 13.000,6.925 13.000 L 11.000 13.000 11.000 17.070 C 11.000 19.750,11.015 21.191,11.042 21.289 C 11.103 21.509,11.315 21.762,11.531 21.874 C 11.932 22.080,12.390 22.012,12.700 21.702 C 13.018 21.385,13.000 21.656,13.000 17.073 L 13.000 13.000 17.073 13.000 C 21.654 13.000,21.385 13.017,21.701 12.701 C 22.092 12.310,22.092 11.690,21.701 11.299 C 21.385 10.983,21.654 11.000,17.073 11.000 L 13.000 11.000 13.000 6.927 C 13.000 2.346,13.017 2.615,12.701 2.299 C 12.429 2.027,12.018 1.933,11.664 2.063 "
                              fill="currentColor" stroke="none" fill-rule="evenodd"></path>
                        </svg>
                     </svg>
                  </button>

                  <div class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                    <span
                       class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                     İzleme Listesi
                 </div>

               </div>

            </div>


            <div class="relative">
                <!-- Film İçeriği -->
                {{-- <div>
                    <h1 class="text-4xl font-bold">{{ $movie->title }}</h1>
                    <p>{{ $movie->description }}</p>
                </div> --}}

                <!-- Yorumlar -->
                <div class="mt-8">
                    <h2 class="text-2xl font-semibold">Yorumlar</h2>

                    @auth
                        <!-- Yorum Formu -->
                        <form action="{{ route('movies.comment', $movie->id) }}" method="POST" class="mt-4">
                            @csrf
                            <textarea name="content" rows="4" class="w-full border-gray-300 rounded-lg" placeholder="Yorumunuzu yazın..." required></textarea>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Gönder</button>
                        </form>
                    {{-- @else
                        <p class="mt-4">Yorum yapmak için <a href="{{ route('login') }}" class="text-blue-500">giriş yapın</a>.</p> --}}
                    @endauth

                    <!-- Yorum Listesi -->
                    <div class="mt-6">
                        @forelse ($movie->comments as $comment)
                            <div class="border-b border-gray-300 py-4">
                                <p class="text-sm text-gray-600">{{ $comment->user->name }} - {{ $comment->created_at->format('d M Y, H:i') }}</p>
                                <p>{{ $comment->content }}</p>
                            </div>
                        @empty
                            <p>Henüz yorum yapılmamış.</p>
                        @endforelse
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
@endsection


