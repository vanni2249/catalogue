<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class ItemImages extends Component
{
    public $item;
    public $image;
    public function mount()
    {
        $this->image = $this->item->images()->first()->path_full??'';
        // $this->images = $this->item->images();
    }

    public function render()
    {
        return view('livewire.shop.item-images');
    }

    public function changePath($image)
    {
        $this->image = $image;
    }
}
