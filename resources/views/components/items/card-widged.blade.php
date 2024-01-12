@props(['title' => '','action' => ''])
<div {{ $attributes->merge(['class' => 'block bg-gray-200 p-10 rounded ']) }}>
    <div class="flex justify-between">
        <div>
            <h2 class="text-xs text-gray-700 font-semibold uppercase pb-6">
                {{$title}}
            </h2>
        </div>
        <div>
            {{$action}}
        </div>

    </div>
    {{$slot}}
</div>