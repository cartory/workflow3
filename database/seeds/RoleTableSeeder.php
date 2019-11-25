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
        (new Role())->fill([
            'name' => 'admin',
            'label' => 'admin'
        ])->save();

        (new Role())->fill([
            'name' => 'user',
            'label' => 'user'
        ])->save();
    }
}