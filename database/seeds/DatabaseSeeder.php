<?php

use App\Http\Controllers\Admin\RolesController;
use App\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            UserTableSeeder::class,
            RoleTableSeeder::class,
            Role_User_TableSeeder::class
        ]);
    }
}
