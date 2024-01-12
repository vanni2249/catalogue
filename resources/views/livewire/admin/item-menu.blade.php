<div>
    <ul class="flex justify-center space-x-16 text-sm">
        <li class="{{(request()->is('admin/items/*/main')?'font-semibold':'')}} hover:text-gray-600">
            <a href="{{ route('items.show', ['item'=>$item,'show'=>'main']) }}">Main</a>
        </li>
        <li class="{{(request()->is('admin/items/*/media')?'font-semibold':'')}} hover:text-gray-600">
            <a href="{{ route('items.show', ['item'=>$item,'show'=>'media']) }}">Media</a>
        </li>
    </ul>
</div>
