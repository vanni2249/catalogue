<?php

namespace App\Http\Livewire\Admin;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $show;

    protected $listeners = ['dataFromItemsShowMenu'];

    public function dataFromItemsShowMenu($data)
    {
        $this->show = $data['show'];
    }

    public function mount()
    {
        if (session('items-index')) {
            $this->show = session('items-index');
        }else{
            $this->show = 'table';
        }
    }
    public function render()
    {
        return view('livewire.admin.items',[
            'items' => Item::orderBy('id','desc')->paginate(24)
        ]);
    }

    public function show($data)
    {
        $this->show = 'table';
    }
}
