<div>
    <x-items.card-widged class="h-full">
        <x-slot:title>
            seller
        </x-slot:title>
        <div class="flex flex-col col-span-6">
            <label for="name" class="text-xs mb-2 capitalize">brand</label>
            <select wire:model='seller' class="text-sm bg-white p-2 rounded shadow">
                @foreach ($sellers as $seller)
                <option value="{{$seller->id}}">{{$seller->brand}}</option>
                @endforeach
            </select>
        </div>
    </x-items.card-widged>
</div>