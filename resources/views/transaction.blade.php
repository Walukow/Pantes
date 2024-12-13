<x-none>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    {{-- <div class="bg-white rounded-lg shadow lg:m-10 mt-10 lg:mx-60 p-6 space-y-6 lg:text-base text-sm">
        <div class=" rounded-lg shadow p-2.5 bg-gray-100 flex flex-col gap-2">
            <div class="flex flex-row">
                <div class="lg:min-w-[20%] lg:max-w-[20%] min-w-[30%] max-w-[30%] mr-2">
                    <img class="w-full rounded-lg border" src="{{ url('images/baju2.jpg') }}" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="lg:text-lg font-semibold">
                        The Cloth of yin yang dan sebagainya panjang lah namane
                    </p>
                    <p class="lg:text-lg">
                            Status: <span class="text-pantes">Pending</span>
                    </p>
                </div>
            </div>
            <div class="ml-2">
                <p x-show="">
                    <span class="font-semibold">Total:</span> 2
                </p>
                <p x-show="">
                    <span class="font-semibold">Price:</span> Rp249.998
                </p>
                <p x-show="">
                    <span class="font-semibold">No:</span> 082122222980
                </p>
                <p x-show="">
                    <span class="font-semibold">Adress:</span> Lorem dolorum, obcaecati minus modi explicabo neque sit! Neque.
                </p>
            </div>
        </div>
        <div class=" rounded-lg shadow p-2.5 bg-gray-100 flex flex-col gap-2">
            <div class="flex flex-row">
                <div class="lg:min-w-[20%] lg:max-w-[20%] min-w-[30%] max-w-[30%] mr-2">
                    <img class="w-full rounded-lg border" src="{{ url('images/baju2.jpg') }}" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="lg:text-lg font-semibold">
                        The Cloth of yin yang dan sebagainya panjang lah namane
                    </p>
                    <p class="lg:text-lg">
                            Status: <span class="text-green-700">Done</span>
                    </p>
                </div>
            </div>
            <div class="ml-2">
                <p x-show="">
                    <span class="font-semibold">Total:</span> 2
                </p>
                <p x-show="">
                    <span class="font-semibold">Price:</span> Rp249.998
                </p>
                <p x-show="">
                    <span class="font-semibold">No:</span> 082122222980
                </p>
                <p x-show="">
                    <span class="font-semibold">Adress:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis nam consectetur sed quibusdam soluta temporibus eligendi dolorum, obcaecati minus modi explicabo neque sit! Neque.
                </p>
            </div>
        </div>
        <div class=" rounded-lg shadow p-2.5 bg-gray-100 flex flex-col gap-2">
            <div class="flex flex-row">
                <div class="lg:min-w-[20%] lg:max-w-[20%] min-w-[30%] max-w-[30%] mr-2">
                    <img class="w-full rounded-lg border" src="{{ url('images/baju2.jpg') }}" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="lg:text-lg font-semibold">
                        The Cloth of yin yang dan sebagainya panjang lah namane
                    </p>
                    <p class="lg:text-lg">
                            Status: <span class="text-rose-700">Decline</span>
                    </p>
                </div>
            </div>
            <div class="ml-2">
                <p x-show="">
                    <span class="font-semibold">Total:</span> 2
                </p>
                <p x-show="">
                    <span class="font-semibold">Price:</span> Rp249.998
                </p>
                <p x-show="">
                    <span class="font-semibold">No:</span> 082122222980
                </p>
                <p x-show="">
                    <span class="font-semibold">Adress:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis nam consectetur sed quibusdam soluta temporibus eligendi dolorum, obcaecati minus modi explicabo neque sit! Neque.
                </p>
            </div>
        </div>
        <div class=" rounded-lg shadow p-2.5 bg-gray-100 flex flex-col gap-2">
            <div class="flex flex-row">
                <div class="lg:min-w-[20%] lg:max-w-[20%] min-w-[30%] max-w-[30%] mr-2">
                    <img class="w-full rounded-lg border" src="{{ url('images/baju2.jpg') }}" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="lg:text-lg font-semibold">
                        The Cloth of yin yang dan sebagainya panjang lah namane
                    </p>
                    <p class="lg:text-lg">
                            Status: <span class="text-blue-700">Processing</span>
                    </p>
                </div>
            </div>
            <div class="ml-2">
                <p x-show="">
                    <span class="font-semibold">Total:</span> 2
                </p>
                <p x-show="">
                    <span class="font-semibold">Price:</span> Rp249.998
                </p>
                <p x-show="">
                    <span class="font-semibold">No:</span> 082122222980
                </p>
                <p x-show="">
                    <span class="font-semibold">Adress:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis nam consectetur sed quibusdam soluta temporibus eligendi dolorum, obcaecati minus modi explicabo neque sit! Neque.
                </p>
            </div>
        </div>
        <div class="bg-gray-100 rounded-md shadow border-2 lg:h-44 p-2.5 space-x-4 flex items-center justify-center">
            <h2 class="lg:text-3xl font-semibold">
                There Is No Transaction Yet!
            </h2>
        </div> 
    </div> --}}

    <div class="bg-white rounded-lg shadow lg:m-10 mt-10 lg:mx-60 p-6 space-y-6 lg:text-base text-sm">

        @forelse ( $transactions as $transaction )
        <div class=" rounded-lg shadow p-2.5 bg-gray-100 flex flex-col gap-2">
            <div class="flex flex-row">
                <div class="lg:min-w-[20%] lg:max-w-[20%] min-w-[30%] max-w-[30%] mr-2">
                    <img class="w-full rounded-lg border" src="{{ url('images/products/' . $transaction->product->pict) }}" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="lg:text-lg font-semibold">
                        {{ $transaction->product->name }}
                    </p>
                    <p class="lg:text-lg">
                        Status: 
                        <span class="
                            {{ $transaction->status == 'PENDING' ? 'text-pantes' : '' }}
                            {{ $transaction->status == 'PROCESSING' ? 'text-blue-700' : '' }}
                            {{ $transaction->status == 'DECLINE' ? 'text-rose-700' : '' }}
                            {{ $transaction->status == 'DONE' ? 'text-green-700' : '' }}
                        ">
                            {{ $transaction->status }}
                        </span>
                    </p>
                </div>
            </div>
            <div class="ml-2">
                <p x-show="">
                    <span class="font-semibold">Total:</span> {{ $transaction->total }}
                </p>
                <p x-show="">
                    <span class="font-semibold">Price:</span> Rp{{ number_format($transaction->product->price, 0, ',', '.') }}
                </p>
                <p x-show="">
                    <span class="font-semibold">No:</span> {{ $transaction->user->phone_number }}
                </p>
                <p x-show="">
                    <span class="font-semibold">Adress:</span> {{ $transaction->user->address }}
                </p>
            </div>
        </div>
        @empty
        <div class="bg-gray-100 rounded-md shadow border-2 lg:h-44 p-2.5 space-x-4 flex items-center justify-center">
            <h2 class="lg:text-3xl font-semibold">
                There Is No Transaction Yet!
            </h2>
        </div> 
        @endforelse
    
    </div>
</x-none>
