<?php

namespace App\Livewire\Admin\Items;

use App\Models\Item;
use Livewire\Component;

class ItemsUpdate extends Component
{
    public $item ,$name ,$code ,$follow_item_id ,$calc_fl ;
    public $ids;

    protected $listeners=['itemUpdate'];
    

    public function mount()
    {
        // Fetch  items from the database
        $this->ids = Item::pluck('name', 'id')->toArray();
    }

    

    public function itemUpdate($id){

    //fill modal with data with same id 
    $this->item = Item::find($id);
    $this->name = $this->item->name ;
    $this->code = $this->item->code ;
    $this->follow_item_id = $this->item->follow_item_id ;
    $this->calc_fl = $this->item->calc_fl ;
    $this->resetValidation();
    //show edit modal
    $this->dispatch('updateModalToggle');
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
    $this->item->update($data);
    //reset modal 
    
    //hide modal
    $this->dispatch('updateModalToggle');
    
    //refresh the bachground componenet
    $this->dispatch('refreshData')->to(ItemsData::class);
    }



    public function render()
    {
        return view('admin.items.items-update');
    }
}
