<!-- ====== Navbar Section Start -->
<header x-data="{
   navbarOpen: false
}" class=" sticky top-0 z-50 flex w-full items-center bg-primary header-shadow">
   <div class="container mx-auto">
      <div class="relative flex items-center justify-between">
         <div class="px-4">
            <a href="<?php echo e(route('home')); ?>" class="block max-w-[160px] w-full py-3">
               <img src="<?php echo e(asset('images/MovieWatchLogo.png')); ?>" alt="logo" class="w-full" />
            </a>
         </div>
         <div class="flex w-full items-center justify-between px-4">





           </ul>
           </nav>
        </div>

               <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                  class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:shadow-none">
                  <ul class="block lg:flex">
                     <li>
                        <a href="<?php echo e(route('home')); ?>"
                           class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                           Home
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo e(route('movies.index')); ?>"
                           class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                           Movies
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo e(route('about_us')); ?>"
                           class="flex py-2 text-base font-medium text-dark hover:opacity-30 lg:ml-12 lg:inline-flex lg:text-white">
                           About Us
                        </a>
                     </li>






            </ul>
            </nav>
         </div>

         <?php if(auth()->guard()->guest()): ?>
            <div class="justify-end pr-16 sm:flex lg:pr-0">
               <a href="<?php echo e(route('login')); ?>" class="py-3 px-7 text-base font-medium text-white hover:opacity-30">
                  Login
               </a>

               <a href="<?php echo e(route('register')); ?>"
                  class="rounded-lg bg-white py-3 px-7 text-base font-medium text-dark hover:opacity-90">
                  Sign Up
               </a>
            </div>

         <?php endif; ?>

         <?php if(auth()->guard()->check()): ?>


            <div x-data="{ openDropDown: false }" class=" block mr-5">
               <button @click="openDropDown = !openDropDown" class="flex items-center text-left">
                  <div class="relative mr-4 h-[62px] w-[62px] rounded-full">
                     <img class="h-full w-full rounded-full object-cover object-center" src="https://picsum.photos/200"
                        alt="" />
                  </div>

               </button>
               <div x-show="openDropDown" @click.outside="openDropDown = false"
                  class="shadow-card absolute right-0 top-full z-40 w-[200px] space-y-1 rounded bg-third text-white p-2">

                  <?php if(Auth::user()->role === 'admin'): ?>

                        <a class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm" href="<?php echo e(route('admin.dashboard')); ?>">Admin Dashboard</a>

               <?php endif; ?>

                  <a href="<?php echo e(route('dashboard')); ?>"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Dashboard
                  </a>
                  <a href="<?php echo e(route('home')); ?>"
                     class="hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Home
                  </a>
                  <a href="<?php echo e(route('movies.index')); ?>"
                     class=" hover:bg-white hover:text-third block w-full rounded py-2 px-3 text-left text-sm">
                     Movies
                  </a>








                 <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="hover:bg-third hover:text-white block w-full rounded py-2 px-3 text-left text-sm ">Logout</button>
                 </form>

              </div>
           </div>

        <?php endif; ?>
     </div>
  </div>
  </div>
</header>
<!-- ====== Navbar Section End -->
<?php /**PATH C:\wamp64\www\MovieApp\resources\views/layouts/header.blade.php ENDPATH**/ ?>