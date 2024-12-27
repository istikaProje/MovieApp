<!-- ====== Navbar Section Start -->
<header
 x-data="
        {
          navbarOpen: false
        }
      "
 class="flex w-full items-center bg-primary header-shadow"
>
 <div class="container mx-auto">
  <div class="relative flex items-center justify-between">
   <div class="px-4">
    <a href="{{route('home') }}" class="block max-w-[160px] w-full py-3">
     <img src="{{asset('images/MovieWatchLogo.png')}}" alt="logo" class="w-full" />
    </a>
   </div>
   <div class="flex w-full items-center justify-between px-4">
    <div>
       <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="absolute right-1  top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
      <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
      <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
      <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
     </button>
        
  
     <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:shadow-none">
      <ul class="block lg:flex">
       <li>
        <a href="{{route('home') }}" class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
         Home
        </a>
       </li>
       <li>
        <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
         Payment
        </a>
       </li>
       <li>
        <a href="javascript:void(0)" class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
         Features
        </a>
       </li>
      </ul>
     </nav>
    </div>

    @guest
    <div class="justify-end pr-16 sm:flex lg:pr-0">
     <a href="{{route('login') }}" class="py-3 px-7 text-base font-medium text-white hover:opacity-30">
      Login
     </a>

     <a href="{{route('register') }}" class="rounded-lg bg-white py-3 px-7 text-base font-medium text-dark hover:opacity-90">
      Sign Up
     </a>
    </div>

    @endguest

     @auth

    <div x-data="{openDropDown: false}" class=" block mr-5">
     <button @click="openDropDown = !openDropDown" class="flex items-center text-left">
      <div class="relative mr-4 h-[62px] w-[62px] rounded-full">
       <img class="h-full w-full rounded-full object-cover object-center" src="https://picsum.photos/200" alt="" />
      </div>
      {{-- <span class="text-white">
       <svg width="17" height="9" viewBox="0 0 17 9" class="fill-current">
        <path
         d="M1.14147 0.853245C1.14147 0.754705 1.19074 0.631528 1.26465 0.557623C1.4371 0.385177 1.70808 0.385177 1.88053 0.532988L8.48276 6.74106C8.60593 6.86424 8.82765 6.86424 8.97546 6.74106L15.5777 0.532989C15.7501 0.360542 16.0211 0.385177 16.1936 0.557624C16.366 0.73007 16.3414 1.00106 16.1689 1.1735L9.56671 7.38157C9.09864 7.80037 8.35958 7.80037 7.91615 7.38157L1.28928 1.1735C1.19074 1.07496 1.14147 0.976421 1.14147 0.853245Z"
        />
        <path
         fill-rule="evenodd"
         clip-rule="evenodd"
         d="M2.15779 0.224181L8.72911 6.40318L15.2895 0.234428C15.6537 -0.123882 16.1855 -0.0372557 16.487 0.264241C16.8513 0.628554 16.7653 1.16395 16.4623 1.46689L16.4578 1.4714L9.84345 7.69088C9.22249 8.24647 8.23948 8.25697 7.63191 7.68383C7.6317 7.68363 7.63148 7.68342 7.63126 7.68322L1.00068 1.47167L0.995898 1.46689C0.840635 1.31163 0.726563 1.11308 0.726563 0.853248C0.726563 0.645922 0.818664 0.41684 0.971263 0.26424C1.30264 -0.0671376 1.8196 -0.0656988 2.15055 0.217968L2.15779 0.224181ZM7.91615 7.38157C8.35958 7.80037 9.09864 7.80037 9.56671 7.38157L16.1689 1.1735C16.3414 1.00106 16.366 0.73007 16.1936 0.557624C16.0211 0.385177 15.7501 0.360542 15.5777 0.532989L8.97546 6.74106C8.82765 6.86424 8.60593 6.86424 8.48276 6.74106L1.88053 0.532988C1.70808 0.385177 1.4371 0.385177 1.26465 0.557623C1.19074 0.631528 1.14147 0.754705 1.14147 0.853245C1.14147 0.976421 1.19074 1.07496 1.28928 1.1735L7.91615 7.38157Z"
        />
       </svg>
      </span> --}}
     </button>
     <div x-show="openDropDown" @click.outside="openDropDown = false" class="shadow-card absolute right-0 top-full z-40 w-[200px] space-y-1 rounded bg-white p-2">
        <a href="{{route('home') }}" class="hover:bg-gray-50 block w-full rounded py-2 px-3 text-left text-sm">
            Home
           </a>
      <a href="{{route('dashboard')}}" class=" hover:bg-gray-50 block w-full rounded py-2 px-3 text-left text-sm">
       Dashboard
      </a>
      


  
      <form action="{{route('logout') }}" method="post">
       @csrf
       <button class=" hover:bg-gray-50 block w-full rounded py-2 px-3 text-left text-sm">Logout</button>
      </form>
   
     </div>
    </div>

    @endauth
   </div>
  </div>
 </div>
</header>
<!-- ====== Navbar Section End -->
