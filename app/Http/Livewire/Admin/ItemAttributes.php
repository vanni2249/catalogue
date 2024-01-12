<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\Option;

class ItemAttributes extends Component
{
    public $item;
    public $attributes;
    public $selectedAttributes;
    public $checkboxDisable;

    protected $listeners = ['optionAdded' => 'mount','optionRemoved' => 'mount'];

    public function mount()
    {
        $this->attributes = Attribute::all();
        $this->selectedAttributes = $this->item->attributes->pluck('id')->toArray();
        $this->checkboxDisable = (Option::where('item_id',$this->item->id)->count() > 0)?'disabled':'';
    }
    public function render()
    {
        return view('livewire.admin.item-attributes');
    }

    public function updated()
    {
        $this->item->attributes()->sync($this->selectedAttributes);
        $this->emit('attributeSelected');
    }
}
