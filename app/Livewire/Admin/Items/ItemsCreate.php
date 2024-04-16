<?php

namespace App\Livewire\Admin\Items;

use App\Models\Item;
use Livewire\Component;


class ItemsCreate extends Component
{

    public  $name , $code ,$follow_item_id ,$calc_fl ;
    public $ids ;



    public function mount()
    {
        // Fetch  items from the database
        $this->ids = Item::pluck('name', 'id')->toArray();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'code' => 'required|numeric',
            'follow_item_id' => 'nullable|exists:items,id',

        ];
    }
    public function submit(){

        $data = $this->validate();

        //save data in db
        item::create($data);
        //reset modal 
        $this->reset(['name','code','follow_item_id','calc_fl']);

        //hide modal
        $this->dispatch('createModalToggle');
        
        //refresh the bachground componenet
        $this->dispatch('refreshData')->to(ItemsData::class);
    }




    public function render()
    {
        return view('admin.items.items-create');
    }
}
