<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::updateOrCreate([
            'name'=>'first item',
            'code' => 545,
            'follow_item_id' => 1,
            'calc_fl' => 0,
        ]);
    }
}
