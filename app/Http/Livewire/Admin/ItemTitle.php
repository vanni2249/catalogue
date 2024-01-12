<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ItemTitle extends Component
{   
    public $item;
    public $title;

    protected $rules = [
        'title' => 'required|min:100|max:250',
    ];

    public function mount()
    {
        $this->title = $this->item->title;
    }

    public function render()
    {
        return view('livewire.admin.item-title',[
            'item' => $this->item
        ]);
    }

    public function updated()
    {
        $this->validate();
        $this->item->update([
            'title' => $this->title
        ]);
    }
}
