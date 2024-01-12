<div>
    <x-items.card-widged>
        <x-slot:title>
            categories
        </x-slot:title>
        <div class="grid grid-cols-6 gap-4">
            @foreach ($categories as $category)
            <label for="name" class="text-sm mb-2 col-span-2 capitalize flex items-center">
                <input type="checkbox" value="{{$category->id}}" wire:model='selectedCategories' {{(in_array($category->id,
                $selectedCategories))? 'checked' : ''}} >
                <span class="ml-2">{{$category->name}}</span>
            </label>
            @endforeach
        </div>
    
    </x-items.card-widged>
</div>