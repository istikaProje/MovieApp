

<aside>
   <section class=" md:w-64 h-screen">
      <div class="h-full px-3 bg-gradient-to-b from-gray-800 to-gray-900 text-white">
         <ul class="space-y-4 font-medium">
            <!-- Dashboard -->
            <li class="group relative ">
               <a href="<?php echo e(route('admin.dashboard')); ?>"
                  class="flex items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <svg class="w-6 h-6 text-gray-400 transition duration-200 group-hover:text-white"
                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                     <path
                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                     <path
                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                  </svg> <!-- Ratio SVG -->
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
               <a href="<?php echo e(route('admin.movies.index')); ?>"
                  class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                  <svg class="w-6 h-6 text-gray-400 transition duration-200 group-hover:text-white"
                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                     <path
                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Z" />
                     <path
                        d="M6.143 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                  </svg> <!-- 4 Squares SVG -->
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
              <a href="<?php echo e(route('admin.users')); ?>"
                 class="flex  items-center p-3 rounded-lg hover:bg-gray-700 group transition-all duration-200">
                 <svg class="w-6 h-6 text-gray-400 transition duration-200 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"></path>
               </svg> <!-- Users SVG -->
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
<?php /**PATH C:\wamp64\www\MovieApp\resources\views/layouts/sections/admin/_adminSidebar.blade.php ENDPATH**/ ?>