<nav x-data="{ open: false, isAtTop: true }" 
    x-init="window.addEventListener('scroll', () => { isAtTop = (window.scrollY === 0); })"
    class="fixed w-full top-0 z-40 transition duration-150"
    :class="isAtTop ? 'bg-first-900 text-pantes' : 'bg-white text-first-500'">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="shrink-0 flex items-center font-serif font-bold leading-tight tracking-tight text-2xl underline underline-offset-2">
                <a href="{{ route('home') }}">PANTES</a>
            </div>
            <div class="flex w-36">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                                x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" 
                                x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('collection')" :active="request()->routeIs('collection')" 
                                x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'">
                        {{ __('Collection') }}
                    </x-nav-link>
                </div>
            </div>
            <!-- Settings Dropdown -->
            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6 px-14">
                <a href="{{ route('cart') }}">
                    <svg x-bind:class="isAtTop ? 'text-pantes' : 'text-first-500'" class="w-6 h-6 hover:text-gray-500 hover:border-gray-500 transition ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>              
                </a>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button :class="isAtTop ? 'text-pantes' : 'text-first-500'" class="inline-flex items-center px-3 py-2 border font-semibold border-transparent text-base leading-4 rounded-md bg-transparent hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                        <x-dropdown-link :href="route('transaction')">{{ __('Transaction') }}</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" 
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
            </div>
            @else
            <div class="flex gap-2 items-center lg:m-0 mr-5">
                <a href="{{ route('login') }}">
                    <button x-bind:class="isAtTop ? 'border-pantes' : 'border-first-500'" 
                            class="inline-flex items-center px-4 py-2 bg-transparent border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:text-gray-500 hover:border-gray-500 focus:text-slate-500 disabled:opacity-25">
                        Login
                    </button>
                </a>
                <a href="{{ route('register') }}">
                    <button x-bind:class="isAtTop ? 'border-pantes' : 'border-first-500'" 
                            class="inline-flex items-center px-4 py-2 bg-transparent border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:text-gray-500 hover:border-gray-500 focus:text-slate-500 disabled:opacity-25">
                        Register
                    </button>
                </a>
            </div>
            @endauth
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                @auth
                <a href="{{ route('cart') }}">
                    <svg x-bind:class="isAtTop ? 'text-pantes' : 'text-first-500'" class="w-6 h-6 hover:text-gray-500 hover:border-gray-500 transition ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>              
                </a>
                @endauth
                <button @click="open = ! open" 
                    class="inline-flex items-center justify-center p-2 rounded-md hover:text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
        <!-- Responsive Navigation Menu -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-10"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-10"
            class="sm:hidden"
        >
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')"
                    x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'"
                    >{{ __('Home') }}</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')"
                    x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'"
                    >{{ __('About') }}</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('collection')" :active="request()->routeIs('collection')"
                    x-bind:class="isAtTop ? 'text-pantes border-pantes' : 'text-first-500 border-first-500'"
                    >{{ __('Collection') }}</x-responsive-nav-link>
            </div>

            @auth
            <div class="pt-4 pb-1 border-t transition transition-300" :class="isAtTop ? 'border-first-700' : 'border-gray-200'">
                <div class="px-4">
                    <div class="font-medium text-lg" :class="isAtTop ? 'text-white' : 'text-black'">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('transaction')">
                        {{ __('Transaction') }}
                    </x-responsive-nav-link>
                    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth

        </div>
</nav>
