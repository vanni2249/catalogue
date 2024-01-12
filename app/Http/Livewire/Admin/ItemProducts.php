<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ItemProducts extends Component
{
    public $item;
    public $attributes = [];
    public $options = [];
    public $formNewProduct = false;
    public $productOptions;
    public $test;

    protected $listeners = ['optionAdded' => 'mount','optionRemoved' => 'mount'];

    public function mount()
    {
        $this->attributes = $this->item->attributes->pluck('name')->toArray();
        // $this->productOptions json_decode()

    }

    public function render()
    {
        return view('livewire.admin.item-products',[
            'products' => Product::where('item_id',$this->item->id)->get()
        ]);
    }

    public function submit()
    {
        $this->item->products()->create([
            'options' => json_encode($this->options)
        ]);

        $this->reset(['options']);
    }
}
