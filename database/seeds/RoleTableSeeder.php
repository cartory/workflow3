<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'label' => 'admin'
        ]);
        
        Role::create([
            'name' => 'user',
            'label' => 'user'
        ]);
    }
}