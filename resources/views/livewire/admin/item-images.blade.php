<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 bg-gray-200 p-4 rounde">
            <form  wire:submit.prevent="save">
                <div class="flex">
                    <input type="file"  wire:model="photo" class="bg-white flex-grow text-sm">
                    <div wire:loading:remove>
                        <button type="submit" class="bg-slate-800 text-white px-4 text-sm font-semibold rounded-r">Save Photo</button>
                    </div>
                </div>
                @error('photo') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
            </form>
        </div>
        @if ($images->count())
        <div class="col-span-6">
            <img src="{{ asset($image) }}" alt="">
        </div>
        <div class="col-span-6">
            <div class="grid grid-cols-6 gap-4">
                @foreach ($images as $image)
                <div class="col-span-2 flex justify-center items-center relative">
                    <img class=" w-full " src="{{ asset($image->path_thumbnail) }}" alt="">
                    <div class="absolute bottom-2">
                        <button wire:click="delete('{{$image->id}}','{{$image->path}}')" class=" bg-white p-2 rounded-full bg-opacity-60 hover:bg-opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              
                        </button>
                        <button wire:click="showImage('{{$image->path_full}}')" class=" bg-white p-2 rounded-full bg-opacity-60 hover:bg-opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              
                        </button>

                    </div>
                </div>   
                @endforeach
                <div class="col-span-2 bg-gray-200 w-full h-56 flex justify-center items-center" wire:loading wire:target="save">
                   <p>Uploading imagen...</p> 
                </div>
            </div>
        </div>
            
        @else
            <div class="col-span-12 bg-gray-200 p-4">
                <div wire:loading.remove>
                    Empty
                </div>
                <div wire:loading wire:target="save">
                    Uploading imagen...
                </div>
            </div>
        @endif
    </div>
</div>
