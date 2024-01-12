<div>
    @if ($item->attributes->count() > 0)
    <x-items.card-widged>
        <x-slot:title>
            options
        </x-slot:title>
        <x-slot:action>
            <button wire:click="$set('formNewOption',{{($formNewOption == false)?true:false}})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>
        </x-slot:action>
        {{-- Form --}}
        <div x-data="{ formNewOption: @entangle('formNewOption') }" x-show="formNewOption"
            class="mb-4 border-y col-span-6 grid grid-cols-7 gap-4">
            <div class="col-span-2">
                <label for="name" class="text-xs mb-2 capitalize">attribute</label>
                <select wire:model.lazy='attribute' class="w-full bg-white rounded text-sm p-2 capitalize">
                    <option value="">Choose</option>
                    @foreach ($item->attributes as $attribute)
                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                    @endforeach
                </select>

            </div>
            <x-inputs.text wire:model.lazy='label' label="label" class="col-span-2"></x-inputs.text>
            <x-inputs.text wire:model.lazy='value' label="value" class="col-span-2"></x-inputs.text>
            <button wire:click='submit' type="submit" wire:loading.class="hidden"
                class="mt-6 rounded text-white font-semibold text-sm bg-blue-600">Add</button>
        </div>
        <div class="mb-4">
            @error('attribute')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
            @error('label')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
            @error('value')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
        </div>
        {{-- List --}}
        <div class="space-y-4">
            @foreach ($options as $option)
            <div class="col-span-6 grid grid-cols-7 gap-4">
                <x-inputs.text label="attribute" class="col-span-2" value='{{$option->attribute->name}}' />
                <x-inputs.text label="label" class="col-span-2" value='{{$option->label}}' />
                <x-inputs.text label="value" class="col-span-2" value='{{$option->value}}' />
                <button wire:click="remove('{{$option->id}}')"
                    class="mt-6 text-gray-400 hover:text-gray-700 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            @endforeach
        </div>


    </x-items.card-widged>
    @endif
</div>