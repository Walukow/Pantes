<x-app-layout>
    {{-- <div x-show="!isSmallScreen" class="lg:w-96 lg:h-96 w-48 h-48 bg-pantes absolute lg:top-[115px] lg:left-[140px] top-[177px] left-[109px] rounded-lg"></div> --}}
    <div class="lg:py-24 pt-24 bg-first-900 text-white min-h-[550px] flex lg:pl-40 lg:pb-12 lg:flex-row flex-col">
        <p x-show="isSmallScreen" class="text-2xl lg:text-start text-center font-semibold block px-20">
            Introducing Our <span class="text-pantes">Newest Collection!</span>
        </p>
        <img class="lg:w-96 lg:h-96 w-48 h-48 lg:mr-12 rounded-lg relative mx-auto " src="{{ url('images/products/baju1.png') }}" alt="">
        <div class="lg:space-y-6 lg:pt-8 space-y-2">
            <p x-show="!isSmallScreen" class="text-4xl lg:text-start text-center font-semibold block">
                Introducing Our <span class="text-pantes">Newest Collection!</span>
            </p>
            <ul x-show="isSmallScreen" class="text-start block text-base pl-20">
                <li>
                    <svg class="w-7 h-7 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    High-quality
                </li>
                <li>
                    <svg class="w-7 h-7 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    Dual front pockets
                </li>
                <li>
                    <svg class="w-7 h-7 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    Comfort for any occasion.
                </li>
            </ul>
            <ul x-show="!isSmallScreen" class="text-start block lg:space-y-2 lg:text-lg">
                <li>
                    <svg class="w-8 h-8 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    <b>High-quality</b> embroidered <span class="text-pantes">yin-yang</span> and flame details for an <b>eye-catching</b> look.
                </li>
                <li>
                    <svg class="w-8 h-8 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    Dual front pockets for both <b>style</b> and <b>functionality</b>.
                </li>
                <li>
                    <svg class="w-8 h-8 inline text-pantes" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    Designed with <b>comfort</b> in mind, offering a <b>perfect fit</b> for any occasion.
                </li>
            </ul>
            <p class="lg:text-start text-center block leading-6 lg:text-xl text-base lg:pb-0 pb-20 px-2.5">
                Step into <b>bold style</b> and <b>modern versatility</b> with our latest release: <span class="text-pantes">The Yin-Yang Embroidered Jacket</span>. Featuring a <b>unique blend</b> of <b>timeless design</b> and <b>contemporary flair</b>, this jacket is crafted for those who dare to stand out.
            </p>
            <a x-show="!isSmallScreen" href="{{ route('collection') }}" class="inline-flex items-center px-6 py-3 my-5 bg-pantes lg:text-base rounded-full font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 hover:text-pantes border-pantes border-[3px] hover:bg-white">
                Buy Now!
                <svg class="w-9 h-9" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>              
            </a>
        </div>
    </div>
    {{-- <div class="lg:py-12 py-14 bg-warm">
        <h2 class="text-first-500 text-center lg:text-5xl text-3xl font-semibold font-serif lg:pb-12 pb-6">Collection</h2>
        <h3 class="text-first-500 ml-8 lg:text-3xl text-xl font-semibold pt-4">test</h3>
        <div class="flex overflow-auto gap-4 overflow-y-hidden p-4 mb-20">
            <div
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="hover:cursor-pointer flex flex-col rounded-lg shadow p-2.5 lg:min-w-[15%] lg:max-w-[15%] min-w-[45%] max-w-[45%] bg-white">
                <img class="w-full rounded-lg border" src="{{ url('images/products/baju2.jpg') }}" alt="">
                <p class="lg:text-xl text-lg font-semibold">
                    The Cloth
                </p>
                <p class="lg:text-base text-sm text-gray-500">
                    Stock : 12
                </p>
                <p class="lg:text-lg">
                    Rp124.999,00
                </p>
            </div>
        </div>
    </div> --}}

    @auth        
    <div>
        <div class="lg:py-12 py-14 bg-warm">
            @foreach ($categories as $category)
            <h3 class="text-first-500 ml-8 lg:text-3xl text-xl font-semibold pt-4">{{ $category->name }}</h3>
            <div class="flex overflow-auto gap-4 overflow-y-hidden p-4 mb-20">
            @foreach ($category->products as $product)
                <div
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', '{{ $product->id }}')"
                class="hover:cursor-pointer flex flex-col rounded-lg shadow p-2.5 lg:min-w-[15%] lg:max-w-[15%] min-w-[45%] max-w-[45%] bg-white">
                    <img class="w-full rounded-lg border" src="{{ url('images/products/' . $product->pict) }}" alt="">
                    <p class="lg:text-xl text-lg font-semibold">
                        {{ $product->name }}
                    </p>
                    <p class="lg:text-base text-sm text-gray-500">
                        Stock: {{ $product->stock }}
                    </p>
                    <p class="lg:text-lg">
                        Rp{{ $product->price }}
                    </p>
                </div>
                <x-modal name="{{ $product->id }}" :show="$errors->userDeletion->isNotEmpty()">
                    <form method="post" action="{{ route('storeCart') }}" class="p-6">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                        @csrf
                        <img class="w-full rounded-lg border" src="{{ url('images/products/' . $product->pict) }}" alt="">
                        <p class="lg:text-xl text-lg font-semibold">
                            {{ $product->name }}
                        </p>
                        <p class="lg:text-base text-sm text-gray-500">
                            Stock: {{ $product->stock }}
                        </p>
                        <p class="lg:text-lg">
                            Rp{{ $product->price }}
                        </p>
                        <div x-data="{ show: true }" class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                            @if ($product->stock > 0)
                                <x-primary-button class="ms-3" x-show="show" @click="show = !show">
                                    {{ __('Add Cart') }}
                                </x-primary-button>
                                <x-primary-button class="ms-3" x-show="!show">
                                    <svg class="animate-spin inline h-5 w-5 mr-1 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                    </svg>
                                </x-primary-button>
                            @else
                                <x-primary-button class="ms-3" disabled>
                                    {{ __('Out of Stock') }}
                                </x-primary-button>
                            @endif
                        </div>
                    </form>
                </x-modal>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    @else     
    <div>
        <div class="lg:py-12 py-14 bg-warm">
            @foreach ($categories as $category)
            <h3 class="text-first-500 ml-8 lg:text-3xl text-xl font-semibold pt-4">{{ $category->name }}</h3>
            <div class="flex overflow-auto gap-4 overflow-y-hidden p-4 mb-20">
            @foreach ($category->products as $product)
                <div
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', '{{ $product->id }}')"
                class="hover:cursor-pointer flex flex-col rounded-lg shadow p-2.5 lg:min-w-[15%] lg:max-w-[15%] min-w-[45%] max-w-[45%] bg-white">
                    <img class="w-full rounded-lg border" src="{{ url('images/products/' . $product->pict) }}" alt="">
                    <p class="lg:text-xl text-lg font-semibold">
                        {{ $product->name }}
                    </p>
                    <p class="lg:text-base text-sm text-gray-500">
                        Stock: {{ $product->stock }}
                    </p>
                    <p class="lg:text-lg">
                        Rp{{ $product->price }}
                    </p>
                </div>
                <x-modal name="{{ $product->id }}" :show="$errors->userDeletion->isNotEmpty()">
                    <div class="p-6">
                        <img class="w-full rounded-lg border" src="{{ url('images/products/' . $product->pict) }}" alt="">
                        <p class="lg:text-xl text-lg font-semibold">
                            {{ $product->name }}
                        </p>
                        <p class="lg:text-base text-sm text-gray-500">
                            Stock: {{ $product->stock }}
                        </p>
                        <p class="lg:text-lg">
                            Rp{{ $product->price }}
                        </p>
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                            <a href="{{ route('login') }}">
                                <x-primary-button class="ms-3">
                                    {{ __('Add Cart') }}
                                </x-primary-button>
                            </a>
                        </div>
                    </div>
                </x-modal>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    @endauth

    

</x-app-layout>
