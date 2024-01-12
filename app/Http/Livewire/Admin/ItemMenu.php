<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ItemMenu extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.admin.item-menu');
    }
}
