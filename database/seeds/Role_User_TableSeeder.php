<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class Role_User_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GETTING PERMISSIONS
        $create_permission = Permission::where('name', 'create')->first();
        $edit_permission   = Permission::where('name', 'edit')->first();
        $delete_permission = Permission::where('name', 'delete')->first();
        // GETTING ROLES
        $admin_role = Role::where('name', 'admin')->first(); 
        $user_role  = Role::where('name', 'user')->first();
        // GETTING USERS
        $users = User::all();
        $roles = Role::all();
        // DOING RELATIONSHIPS
        foreach ($users as $user) {
            $user->roles()->attach($user_role);
        }

        foreach ($roles as $role) {
            if ($role->name == 'admin'){
                $role->permissions()->attach($delete_permission);
            }
            $role->permissions()->attach($edit_permission);
            $role->permissions()->attach($create_permission);
        }
        // MAKING ADMIN
        $admin = new User();
        $admin->fill([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
        ])->save();
        $admin->roles()->attach($admin_role);
    }
}
