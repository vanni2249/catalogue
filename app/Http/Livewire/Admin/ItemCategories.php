<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class ItemCategories extends Component
{
    public $item;
    public $selectedCategories;
    public $categories =[];

    public function mount()
    {
        $this->categories = Category::all();
        $this->selectedCategories = $this->item->categories->pluck('id')->toArray();
    }
    public function render()
    {
        return view('livewire.admin.item-categories');
    }

    public function updated()
    {
        $this->item->categories()->sync($this->selectedCategories);
    }
}
