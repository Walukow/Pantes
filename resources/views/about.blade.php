<x-app-layout>
    <div class="lg:pt-12 pt-24 bg-first-900 text-white min-h-[825px] flex items-center flex-col">
        <img class="lg:w-1/4 w-1/2 mt-12" src="{{ url('images/wahyu2.png') }}" alt="">
        <h2 class="text-pantes lg:text-5xl text-2xl font-semibold overline lg:p-2 tracking-tighter">
            Muhamad Wahyu Herlambang
        </h2>
        <p class="text-gray-500 ">
            Owner Of Pantes
        </p>
        <p class="py-2.5 lg:px-14 px-2.5 text-center lg:tracking-wide lg:leading-8">
            Welcome to <span class="text-pantes">Pantes</span>, where fashion meets <b>individuality</b>. As the owner, my vision has always been to create a brand that goes beyond clothing—offering a lifestyle that reflects <b>confidence</b>, <b>versatility</b>, and <b>style</b>. At <span class="text-pantes">Pantes</span>, we are committed to providing <b>high-quality</b>, affordable pieces that empower you to express your <b>unique</b> personality effortlessly.
        </p>
        <p x-show="!isSmallScreen" class="py-2.5 lg:px-52 px-2.5 text-center lg:tracking-wide lg:leading-8">
            Every detail, from our curated <b>collections</b> to our welcoming store environment, is <b>designed</b> with you in mind. We believe that fashion should be <b>accessible</b> to everyone without compromising on <b>quality</b> or <b>elegance</b>. Thank you for making <span class="text-pantes">Pantes</span> part of your journey.
        </p>
    </div>
    <div id="history" class="lg:py-24 py-14 bg-warm">
        <h2 class="text-first-500 text-center lg:text-5xl text-3xl font-semibold font-serif lg:pb-12 pb-6">History of <span class="text-pantes">Pantes</span></h2>
        <div class="lg:px-24 flex lg:gap-12 lg:flex-row flex-col items-center">
            <img class="lg:w-1/4 w-1/2 rounded-md" src="{{ url('images/toko2.png') }}" alt="">
            <div class="lg:p-6 lg:tracking-wider lg:leading-8 lg:text-start text-justify px-6 py-6 leading-tight">
                <p>
                    &emsp;The journey of <span class="text-pantes">Pantes</span> began with a simple yet powerful idea: to create a space where fashion meets <b>individuality</b>. Established in [Year], the store was designed to be more than just a retail space—it was envisioned as a community hub for people who value <b>quality</b>, <b>versatility</b>, and <b>affordable</b> style.  
                    The storefront, as seen today, reflects the brand’s core identity. The clean white facade with its bold yellow accent embodies <b>simplicity</b>, <b>elegance</b>, and <b>creativity</b>—values that have defined <span class="text-pantes">Pantes</span> since its inception. From the carefully curated clothing collections to the inviting store design, every detail was crafted to provide customers with an exceptional shopping experience.
                </p>
                <p x-show="!isSmallScreen">
                    &emsp;<span class="text-pantes">Pantes</span> started as a small idea in a home studio, fueled by the passion for creating <b>accessible</b> fashion without compromising <b>quality</b>. Over the years, it has grown into a beloved destination for those seeking <b>stylish</b>, <b>versatile</b> apparel that suits every occasion. Today, <span class="text-pantes">Pantes</span> continues to thrive, staying true to its mission of empowering individuals to express their <b>unique</b> style.
                </p>
            </div>
        </div>
        <div class="lg:px-28 pt-6 flex lg:flex-row flex-col-reverse items-center">
            <div class="p-6 lg:leading-8 lg:tracking-wide">
                <p>
                    &emsp;The <span class="text-pantes">Pantes</span> logo is a visual embodiment of the brand’s identity: bold, elegant, and <b>innovative</b>. Designed to symbolize both <b>simplicity</b> and <b>versatility</b>, the logo was created in [Year] as a representation of the brand’s mission to merge timeless fashion with modern sensibilities.
                </p>
                <p>
                    &emsp;The stylized "P" design reflects a clean and minimalist approach, emphasizing the brand's focus on <b>quality</b> and <b>sophistication</b>. The curves and sharp edges of the letter “P” symbolize flexibility and determination, qualities that define <span class="text-pantes">Pantes</span> as a brand. The golden-yellow color conveys a sense of <b>warmth</b>, <b>luxury</b>, and <b>accessibility</b>, aligning with the brand’s commitment to offering <b>premium</b> fashion at an <b>affordable</b> price.
                </p>
                <p>
                    &emsp;This logo has become more than just a symbol for <span class="text-pantes">Pantes</span>—it is a mark of trust and <b>excellence</b>, recognized by customers who value the brand’s dedication to <b>style</b> and <b>individuality</b>. As <span class="text-pantes">Pantes</span> continues to grow, the logo serves as a reminder of the brand’s roots and its vision for the future.
                </p>
            </div>
            <img class="lg:w-1/4 w-1/3" src="{{ url('images/logo.png') }}" alt="">
        </div>
    </div>
</x-app-layout>

