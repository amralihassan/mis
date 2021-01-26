<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add role
        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);

        $permissions = [];
        $permissions[] = Permission::create(['name' => 'view-users', 'display_name' => 'View User', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'add-user', 'display_name' => 'Add User', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-user', 'display_name' => 'Edit User', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'delete-user', 'display_name' => 'Delete User', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-roles', 'display_name' => 'Update Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'add-role', 'display_name' => 'Update Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-role', 'display_name' => 'Update Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'delete-role', 'display_name' => 'Update Role', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-settings', 'display_name' => 'View Settings', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'update-settings', 'display_name' => 'Update Settings', 'description' => '']);
        $owner->attachPermissions($permissions);
    }
}
