<x-app-layout>
    <div class="pt-12 bg-first-900 text-white lg:grid lg:grid-cols-3 min-h-[825px]">
        <div class="relative lg:top-32 lg:left-28 top-20 lg:m-0 m-5">
            <h1 class="lg:text-8xl text-7xl font-serif text-pantes">PANTES</h1>
            <div class="flex gap-1 items-center my-2.5">
                <h2 class="lg:text-8xl text-6xl block row-span-2 self-start lg:mt-0 mt-1">All</h2>
                <div class="flex flex-col">
                    <h2 class="lg:text-5xl text-2xl block">Styles,</h2>
                    <h2 class="lg:text-5xl text-2xl block">Yours</h2>
                </div>
            </div>
            
            <ul class="lg:text-2xl text-xl space-y-2 my-5">
                <li>
                    <svg class="w-8 h-8 inline text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917L9.724 16.5L19 7.5" />
                    </svg>                                  
                    Stylist
                </li>
                <li>
                    <svg class="w-8 h-8 inline text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>                  
                    High Quality
                </li>
                <li>
                    <svg class="w-8 h-8 inline text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>                  
                    Affordable
                </li>
                <li>
                    <svg class="w-8 h-8 inline text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>                  
                    Versatile
                </li>
            </ul>
            <a href="{{ route('collection') }}" class="inline-flex items-center px-6 py-3 mt-5 bg-pantes lg:text-base rounded-full font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 hover:text-pantes border-pantes border-[3px] hover:bg-white">
                Get Our Collection
                <svg class="w-9 h-9" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>              
            </a>
        </div>
        <img :src="isSmallScreen ? '{{ URL('images/hd-bg-mb.png') }}' : '{{ URL('images/hd-bg.png') }}'" class="lg:w-full lg:col-span-2 2xl:-mt-20 sm:-mt-[500px] md:-mt-p[400px] lg:-mt-0 -mt-[210px]" alt="">
    </div>


    <div class="py-24" id="wip">
        <h2 class="text-center lg:text-6xl text-4xl text-first-500 font-semibold pb-12 font-serif">What is <span class="text-pantes">Pantes</span>?</h2>
        <div class="grid grid-cols-1 lg:grid-cols-5 lg:grid-rows-2 mx-6 gap-2.5">
            <p class="lg:col-start-2 lg:col-span-2 lg:row-start-1 row-start-2">
                <b class="text-pantes">Pantes</b> is more than just a clothing brand–it’s a lifestyle. We curate <b>stylish</b>, <b>high-quality</b> apparel that lets you express your individuality with ease. Our focus is on delivering <b>versatile</b> and <b>affordable</b> pieces that don’t compromise on quality or elegance. From casual comfort to trendy looks, <b class="text-pantes">Pantes</b> has something for every occasion.
            </p>
            <p class="lg:col-start-2 lg:row-start-2 lg:col-span-2 row-start-3">
                Where <b>innovation</b> meets style, <b class="text-pantes">Pantes</b> is your go-to destination for fashion that <b>fits</b> seamlessly into your life. With attention to detail and a commitment to accessibility, we make it easy for you to embrace your <b>unique</b> style and elevate your wardrobe effortlessly.
            </p>
            <a href="{{ route('collection') }}" class="lg:col-start-2 lg:row-start-3 row-star-4 lg:justify-self-end justify-self-center w-fit col-span-2 inline-flex items-center px-6 py-3 mt-5 bg-first-500 lg:text-base rounded-full font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 hover:text-first-500 border-first-500 border-[3px] hover:bg-white">
                Meet The Owner
                <svg class="w-9 h-9" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>              
            </a>
            <img class="lg:col-start-4 lg:row-span-2 row-start-1 lg:w-full w-1/3 justify-self-center" src="{{ URL('images/logo.png') }}" alt="">
        </div>
    </div>

    <div id="wp" class="py-24 bg-warm">
        <h2 class="text-center lg:text-6xl text-4xl text-first-500 font-semibold pb-12 font-serif">Why <span class="text-pantes">Pantes</span>?</h2>
        <div class="lg:flex lg:flex-wrap lg:justify-around lg:gap-12 lg:mx-12 grid grid-cols-2 gap-2.5 mx-2.5">
            <div class="flex items-center flex-col lg:w-1/4 col-start-2 row-start-1">
                <img class="lg:w-60 rounded-lg" src="{{ URL('images/subjek.jpeg') }}" alt="">
                <h4 class="text-center lg:text-xl text-lg font-semibold text-first-500">High Quality</h4>
                <p class="text-center lg:text-base text-xs">
                    We prioritize <b>quality</b>, ensuring that each piece is made to last while maintaining a sophisticated and refined <b>aesthetic</b>.
                </p>
            </div>
            <div class="flex items-center flex-col lg:w-1/4 col-start-2 row-start-4">
                <img class="lg:w-60 rounded-lg" src="{{ URL('images/subjek4.jpeg') }}" alt="">
                <h4 class="text-center lg:text-xl text-lg font-semibold text-first-500">Stylish Designs</h4>
                <p class="text-center lg:text-base text-xs">
                    <b class="text-pantes">Pantes</b> offers a curated collection of trendy and fashionable apparel that reflects your <b>unique</b> style, suitable for any occasion.
                </p>
            </div>
            <div class="flex items-center flex-col lg:w-1/4 col-start-1 row-start-4">
                <img class="lg:w-60 rounded-lg" src="{{ URL('images/subjek2.jpg') }}" alt="">
                <h4 class="text-center lg:text-xl text-lg font-semibold text-first-500">Versatile Wardrobe</h4>
                <p class="text-center lg:text-base text-xs">
                    Our pieces are designed to be <b>versatile</b>, effortlessly transitioning from casual to trendy, giving you <b>endless outfit</b> possibilities.
                </p>
            </div>
            <div class="flex items-center flex-col lg:w-1/4 col-start-1 row-start-1 row-span-2">
                <img class="lg:w-60 rounded-lg" src="{{ URL('images/subjek3.jpeg') }}" alt="">
                <h4 class="text-center lg:text-xl text-lg font-semibold text-first-500">Affordable Fashion</h4>
                <p class="text-center lg:text-base text-xs">
                    <b class="text-pantes">Pantes</b> makes it easy to access high-end fashion without compromising your budget, making style <b>accessible</b> to everyone.
                </p>
            </div>
            <div class="flex items-center flex-col lg:w-1/4 col-start-2 row-start-2 row-span-2">
                <img class="lg:w-60 rounded-lg" src="{{ URL('images/subjek5.jpeg') }}" alt="">
                <h4 class="text-center lg:text-xl text-lg font-semibold text-first-500">Expert Craftsmanship</h4>
                <p class="text-center lg:text-base text-xs">
                    <b class="text-pantes">Pantes</b> ensures every piece is crafted with <b>precision</b> and attention to <b>detail</b>, delivering stylish, durable, and <b>high-quality</b> clothing.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
