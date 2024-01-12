<div>
    @if ($item->options->count() > 0)
    <x-items.card-widged>
        <x-slot:title>
            products
        </x-slot:title>
        <x-slot:action>
            <button wire:click="$set('formNewProduct',{{($formNewProduct == false)?true:false}})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </button>
        </x-slot:action>
        {{-- Form --}}
        <div x-data="{ formNewProduct: @entangle('formNewProduct') }" x-show="formNewProduct"
            class="mb-4 border-y col-span-6 grid grid-cols-7 gap-4">
            @foreach ($item->attributes as $attribute)
            <div class="col-span-2">
                {{-- <label for="name" class="text-xs mb-2 capitalize">attribute</label> --}}
                {{-- <select wire:model.lazy='attributes' class="w-full bg-white rounded text-sm p-2 capitalize"> --}}
                    {{-- <option value="">Choose</option> --}}
                    {{-- @foreach ($item->attributes as $attribute) --}}
                    {{-- <option value="">{{$attribute->name}}</option> --}}
                    <x-inputs.text label='attributes' readonly value='{{$attribute->name}}'></x-inputs.text>
                    {{-- @endforeach --}}
                    {{--
                </select> --}}

            </div>
            <div class="col-span-4">
                <label for="name" class="text-xs mb-2 capitalize">option</label>
                <select wire:model='options.{{$attribute->name}}' class="w-full bg-white rounded text-sm p-2 ">
                    <option value="">Choose</option>
                    @foreach ($item->options()->where('attribute_id',$attribute->id)->get() as $option)
                    <option value="{{$option->label}}">{{$option->label}}</option>
                    @endforeach
                </select>

            </div>

            @endforeach
            <button wire:click='submit' type="submit" wire:loading.class="hidden"
                class="mt-6 rounded text-white font-semibold text-sm bg-blue-600">Add</button>
        </div>
        <div class="mb-4">
            @error('attribute')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
            @error('label')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
            @error('value')<span class="block text-xs text-red-700">{{$message}}</span>@enderror
        </div>
        {{-- List --}}
        <div class="space-y-2">
            @forelse ($products as $product)
            <div class="bg-white p-4 rounded">
                <div class="flex flex-row justify-between gap-4 items-center">
                    <div class="text-sm">{{$product->id}}</div>
                    <div class="flex-grow space-y-4">
                        <ul class="flex flex-row justify-evenly">
                    @foreach ( json_decode($product->options,true)  as $option)
                        <li class="text-xs font-semibold">{{$option}}</li>
                    @endforeach
                    </ul>
                       
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </div>
                </div>
            </div>
                
            @empty
                <div class="bg-gray-400 p-4 rounded">
                    Empty
                </div>
            @endforelse
            
        </div>
    </x-items.card-widged>

    @endif

</div>