<x-layouts.shop>
    <div class="py-8 space-y-8">
        <h1 class="font-semibold">Items</h1>
        <div class="grid grid-cols-12 gap-4">
            @foreach ($items as $item)
                <a href="{{ route('shop.items.show', ['item'=>$item->id]) }}" class="col-span-2 mb-8">
                    <div class="shadow hover:shadow-xl hover:shadow-slate-400">
                        <div class="bg-gray-200 h-56"></div>
                        <div class="space-y-4 p-2">
                            <p class="text-sm line-clamp-2">{{$item->title}}</p>
                            <p class="font-semibold text-gray-700">$34.87</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</x-layouts.shop>