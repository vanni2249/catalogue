<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;

class ItemImages extends Component
{
    use WithFileUploads;

    public $item;
    public $photo;
    public $image;
    public $test;

    protected $rules = [
        'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000'
    ];

    public function mount()
    {
        $this->image = ($this->item->images()->count())?$this->item->images()->first()->path_full:false;
    }

    public function render()
    {
        return view('livewire.admin.item-images',[
            'images' => $this->item->images()->orderBy('id','asc')->get()
        ]);
    }

    public function save()
    {
        $this->validate();

        // Redimensionar y comprimir la imagen
        $fullImage = Image::make($this->photo)
            ->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->crop(800, 800)
            ->encode('jpg', 100); // Calidad JPEG de 80 (ajusta según tus necesidades)

        $thumbnailImage = Image::make($this->photo)
            ->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->crop(200, 200)
            ->encode('jpg', 100);

        sleep(1);

        $photo = new \App\Models\Image();
        $photo->item_id = $this->item->id;
        $photo->name = $this->photo->getClientOriginalName();
        $photo->path = $this->photo->store();
        $photo->path_thumbnail = 'storage/'.$this->photo->store('thumbnail');
        $photo->path_full = 'storage/'.$this->photo->store('full');
        $photo->save();
        

        // Guardar la imagen en el almacenamiento (puedes ajustar la ubicación según tus necesidades)
        Storage::disk('public')->put($this->photo->store('full'), $fullImage->stream());
        Storage::disk('public')->put($this->photo->store('thumbnail'), $thumbnailImage->stream());

        // Limpiar el campo de imagen después de guardarla
        $this->photo = null;

        $this->image = ($this->item->images()->count())?$this->item->images()->latest()->first()->path_full:false;
       
    }

    public function delete($id,$path)
    {
        $this->image = ($this->item->images()->count())?$this->item->images()->first()->path_full:false;
        \App\Models\Image::find($id)->delete();
        Storage::disk('public')->delete('thumbnail/'.$path);
        Storage::disk('public')->delete('full/'.$path);
    }

    public function showImage($path_full)
    {
        $this->image = $path_full;
    }
}
