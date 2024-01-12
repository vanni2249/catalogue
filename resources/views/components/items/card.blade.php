@props(['title'=>'','menu'=>'','button'=>'','nav'=>'','content'=>''])
<div class="border rounded shadow">
    <header class="bg-gray-200 rounded-t p-4">
        <div class="flex justify-between items-center">
            <div>{{$title}}</div>
            <div class="flex-grow">{{$menu}}</div>
            <div>{{$button}}</div>
        </div>
    </header>
    @if ($nav)
    <section class="border-b border-gray-200 p-4">
        {{$nav}}
    </section>
        
    @endif
    <section class="p-4">
        <div class="grid grid-cols-12 gap-4">
            {{$content}}
        </div>
    </section>
</div>