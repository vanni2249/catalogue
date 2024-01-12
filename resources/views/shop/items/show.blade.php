<x-layouts.shop>
    <div class="grid grid-cols-12 gap-4 py-8 px-4">
        {{-- show images --}}
        <div class="col-span-12 md:col-span-6 lg:col-span-4">
            @livewire('shop.item-images',['item' => $item])
        </div>
        {{-- detail --}}
        <div class="col-span-12 md:col-span-6 lg:col-span-6">
            <div class="h-full flex flex-col justify-between space-y-4">
                <div>
                    <p class="text-2xl font-semibold line-clamp-2">{{$item->title}}</p>
                    <p>$34.99</p>
                </div>
                <div class="flex-grow"></div>
                <div class="flex flex-col space-y-4">
                    <button class="bg-orange-400 text-sm font-black py-2 md:py-4 rounded">Buy now</button>
                    <button class="bg-yellow-400 text-sm text-black font-black py-2 md:py-4 rounded">Add to cart</button>
                </div>

            </div>
        </div>
        {{-- other --}}
        <div class="hidden lg:block col-span-2">
            <div class="h-full flex flex-col">
                <div class="flex-grow">
                    <p class="text-xs font-semibold">Cart</p>
                    
                </div>
                <div class="space-y-4">
                    <p class="text-xs font-semibold">Sponser</p>
                    {{-- <div class="space-y-"> --}}
                        <div class="border flex justify-center p-4">
                            <img src="{{ asset($item->images()->first()->path_thumbnail) }}" class="" alt="">
                        </div>
                        <p class="line-clamp-2 text-sm">
                            {{$item->title}}
                        </p>
                        <button class="w-full border border-black text-sm text-black hover:bg-yellow-400 hover:text-black font-semibold py-2 rounded">
                            Add to cart
                        </button>
                    {{-- </div> --}}
                </div>
            </div>
            {{-- <div class="h-full flex flex-col">
                <div class="flex-grow"></div>
            </div> --}}
        </div>
    </div>
</x-layouts.shop>