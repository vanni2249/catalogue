@props(['label' => ''])
<div {{ $attributes->merge(['class' => 'flex flex-col ']) }}>
    <label for="{{$label}}" class="text-xs mb-2 capitalize">{{$label}}</label>
    <input type="text" class="bg-white text-sm text-gray-800 p-2 rounded shadow" {{$attributes}}>
    
</div>