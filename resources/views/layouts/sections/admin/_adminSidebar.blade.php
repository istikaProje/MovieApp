{{-- sidebar --}}

<aside>
    <section class=" md:w-64 h-screen">
       <div class="h-full px-3 bg-gradient-to-b from-gray-800 to-gray-900 text-white">
          <ul class="space-y-4 font-medium">
             <!-- Dashboard -->
             <li class="group relative ">
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                   <i class="icon-Ratio text-gray-400 transition duration-200 group-hover:text-white text-[24px]"></i> <!-- Ratio SVG -->
                   <span class="ml-4  hidden md:block">Kontrol Paneli</span>
                </a>

                <!-- Tooltip -->

                <div class="md:hidden">

                   <span
                      class="invisible z-10 absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                      Kontrol Paneli
                      <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                         <i class="icon-LeftArrow text-white"> </i> <!-- left play SVG -->
                      </span>
                   </span>

                </div>

             </li>
             <!-- Movies -->

             <li class="group relative">
                <a href="{{ route('admin.movies.index') }}"
                   class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                   <i class="icon-Squares text-gray-400 transition duration-200 group-hover:text-white text-[24px]"></i> <!-- 4 Squares SVG -->
                   <span class="ml-4 hidden md:block">Filmler</span>
                </a>

                <!-- Tooltip -->

                <div class="md:hidden">

                   <span
                      class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                      Filmler
                      <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                         <i class="icon-LeftArrow text-white"> </i> <!-- left play SVG -->
                      </span>
                   </span>

                </div>

             </li>

         <!-- Users -->

             <li class="group relative">
               <a href="{{ route('admin.users') }}"
                  class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <i class="icon-Users text-gray-400 transition duration-200 group-hover:text-white" style="font-size: 24px;"></i> <!-- Users SVG -->
                  <span class="ml-4 hidden md:block">Kullanıcılar</span>
               </a>

               <!-- Tooltip -->

               <div class="md:hidden">

                  <span
                     class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                     Kullanıcılar
                     <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                         <i class="icon-LeftArrow text-white"> </i> <!-- left play SVG -->
                     </span>
                  </span>

               </div>

            </li>


         <!-- Logout -->

             <li class="group relative">
                <a href="#"
                   class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <i class="icon-Logout2 text-gray-400 transition duration-200 group-hover:text-white text-[24px]"> </i><!-- Logout 2 SVG -->
                   <span class="ml-4 hidden md:block">Çıkış Yap</span>
                </a>

                <!-- Tooltip -->

                <div class="md:hidden">

                   <span
                      class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                      Çıkış Yap
                      <span class="absolute top-1/2 -left-2 -translate-y-1/2">

                         <i class="icon-LeftArrow text-white"> </i> <!-- left play SVG -->
                      </span>
                   </span>

                </div>

             </li>
          </ul>
       </div>
    </section>

 </aside>
