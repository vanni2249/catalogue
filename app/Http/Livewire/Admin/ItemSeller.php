<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Livewire\Component;

class ItemSeller extends Component
{
    public $item;
    public $sellers;
    public $seller;

    public function mount()
    {
        $this->sellers = Seller::all();
        $this->seller = $this->item->seller->id;
    }

    public function render()
    {
        return view('livewire.admin.item-seller');
    }

    public function updated()
    {
        $this->item->update([
            'seller_id' => $this->seller
        ]);
    }
}
