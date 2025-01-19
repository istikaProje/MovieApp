{{-- sidebar --}}

<aside>
   <section class=" md:w-64 h-screen">
      <div class="h-full px-3 bg-gradient-to-b from-gray-800 to-gray-900 text-white">
         <ul class="space-y-4 font-medium">
            <!-- Dashboard -->
            <li class="group relative ">
               <a href="{{ route('admin.dashboard') }}"
                  class="flex items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <i class="icon-Ratio text-gray-400 transition duration-200 group-hover:text-white" style="font-size: 24px;"></i> <!-- Ratio SVG -->
                  <span class="ml-4  hidden md:block">Dashboard</span>
               </a>

               <!-- Tooltip -->

               <div class="md:hidden">

                  <span
                     class="invisible z-10 absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                     Dashboard
                     <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M1.23134 6.8294C0.642883 6.43303 0.642882 5.56697 1.23133 5.1706L7.44134 0.987699C8.10557 0.540292 9 1.01624 9 1.81709L9 10.1829C9 10.9838 8.10557 11.4597 7.44134 11.0123L1.23134 6.8294Z"
                              fill="white" />
                        </svg> <!-- left play SVG -->
                     </span>
                  </span>

               </div>

            </li>
            <!-- Movies -->

            <li class="group relative">
               <a href="{{ route('admin.movies.index') }}"
                  class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <i class="icon-Squares text-gray-400 transition duration-200 group-hover:text-white" style="font-size: 24px;"></i> <!-- 4 Squares SVG -->
                  <span class="ml-4 hidden md:block">Movies</span>
               </a>

               <!-- Tooltip -->

               <div class="md:hidden">

                  <span
                     class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                     Movies
                     <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M1.23134 6.8294C0.642883 6.43303 0.642882 5.56697 1.23133 5.1706L7.44134 0.987699C8.10557 0.540292 9 1.01624 9 1.81709L9 10.1829C9 10.9838 8.10557 11.4597 7.44134 11.0123L1.23134 6.8294Z"
                              fill="white" />
                        </svg> <!-- left play SVG -->
                     </span>
                  </span>

               </div>

            </li>

        <!-- Users -->

            <li class="group relative">
              <a href="{{ route('admin.users') }}"
                 class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                 <i class="icon-Users text-gray-400 transition duration-200 group-hover:text-white" style="font-size: 24px;"></i> <!-- Users SVG -->
                 <span class="ml-4 hidden md:block">Users</span>
              </a>

              <!-- Tooltip -->

              <div class="md:hidden">

                 <span
                    class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                    Users
                    <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                       <svg width="9" height="12" viewBox="0 0 9 12" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                             d="M1.23134 6.8294C0.642883 6.43303 0.642882 5.56697 1.23133 5.1706L7.44134 0.987699C8.10557 0.540292 9 1.01624 9 1.81709L9 10.1829C9 10.9838 8.10557 11.4597 7.44134 11.0123L1.23134 6.8294Z"
                             fill="white" />
                       </svg> <!-- left play SVG -->
                    </span>
                 </span>

              </div>

           </li>


        <!-- Logout -->

            <li class="group relative">
               <a href="#"
                  class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <svg class="w-6 h-6 text-gray-400 transition duration-200 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                 </svg> <!-- Logout 2 SVG -->
                  <span class="ml-4 hidden md:block">Logout</span>
               </a>

               <!-- Tooltip -->

               <div class="md:hidden">

                  <span
                     class="invisible z-10  absolute top-1/2 left-[115%] -translate-y-1/2 whitespace-nowrap rounded bg-white py-1 px-[10px] text-sm font-medium text-gray-800 shadow-lg group-hover:visible">
                     Logout
                     <span class="absolute top-1/2 -left-2 -translate-y-1/2">
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M1.23134 6.8294C0.642883 6.43303 0.642882 5.56697 1.23133 5.1706L7.44134 0.987699C8.10557 0.540292 9 1.01624 9 1.81709L9 10.1829C9 10.9838 8.10557 11.4597 7.44134 11.0123L1.23134 6.8294Z"
                              fill="white" />
                        </svg> <!-- left play SVG -->
                     </span>
                  </span>

               </div>

            </li>
         </ul>
      </div>
   </section>

</aside>
