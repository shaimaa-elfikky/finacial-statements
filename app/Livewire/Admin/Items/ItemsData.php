<?php

namespace App\Livewire\Admin\Items;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class ItemsData extends Component
{

    use WithPagination ;

    public $search ;



    protected $listeners = ['refreshData'=> '$refresh'];
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.items.items-data',['data'=>Item::where('name','like','%'.$this->search.'%')->paginate(5)]);
    }
}
