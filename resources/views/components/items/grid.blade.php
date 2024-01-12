<div class="grid grid-cols-6 gap-4 p-4">
    @foreach ($items as $item)
    <a href="{{ route('items.show', ['item'=>$item->id,'show' => 'main']) }}">
        <div class="bg-gray-100 hover:bg-gray-200 rounded p-2 h-60">
            <div class="p-2 h-full flex flex-col justify-center items-center space-y-4">
                <div class="bg-gray-300 w-28 h-28"></div>
                <div class="h-16 text-center space-y-2">
                    <h2 class="text-sm line-clamp-1">
                        {{$item->title}}
                    </h2>
                    <div class="flex justify-center">
                        <p class="bg-white text-xs p-1 font-semibold px-4 rounded-full capitalize">
                            <span>
                                {{$item->categories()->first()->name}}
                            </span>
                            @if ($item->categories()->count() >= 2)
                            <span class="ml-2 font-semibold p-1">
                                + {{($item->categories()->count() - 1)}}
                            </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
        
    @endforeach
</div>
{{ $items->links() }}