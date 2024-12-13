<footer class="bg-first-900 text-white grid lg:grid-cols-4 lg:gap-0 gap-8 items-start justify-center p-12">
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <div class="shrink-0 lg:col-span-2 flex items-center lg:text-3xl text-xl lg:font-semibold font-serif justify-self-center w-96 flex-col">
        <a href="{{ route('home') }}" class="flex text-pantes items-center">
            <img src="{{ URL('images/logo.png') }}" class="w-12" alt="">
            PANTES
        </a>
        <p class="text-gray-600 lg:text-sm text-xs font-sans">
            &copy; 2024 Pantes. All rights reserved
        </p>
    </div>
    <div x-show="!isSmallScreen" class="grid lg:grid-cols-4 grid-cols-2 lg:col-start-3 lg:col-span-2 gap-8 text-start lg:text-base text-sm">
        <div>
            <p>Home</p>
            <ul class="pt-2 text-gray-600 space-y-1 lg:text-sm text-xs">
                <li>
                    <a href="{{ url('/home#top') }}" class="hover:text-pantes">
                        Intro
                    </a>
                </li>
                <li>
                    <a href="{{ url('/home#wip') }}" class="hover:text-pantes">
                        What is Pantes?
                    </a>
                </li>
                <li>
                    <a href="{{ url('/home#wp') }}" class="hover:text-pantes">
                        Why Pantes?
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <p>About</p>
            <ul class="pt-2 text-gray-600 space-y-1 lg:text-sm text-xs">
                <li>
                    <a href="{{ url('/about#top') }}" class="hover:text-pantes">
                        The Owner
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about#history') }}" class="hover:text-pantes">
                        History
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <p>Collection</p>
            <ul class="pt-2 text-gray-600 space-y-1 lg:text-sm text-xs">
                <li>
                    <a href="" class="hover:text-pantes">
                        Collaboration
                    </a>
                </li>
                <li>
                    <a href="" class="hover:text-pantes">
                        New Product
                    </a>
                </li>
                <li>
                    <a href="" class="hover:text-pantes">
                        Our Product
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <p>Social Media</p>
            <ul class="pt-2 text-gray-600 space-y-1 lg:text-sm text-xs">
                <li>
                    <a href="" class="hover:text-pantes">
                        Instagram
                    </a>
                </li>
                <li>
                    <a href="" class="hover:text-pantes">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="" class="hover:text-pantes">
                        Youtube
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div x-show="isSmallScreen">
        <div x-data="{show: false}" class="border-t border-white p-2.5">
            <div @click="show = !show" class="flex justify-between cursor-pointer">
                <p class="inline">Home</p>
                <svg x-show="!show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
                <svg x-show="show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                </svg>                            
            </div>
            <ul 
                x-show="show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="pt-2 text-gray-600 space-y-1 text-sm"
            >
                <li>
                    <a href="{{ url('/home#top') }}" class="focus:text-pantes">
                        Intro
                    </a>
                </li>
                <li>
                    <a href="{{ url('/home#wip') }}" class="focus:text-pantes">
                        What is Pantes?
                    </a>
                </li>
                <li>
                    <a href="{{ url('/home#wp') }}" class="focus:text-pantes">
                        Why Pantes?
                    </a>
                </li>
            </ul>
        </div>
        
        <div x-data="{show: false}" class="border-t border-white p-2.5">
            <div @click="show = !show" class="flex justify-between">
                <p class="inline">About</p>
                <svg x-show="!show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
                <svg x-show="show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                </svg>                            
            </div>
            <ul 
                x-show="show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="pt-2 text-gray-600 space-y-1 text-sm"
            >
                <li>
                    <a href="{{ url('/about#top') }}" class="focus:text-pantes">
                        The Owner
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about#history') }}" class="focus:text-pantes">
                        History
                    </a>
                </li>
            </ul>
        </div>
        <div x-data="{show: false}" class="border-y border-white p-2.5">
            <div @click="show = !show" class="flex justify-between">
                <p class="inline">Collection</p>
                <svg x-show="!show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
                <svg x-show="show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                </svg>                            
            </div>
            <ul 
                x-show="show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="pt-2 text-gray-600 space-y-1 text-sm"
            >
                <li>
                    <a href="" class="focus:text-pantes">
                        Collaboration
                    </a>
                </li>
                <li>
                    <a href="" class="focus:text-pantes">
                        New Product
                    </a>
                </li>
                <li>
                    <a href="" class="focus:text-pantes">
                        Our Product
                    </a>
                </li>
            </ul>
        </div>
        <div x-data="{show: false}" class="border-b border-white p-2.5">
            <div @click="show = !show" class="flex justify-between">
                <p class="inline">Social Media</p>
                <svg x-show="!show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
                <svg x-show="show" class="w-6 h-6 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                </svg>                            
            </div>
            <ul 
                x-show="show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="pt-2 text-gray-600 space-y-1 text-sm"
            >
                <li>
                    <a href="" class="focus:text-pantes">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="" class="focus:text-pantes">
                        Instagram
                    </a>
                </li>
                <li>
                    <a href="" class="focus:text-pantes">
                        Youtube
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
