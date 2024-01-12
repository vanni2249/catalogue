<div>
    <x-items.card-widged>
        <x-slot:title>
            title
        </x-slot:title>
        <x-inputs.textarea wire:model='title' label="data">{{$title}}</x-inputs.textarea>
        <x-inputs.error value='title'></x-inputs.error>
    </x-items.card-widged>
</div>