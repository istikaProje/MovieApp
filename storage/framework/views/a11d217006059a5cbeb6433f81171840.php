<!-- ====== Navbar Section Start -->



<header x-data="{ open: false }" class="sticky top-0  left-0 w-full px-4 sm:px-6 lg:px-8 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-lg z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-white text-2xl font-semibold max-w-[100px] flex items-center space-x-2">
            <img src="<?php echo e(asset('images/MovieWatchLogo.png')); ?>"  alt="Moviewatchlogo" class="rounded-full hover:opacity-90 transition-opacity duration-300">
        </a>
<nav>
    <ul class="hidden lg:flex space-x-6">
        <?php if(auth()->guard('admin')->check()): ?>
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-white hover:text-secondary transition-colors duration-300">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.movies.index')); ?>" class="text-white hover:text-secondary transition-colors duration-300">Movies</a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.users')); ?>" class="text-white hover:text-secondary transition-colors duration-300">Users</a>
        </li>

        <li>
            <a href="<?php echo e(route('admin.categories.index')); ?>" class="text-white hover:text-secondary transition-colors duration-300">Categories</a>
        </li>
        <?php endif; ?>
    </ul>
</nav>

<!-- Navigation and Logout -->
<div class="hidden lg:flex items-center space-x-6">
    <?php if(auth()->guard('admin')->check()): ?>
        <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="flex items-center px-4 py-2 text-white bg-secondary hover:bg-red-700 rounded-lg shadow-md transition duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg> <!-- Logout SVG -->
                Logout
            </button>
        </form>
    <?php else: ?>
        <a href="<?php echo e(route('admin.login')); ?>" class="text-white hover:text-secondary transition-colors duration-300">Login</a>
    <?php endif; ?>
</div>

<!-- Mobile Menu Button -->
<button @click="open = !open" class="text-white text-3xl lg:hidden">

    <i class="fa-solid " :class="open ? 'fa-x' : 'fa-bars'"></i>

</button>
</div>

<!-- Mobile Menu -->
<div x-show="open" x-transition class="lg:hidden bg-gray-800 text-white mt-4 rounded-lg shadow-lg">
    <?php if(auth()->guard('admin')->check()): ?>
<ul class="flex flex-col space-y-2 p-4">
    <li>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="block text-lg hover:text-red-500 transition-colors duration-300">Dashboard</a>
    </li>
    <li>
        <a href="<?php echo e(route('admin.movies.index')); ?>" class="block text-lg hover:text-red-500 transition-colors duration-300">Movies</a>
    </li>

    <li>
        <a href="<?php echo e(route('admin.users')); ?>" class="block text-lg hover:text-red-500 transition-colors duration-300">Users</a>
    </li>
    <li>
        <button  class="flex items-center text-red-600 hover:text-red-700 transition-colors duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg> <!-- Logout SVG -->
            Logout
        </button>
    </li>
    <?php endif; ?>
</ul>
</div>

</header>
<?php /**PATH C:\wamp64\www\MovieApp\resources\views/layouts/adminHeader.blade.php ENDPATH**/ ?>