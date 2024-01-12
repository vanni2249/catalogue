<div>
    @switch($show)
    @case('table')
        <x-items.table :items="$items" />
    
    @break
    @case('list')
        <x-items.list-overview :items="$items" />

    @break
    @case('grid')
        <x-items.grid :items="$items" />

    @break
    @default
    @case('table')
    @endswitch
</div>