<?php

namespace App\Livewire\Admin\Items;

use App\Models\Item;
use Livewire\Component;

class ItemsDelete extends Component
{

    public $item ;

    protected $listeners =['itemDelete'];

    public function itemDelete($id){

    //find id
    $this->item = Item::find($id);

    //show delete modal
    $this->dispatch('deleteModalToggle');
    }



    public function submit(){

    //delete record
    $this->item->delete();
    $this->reset('item');


    //hide modal
    $this->dispatch('deleteModalToggle');

    //refresh the bachground componenet
    $this->dispatch('refreshData')->to(ItemsData::class);
    }


    public function render()
    {
        return view('admin.items.items-delete');
    }
}
