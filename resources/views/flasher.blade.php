<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <div x-data="{ show: true }" x-show="show" class="fixed z-50 animate-atas-bawah top-[20px] right-[5px] lg:animate-kanan-kiri lg:top-[20px] lg:right-[40px]">
        <div class="flex items-center center bg-gray-300 shadow p-[10px] lg:px-[12px] rounded-lg text-first-500">
            <svg class="w-4 h-4 lg:mb-0.5 lg:w-6 lg:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <p class=" ml-1 lg:ml-1 lg:mb-1 text-xs lg:text-base">
                {{ session('info') }}
            </p>
            <svg @click="show = false" class="w-6 h-6 lg:w-6 lg:h-8 ml-2 hover:cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
            </svg>
        </div>
    </div>
</div>
