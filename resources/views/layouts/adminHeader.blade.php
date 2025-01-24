<!-- ====== Navbar Section Start -->



<header x-data="{ open: false }" class="sticky top-0  left-0 w-full px-4 sm:px-6 lg:px-8 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-lg z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="text-white text-2xl font-semibold max-w-[100px] flex items-center space-x-2">
            <img src="{{ asset('images/MovieWatchLogo.png') }}"  alt="Moviewatchlogo" class="rounded-full hover:opacity-90 transition-opacity duration-300">
        </a>
<nav>
    <ul class="hidden lg:flex space-x-6">
        @auth('admin')
        <li>
            <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-secondary transition-colors duration-300">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('admin.movies.index') }}" class="text-white hover:text-secondary transition-colors duration-300">Movies</a>
        </li>

        <li>
            <a href="{{ route('admin.users') }}" class="text-white hover:text-secondary transition-colors duration-300">Users</a>
        </li>

        <li>
            <a href="{{ route('admin.categories.index')}}" class="text-white hover:text-secondary transition-colors duration-300">Categories</a>
        </li>
        @endauth
    </ul>
</nav>

<!-- Navigation and Logout -->
<div class="hidden lg:flex items-center space-x-6">
    @auth('admin')
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center px-4 py-2 text-white bg-secondary hover:bg-red-700 rounded-lg shadow-md transition duration-300">
                <i class="icon-Logout1 mr-2"></i><!-- Logout SVG -->
                Logout
            </button>
        </form>
    @else
        <a href="{{ route('admin.login') }}" class="text-white hover:text-secondary transition-colors duration-300">Login</a>
    @endauth
</div>

<!-- Mobile Menu Button -->
<button @click="open = !open" class="text-white text-3xl lg:hidden">


    <i class="text-white text-2xl " :class="open ? 'icon-Close' : 'icon-Hamburger'"></i>

</button>
</div>

<!-- Mobile Menu -->
<div x-show="open" x-transition class="lg:hidden bg-gray-800 text-white mt-4 rounded-lg shadow-lg">
    @auth('admin')
<ul class="flex flex-col space-y-2 p-4">
    <li>
        <a href="{{ route('admin.dashboard') }}" class="block text-lg hover:text-red-500 transition-colors duration-300">Dashboard</a>
    </li>
    <li>
        <a href="{{ route('admin.movies.index') }}" class="block text-lg hover:text-red-500 transition-colors duration-300">Movies</a>
    </li>

    <li>
        <a href="{{ route('admin.users') }}" class="block text-lg hover:text-red-500 transition-colors duration-300">Users</a>
    </li>
    <li>
        <button  class="flex items-center text-red-600 hover:text-red-700 transition-colors duration-300">
            <i class="icon-Logout1 mr-2"></i> <!-- Logout SVG -->
            Logout
        </button>
    </li>
    @endauth
</ul>
</div>

</header>
