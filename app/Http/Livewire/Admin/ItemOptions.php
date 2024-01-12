<?php

namespace App\Http\Livewire\Admin;

use App\Models\Option;
use Livewire\Component;

class ItemOptions extends Component
{
    public $item;
    public $formNewOption = false;
    public $attribute;
    public $label;
    public $value;
    
    protected $rules = [
        'attribute' => 'required',
        'label' => 'required',
        'value' => 'required'
    ];

    protected $listeners = ['attributeSelected' => 'render'];

    public function render()
    {
        return view('livewire.admin.item-options',[
            'options' => Option::where('item_id',$this->item->id)->orderBy('id','desc')->get()
        ]);
    }

    public function submit()
    {   
        $this->validate();
        $this->item->options()->create([
            'attribute_id' => $this->attribute,
            'label' => $this->label,
            'value' => $this->value
           ]);
           $this->reset(['attribute', 'label', 'value']);
           $this->formNewOption = false;
           $this->emit('optionAdded');
    }
    public function remove($id)
    {
        Option::find($id)->delete();
        $this->emit('optionRemoved');
    }
}
