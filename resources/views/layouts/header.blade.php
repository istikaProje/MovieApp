<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false
}" class=" sticky top-0 z-50 flex w-full items-center bg-primary header-shadow">
   <div class="container mx-auto">
      <div class="relative flex items-center justify-between">
         <div class="px-4">
            <a href="{{ route('home') }}" class="block max-w-[160px] w-full py-3">
               <img src="{{ asset('images/MovieWatchLogo.png') }}" alt="logo" class="w-full" />
            </a>
         </div>


         <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:shadow-none">
            <ul class="block lg:flex">
               <li>
                  <a href="{{ route('home') }}"
                     class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                     Home
                  </a>
               </li>
               <li>
                  <a href="{{ route('movies.index') }}"
                     class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                     Movies
                  </a>
               </li>
               <li>
                  <a href="{{ route('about_us') }}"
                     class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                     About Us
                  </a>
               </li>






            </ul>
         </nav>


         @guest
            <div class="justify-end pr-16 sm:flex lg:pr-0">
               <a href="{{ route('login') }}" class="py-3 px-7 text-base font-medium text-white hover:opacity-30">
                  Login
               </a>

               <a href="{{ route('register') }}"
                  class="rounded-lg bg-white py-3 px-7 text-base flex-shrink-0 font-medium text-dark hover:opacity-90">
                  Sign Up
               </a>
            </div>

         @endguest


         @auth


            <div x-data="{ openDropDown: false }" class=" block mr-5">
               <button @click="openDropDown = !openDropDown" class="flex items-center text-left">
                  <div class="relative mr-4 h-[62px] w-[62px] rounded-full">
                     <img class="h-full w-full rounded-full object-cover object-center" src="{{ Auth::check() && Auth::user()->profile_photo ? asset('avatars/' . Auth::user()->profile_photo) : asset('images/smile-icon.jpg') }}"
                        alt="" />
                  </div>

               </button>
               <div x-show="openDropDown" @click.outside="openDropDown = false"
                  class="shadow-card absolute right-0 top-full z-40 w-[200px] space-y-1 rounded bg-third text-white p-2">

                  @if (Auth::user()->role === 'admin')
                     <a class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm"
                        href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                  @endif

                  <a href="{{ route('dashboard') }}"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Dashboard
                  </a>
                  <a href="{{ route('home') }}"
                     class="hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Home
                  </a>
                  <a href="{{ route('movies.index') }}"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Movies
                  </a>








                  <form action="{{ route('logout') }}" method="post">
                     @csrf
                     <button
                        class="hover:bg-third hover:text-white block w-full rounded py-2 px-3 text-left text-sm ">Logout</button>
                  </form>

               </div>
            </div>

         @endauth
      </div>



   </div>
   </div>
   </div>
</header>
<!-- ====== Navbar Section End -->
