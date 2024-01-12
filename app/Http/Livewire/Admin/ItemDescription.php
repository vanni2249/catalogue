<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ItemDescription extends Component
{
    public $item;
    public $description;

    public function mount()
    {
        $this->description = $this->item->description;
    }

    public function updated()
    {
        $this->item->update([
            'description' => $this->description
        ]);
    }

    public function render()
    {
        return view('livewire.admin.item-description');
    }
}
