<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ItemsMenu extends Component
{
    public $show;

    public function render()
    {
        return view('livewire.admin.items-menu');
    }

    public function show($data)
    {
        $this->show = $data;
        session()->put('items-index',$this->show);
        $this->sendData();
    }

    public function sendData()
    {
        $data = [
            'show' => $this->show
        ];

        $this->emit('dataFromItemsShowMenu',$data);
    }
}
