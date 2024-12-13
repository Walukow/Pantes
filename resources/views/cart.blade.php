<x-none>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>
    <div class="lg:grid lg:grid-cols-2 flex flex-col-reverse lg:gap-12 lg:mx-12 mx-2.5 mb-12">
        @if ($carts->isNotEmpty())
            <div class="bg-white rounded-lg shadow col-span-2 mt-10 lg:p-6 p-2 space-y-6 lg:text-base text-sm">
                @foreach ($carts as $cart)
                    <!-- Unified Form for Buy and Delete -->
                    <form action="{{ route('actCart') }}" method="POST" onsubmit="disableSubmitButton()" class="rounded-lg shadow lg:p-2.5 p-1 bg-gray-100 flex flex-col gap-2">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $cart->product->id }}">
                        <input type="hidden" name="id" value="{{ $cart->id }}">

                        <div class="flex flex-row">
                            <div class="lg:min-w-[15%] lg:max-w-[15%] min-w-[30%] max-w-[30%] mr-2">
                                <img class="w-full rounded-lg border-2" src="{{ url('images/products/' . $cart->product->pict) }}" alt="Product Image">
                            </div>

                            <div class="flex flex-col w-full">
                                <p class="lg:text-lg font-semibold">
                                    {{ $cart->product->name }}
                                </p>
                                <p>
                                    <span class="font-semibold">Total:</span>
                                    <input type="number" name="total" class="inline border-x-0 border-t-0 bg-transparent focus:ring-0 p-0 w-14 focus:border-pantes"
                                    value="1" min="1" max="{{ $cart->product->stock }}">
                                </p>
                                <p>
                                    <span class="font-semibold">Price:</span> Rp{{ number_format($cart->product->price, 0, ',', '.') }}
                                </p>

                                <div class="flex justify-between lg:mt-10">
                                    <!-- Submit Button for Buy -->
                                    <div x-data="{ show: true }" class="lg:w-16 w-12">
                                        <button x-show="show" @click="show = !show" type="submit" name="action" value="buy" class="lg:px-2 py-1 w-full bg-pantes lg:text-base rounded-xl font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 hover:text-pantes border-pantes border-[3px] hover:bg-white">
                                            BUY
                                        </button>
                                        <div x-show="!show" class="lg:px-2 py-1 w-full flex justify-center bg-pantes lg:text-base rounded-xl font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 hover:text-pantes border-pantes border-[3px] hover:bg-white">
                                            <svg class="animate-spin inline h-5 w-5 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Submit Button for Delete -->
                                    <div x-data="{ show: true }">
                                        <button x-show="show" @click="show = !show" type="submit" name="action" value="delete" class="text-red-500 hover:text-red-700 flex items-center gap-1" aria-label="Delete Item">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                        </button>
                                            <svg x-show="!show" class="w-6 h-6 text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        @else
        <div class="bg-white rounded-lg shadow w-full col-span-3 mt-10 lg:p-6 p-2 space-y-6 lg:text-base text-sm">
            <div class="bg-gray-100 rounded-md shadow border-2 lg:h-44 p-2.5 space-x-4 flex items-center justify-center">
                <h2 class="lg:text-3xl font-semibold">
                    Get Some Products!
                </h2>
            </div>
        </div>
        @endif
    </div>
</x-none>
