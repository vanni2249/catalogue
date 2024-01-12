<div>
    <x-items.card-widged>

        <x-slot:title>
            attributes
        </x-slot:title>
        <div class="grid grid-cols-6 gap-4">
            @foreach ($attributes as $attribute)
            <label for="name" class="text-sm mb-2 col-span-2 capitalize flex items-center">
                <input type="checkbox" {{$checkboxDisable }} value="{{$attribute->id}}" wire:model='selectedAttributes'
                    {{(in_array($attribute->id, $selectedAttributes))? 'checked' : ''}} >
                <span class="ml-2">{{$attribute->name}}</span>
            </label>
            @endforeach
        </div>
    </x-items.card-widged>
</div>