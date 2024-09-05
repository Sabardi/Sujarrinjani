<nav x-data="{ open: false }"
    class="fixed z-10 w-full px-6 py-3 transition-all duration-300 ease-in-out bg-white lg:px-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{ 'backdrop-blur-lg bg-blurred text-black': window.scrollY > 10 }">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto lg:w-4/5 sm:px-6 lg:px-0">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center shrink-0">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
                </a>
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:my-px md:text-xs sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('trek&tour')" :active="request()->routeIs('tes')">
                        {{ __('Trek & Tours') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Merch') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Book & Pay') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->

            <!-- Hamburger -->
            <div class="flex items-center md:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        {{-- <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div> --}}
    </div>
</nav>

<script>
    document.addEventListener('scroll', function() {
      const navbar = document.querySelector('nav');
      if (window.scrollY > 10) { // Adjust the scroll position as needed
        navbar.classList.add('backdrop-blur-lg');
        navbar.classList.add('bg-blurred');
      } else {
        navbar.classList.remove('backdrop-blur-lg');
        navbar.classList.remove('bg-blurred');
      }
    });
</script>