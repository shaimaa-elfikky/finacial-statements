<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrcreate(['email' =>'admin@admin.com'],
                              [ 'name'=>'Admin',
                             'password'=>bcrypt('123456789')]);
    }
}
