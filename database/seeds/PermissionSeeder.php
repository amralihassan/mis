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

        $permissions[] = Permission::create(['name' => 'view-roles', 'display_name' => 'View Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'add-role', 'display_name' => 'Add Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-role', 'display_name' => 'Edit Role', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'delete-role', 'display_name' => 'Delete Role', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-settings', 'display_name' => 'View Settings', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'update-settings', 'display_name' => 'Update Settings', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-company', 'display_name' => 'View Company', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-company', 'display_name' => 'Update Company', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-carousels', 'display_name' => 'View Slideshow', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'add-carousel', 'display_name' => 'Add Slideshow', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-carousel', 'display_name' => 'Edit Slideshow', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'delete-carousel', 'display_name' => 'Delete Slideshow', 'description' => '']);

        $permissions[] = Permission::create(['name' => 'view-solutions', 'display_name' => 'View Solution', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'add-solution', 'display_name' => 'Add Solution', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'edit-solution', 'display_name' => 'Edit Solution', 'description' => '']);
        $permissions[] = Permission::create(['name' => 'delete-solution', 'display_name' => 'Delete Solution', 'description' => '']);

        $owner->attachPermissions($permissions);
    }
}
