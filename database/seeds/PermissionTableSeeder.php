<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Permission())->fill([
            'name' => 'create',
            'label' => 'create'
        ])->save();

        (new Permission())->fill([
            'name' => 'edit',
            'label' => 'edit'
        ])->save();
        
        (new Permission())->fill([
            'name' => 'delete',
            'label' => 'delete'
        ])->save();
    }
}
