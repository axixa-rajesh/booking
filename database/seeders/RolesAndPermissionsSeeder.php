<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'add']);
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'delete']);
        $role = Role::create(['name' => 'client']);
        $role->givePermissionTo('add');
        $role->givePermissionTo('view');
        $role = Role::create(['name' => 'service_provider']);
        $role->givePermissionTo('add');
        $role->givePermissionTo('view');
        $role->givePermissionTo('delete');
        $role->givePermissionTo('edit');
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
