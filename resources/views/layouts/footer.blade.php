    <!-- ====== Footer Section Start -->
    <footer class="bg-primary relative z-5 overflow-hidden mt-16 pt-10">
       <div class="container mx-auto">
          <div class=" flex flex-wrap">
             <div class="w-full px-4 sm:w-2/3 lg:w-4/12 xl:w-3/12">
                <div class="mb-10 w-full">
                   <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                      <img src="{{ asset('images/MovieWatchLogo.png') }}" alt="logo" class="max-w-full" />
                   </a>
                   <p class="mb-7 text-base text-white">
                      We create digital experiences for brands and companies by using
                      technology.
                   </p>
                   <div class="flex items-center">
                      <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:opacity-30">
                         <i class="icon-Facebook text-[18px] leading-none w-[10px] h-[18px] z-[1] text-current"></i>
                         <!-- Facebook SVG -->
                      </a>
                      <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:opacity-30">
                         <i class="icon-Twitter text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                         <!-- Twitter SVG -->
                      </a>
                      <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:opacity-30">
                         <i class="icon-Instagram text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                         <!-- Instagram SVG -->
                      </a>
                      <a href="javascript:void(0)" class="px-3 text-[#dddddd] hover:opacity-30">
                         <i class="icon-LinkedIn text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                         <!-- LinkedIn SVG -->
                      </a>
                   </div>
                </div>
             </div>
             <div class="w-full px-4 sm:w-1/2 lg:w-3/12 xl:w-2/12">
                <div class="mb-10 w-full">
                   <h4 class="mb-9 text-lg font-semibold text-white">Kısayollar</h4>
                   <ul>
                      <li>
                         <a href="{{ route('home') }}"
                            class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                            Home
                         </a>
                      </li>
                      <li>
                         <a href="{{ route('movies.index') }}"
                            class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                            Movies
                         </a>
                      </li>
                      <li>
                         <a href="{{ route('about_us') }}"
                            class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                            About Us
                         </a>
                      </li>
                   </ul>
                </div>
             </div>

          </div>
       </div>

       <div class="mt-12 border-t border-white border-opacity-40  py-8 lg:mt-[60px]">
          <div class="container mx-auto">
             <div class=" flex flex-wrap">
                <div class="w-full justify-center flex ">
                  
                      <p class="text-base text-white">&copy; 2025 Movie Watch</p>
                  
                </div>
             </div>
          </div>


          <div>
             <span class="absolute left-0 top-0 z-[0] pointer-events-none">
                <svg width="419" height="492" viewBox="0 0 419 492" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                   <ellipse cx="55.0003" cy="350" rx="364" ry="364"
                      transform="rotate(-45 55.0003 350)" fill="url(#paint0_linear)" />
                   <defs>
                      <linearGradient id="paint0_linear" x1="55.0003" y1="-14" x2="55.0003" y2="714"
                         gradientUnits="userSpaceOnUse">
                         <stop stop-color="#ff5757" stop-opacity="0.4" />
                         <stop offset="1" stop-opacity="0" />
                      </linearGradient>
                   </defs>
                </svg>
             </span>

             <span class="absolute bottom-0 right-0 z-[0] pointer-events-none">
               <div class="w-[327px] h-[220px] bg-gradient-to-b from-secondary/30 to-transparent rounded-full rotate-[-75deg]"></div>

             </span>

             <span class="absolute top-0 right-0 z-[1]">
                <i class="icon-Dot text-[102px] text-gray-500 leading-none"></i>
             </span>
          </div>
    </footer>
    <!-- ====== Footer Section End -->
