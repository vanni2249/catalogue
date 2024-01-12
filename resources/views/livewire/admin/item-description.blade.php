<div class="h-full">
    <x-items.card-widged class='h-full'>
        <x-slot:title>
            Descriptions
        </x-slot:title>
        <x-inputs.textarea wire:ignore wire:model='description' label="data" id="editor">{{$description}}
        </x-inputs.textarea>
    </x-items.card-widged>
</div>
@push('js')
<script>
    document.addEventListener('livewire:load', function () {
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then(editor => {
                    editor.model.document.on('change:data',() => {
                        const content = editor.getData();
                        @this.set('description', content);
                        // @this.call('refresh');
                       
                    })
                })
                .catch( error => {
                    console.error( error );
                } );
        
    });
</script>
@endpush