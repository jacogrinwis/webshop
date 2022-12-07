<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign created permissions
        $role = Role::create(['name' => 'moderator']);
        $role->givePermissionTo([
            'product_publish',
            'product_unpublish',
        ]);

        $role = Role::create(['name' => 'publisher']);
        $role->givePermissionTo([
            'product_publish',
            'product_unpublish',
        ]);

        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo([
            'product_create',
            'product_publish',
            'product_unpublish',
        ]);

        $role = Role::create(['name' => 'editor']);
        $role->givePermissionTo([
            'product_edit',
            'product_delete',
            'product_publish',
            'product_unpublish',
        ]);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([
            'product_create',
            'product_edit',
            'product_delete',
            'product_publish',
            'product_unpublish',
        ]);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
