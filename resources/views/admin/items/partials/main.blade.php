<x-items.card-cols class="col-span-3">
    {{-- Id --}}
    <x-items.card-widged>
        <x-slot:title>
            id
        </x-slot:title>
        <x-inputs.text label="number" value="{{$item->id}}" readonly />
    </x-items.card-widged>
</x-items.card-cols>
<x-items.card-cols class="col-span-3">
    {{-- Created --}}
    <x-items.card-widged>
        <x-slot:title>
            created
        </x-slot:title>
        <x-inputs.text label="date" value="{{$item->created_at}}" readonly />
    </x-items.card-widged>
</x-items.card-cols>
<x-items.card-cols class="col-span-3">
    {{-- Seller --}}
    @livewire('admin.item-seller',['item' => $item])

</x-items.card-cols>
<x-items.card-cols class="col-span-3">
    {{-- Status --}}
    <x-items.card-widged>
        <x-slot:title>
            status
        </x-slot:title>
        <x-inputs.text label="data" readonly value="Draft" />
    </x-items.card-widged>
</x-items.card-cols>
<x-items.card-cols class="col-span-4">
    {{-- Title --}}
    @livewire('admin.item-title',['item' => $item])

    {{-- Categories --}}
    @livewire('admin.item-categories',['item' => $item])

    {{-- Attributes --}}
    @livewire('admin.item-attributes',['item' => $item])

    {{-- Options --}}
    @livewire('admin.item-options',['item' => $item])

    {{-- Products --}}
    @livewire('admin.item-products',['item' => $item])

</x-items.card-cols>
<x-items.card-cols class="col-span-8">
    {{-- Descriptions --}}
    @livewire('admin.item-description',['item' => $item])

</x-items.card-cols>