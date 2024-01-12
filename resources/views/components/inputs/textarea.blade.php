@props(['label' => '','id' => ''])
<div {{ $attributes->merge(['class' => 'col-span-6 flex flex-col']) }}>
    <label for="{{$label}}" class="text-xs mb-2 capitalize">{{$label}}</label>
    {{-- <input type="text" class="bg-white p-1 rounded"> --}}
    <textarea  name="" id="{{$id}}" {{$attributes}}  class="bg-white text-sm text-gray-800 p-2 rounded h-24 resize-none shadow">{{$slot}}</textarea>
</div>
