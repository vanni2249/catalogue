<ul class="grid grid-cols-7 text-xs font-semibold p-4">
    <li></li>
    <li>Category</li>
    <li>ID</li>
    <li>UUi</li>
    <li>Cost</li>
    <li>Extra</li>
    <li>Price</li>
</ul>
<div class="space-y-2">
    @foreach ($items as $item)
    <a href="{{ route('items.show', ['item'=>$item->id,'show' => 'main']) }}" class="block">
        <ul
            class="grid grid-cols-7 items-center text-sm bg-gray-100 hover:bg-gray-200 cursor-pointer rounded px-4 py-2">
            <li>
                <div class="bg-gray-300 w-28 h-28"></div>
            </li>
            <li>
                <span>
                    {{$item->categories()->first()->name}}
                </span>
                @if ($item->categories()->count() >= 2)
                <span class="ml-2 font-semibold p-1">
                    + {{($item->categories()->count() - 1)}}
                </span>
                @endif
            </li>
            <li>{{$item->id}}</li>
            <li>127818798719</li>
            <li>14.60</li>
            <li>21%</li>
            <li>18.90</li>
        </ul>
    </a>
    @endforeach
</div>
{{ $items->links() }}