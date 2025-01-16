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
         <div class="flex w-full items-center justify-between px-4">
            <div>



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
                        <a href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                           Movies
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                           Series
                        </a>
                     </li>


                     <li>
                        <!-- Dropdown 1 -->
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                           :class="{ 'text-gray-900': open, 'text-gray-600': !open }">
                           <!-- Dropdown Toggle Button -->
                           <button @mouseover="open = true"
                              class="flex py-2 items-center font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                              <span class="mr-4">Categories</span>
                              <span :class="open = !open ? '' : '-rotate-180'"
                                 class="transition-transform duration-500 transform">
                                 <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                       d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                 </svg> <!-- Arrow Svg -->
                              </span>
                           </button>
                           <!-- End Dropdown Toggle Button -->

                           <!-- Dropdown Menu -->
                           <div x-show="open" x-transition:enter="transition ease-out duration-300"
                              x-transition:enter-start="opacity-0 transform scale-90"
                              x-transition:enter-end="opacity-100 transform scale-100"
                              x-transition:leave="transition ease-in duration-300"
                              x-transition:leave-start="opacity-100 transform scale-100"
                              x-transition:leave-end="opacity-0 transform scale-90"
                              class="absolute right-0  text-white bg-third rounded-lg p-2 shadow-xl min-w-max">

                              @foreach($categories as $category)
                              <a href="{{ route('category.show', $category->id) }}" class="block px-4 py-1 hover:text-third hover:bg-white rounded">{{ $category->name }}</a>
                              @endforeach

                           </div>
                           <!-- End Dropdown Menu -->
                        </div>
                        <!-- End Dropdown 1 -->
            </div>
            </li>
            </ul>
            </nav>
         </div>

         @guest
            <div class="justify-end pr-16 sm:flex lg:pr-0">
               <a href="{{ route('login') }}" class="py-3 px-7 text-base font-medium text-white hover:opacity-30">
                  Login
               </a>

               <a href="{{ route('register') }}"
                  class="rounded-lg bg-white py-3 px-7 text-base font-medium text-dark hover:opacity-90">
                  Sign Up
               </a>
            </div>

         @endguest

         @auth


            <div x-data="{ openDropDown: false }" class=" block mr-5">
               <button @click="openDropDown = !openDropDown" class="flex items-center text-left">
                  <div class="relative mr-4 h-[62px] w-[62px] rounded-full">
                     <img class="h-full w-full rounded-full object-cover object-center" src="https://picsum.photos/200"
                        alt="" />
                  </div>

               </button>
               <div x-show="openDropDown" @click.outside="openDropDown = false"
                  class="shadow-card absolute right-0 top-full z-40 w-[200px] space-y-1 rounded bg-third text-white p-2">

                  @if (Auth::user()->role === 'admin')

                        <a class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>

               @endif

                  <a href="{{ route('dashboard') }}"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Dashboard
                  </a>
                  <a href="{{ route('home') }}"
                     class="hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Home
                  </a>
                  <a href="{{ route('dashboard') }}"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Movies
                  </a>
                  <a href="{{ route('dashboard') }}"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm ">
                     Series
                  </a>
                  <div x-data="{ open: false }" class="relative">
                     <a href="javascript:void(0)" @click="open = !open"
                        class="hover:bg-white hover:text-third  w-full flex items-center rounded py-2 px-3 text-left text-sm">
                        Categories
                        <span :class="open ? '-rotate-180' : ''"
                           class="transition-transform  ml-2 duration-500 transform inline-block">
                           <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                           </svg> <!-- Arrow Svg -->
                        </span>
                     </a>
                     <div x-show="open" @click.away="open = false"
                        class="absolute left-0 mt-2 w-48 bg-third text-white p-2 rounded shadow-lg">
                        @foreach($categories as $category)
                        <a href="{{ route('category.show', $category->id) }}" class="block px-4 py-1 hover:text-third hover:bg-white rounded">{{ $category->name }}</a>
                        @endforeach
                     </div>
                  </div>





                  <form action="{{ route('logout') }}" method="post">
                     @csrf
                     <button class="hover:bg-third hover:text-white block w-full rounded py-2 px-3 text-left text-sm ">Logout</button>
                  </form>

               </div>
            </div>

         @endauth
      </div>
   </div>
   </div>
</header>
<!-- ====== Navbar Section End -->
