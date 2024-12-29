@extends('layouts.master') @section('title', 'Anasayfa') @section('description', 'test.') @section('keywords', 'test, test, test') @section('content')

<section class="container">
 @auth
 <h1>ANASAYFA -giriş yapıldı</h1>
 <div class="grid gap-5 p-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
  <!-- Card 01 -->
  <div class="relative group overflow-hidden rounded-md cursor-pointer">
   <img src="{{asset('./images/poster1.jpg')}}" alt="poster1" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
   <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
    <h1 class="text-xl font-bold text-white">Jawan</h1>
    <h3 class="text-sm font-semibold text-white mt-1"><i class="fa-solid fa-star"></i> 7.6/10 | 2023-09-07 | 167 Min</h3>
    <p class="text-sm mt-2 text-white">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod delectus doloribus.
    </p>
    <div class="flex space-x-4 mt-3">
     <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
      <i class="fa-solid fa-heart"></i>
     </a>
     <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
      <i class="fa-solid fa-bookmark"></i>
     </a>
     <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
      <i class="fa-solid fa-share"></i>
     </a>
    </div>
   </div>
  </div>
  <!-- Daha Fazla Kartlar -->
    <!-- Card 01 -->
    <div class="relative group overflow-hidden rounded-md cursor-pointer">
        <img src="{{asset('./images/poster2.jpg')}}" alt="poster1" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
         <h1 class="text-xl font-bold text-white">Jawan</h1>
         <h3 class="text-sm font-semibold text-white mt-1"><i class="fa-solid fa-star"></i> 7.6/10 | 2023-09-07 | 167 Min</h3>
         <p class="text-sm mt-2 text-white">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod delectus doloribus.
         </p>
         <div class="flex space-x-4 mt-3">
          <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
           <i class="fa-solid fa-heart"></i>
          </a>
          <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
           <i class="fa-solid fa-bookmark"></i>
          </a>
          <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
           <i class="fa-solid fa-share"></i>
          </a>
         </div>
        </div>
       </div>
       <!-- Daha Fazla Kartlar -->
         <!-- Card 01 -->
  <div class="relative group overflow-hidden rounded-md cursor-pointer">
    <img src="{{asset('./images/poster3.jpg')}}" alt="poster1" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
    <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
     <h1 class="text-xl font-bold text-white">Jawan</h1>
     <h3 class="text-sm font-semibold text-white mt-1"><i class="fa-solid fa-star"></i> 7.6/10 | 2023-09-07 | 167 Min</h3>
     <p class="text-sm mt-2 text-white">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod delectus doloribus.
     </p>
     <div class="flex space-x-4 mt-3">
      <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
       <i class="fa-solid fa-heart"></i>
      </a>
      <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
       <i class="fa-solid fa-bookmark"></i>
      </a>
      <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
       <i class="fa-solid fa-share"></i>
      </a>
     </div>
    </div>
   </div>
   <!-- Daha Fazla Kartlar -->
     <!-- Card 01 -->
  <div class="relative group overflow-hidden rounded-md cursor-pointer">
        <img src="{{asset('./images/poster4.jpg')}}" alt="poster1" class="w-full h-full transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
        <h1 class="text-xl font-bold text-white">Jawan</h1>
        <h3 class="text-sm font-semibold text-white mt-1"><i class="fa-solid fa-star"></i> 7.6/10 | 2023-09-07 | 167 Min</h3>
        <p class="text-sm mt-2 text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod delectus doloribus.
        </p>
        <div class="flex space-x-4 mt-3">
        <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
        <i class="fa-solid fa-heart"></i>
        </a>
        <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
        <i class="fa-solid fa-bookmark"></i>
        </a>
        <a href="#" class="text-white hover:translate-y-[-2px] transition-transform">
        <i class="fa-solid fa-share"></i>
        </a>
        </div>
        </div>
   </div>
   <!-- Daha Fazla Kartlar -->




    <!-- Card -->
    <div class=" group relative bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url('https://via.placeholder.com/300x200');">
        <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-70"></div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
          <button class="px-4 py-2 bg-white text-black rounded-lg">Details</button>
        </div>
      </div>
      <!-- Additional cards -->
      <div class=" group relative bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url('https://via.placeholder.com/300x200');">
        <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-70"></div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
          <button class="px-4 py-2 bg-white text-black rounded-lg">Details</button>
        </div>
      </div>
      <div class="group relative bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url('https://via.placeholder.com/300x200');">
        <div class="absolute inset-0 bg-black bg-opacity-40 transition-opacity group-hover:bg-opacity-70"></div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
          <button class="px-4 py-2 bg-white text-black rounded-lg">Details</button>
        </div>
    </div>



 @endauth
  @guest

 <h1>ANASAYFA -giriş yapılmadı</h1>

 @endguest
</section>

@endsection
