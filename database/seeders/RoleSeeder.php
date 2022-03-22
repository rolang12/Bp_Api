<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);
        $roleMod = Role::create(['name' => 'mod']);

        // Permissions
        Permission::create(['name' => 'users.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'users.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'users.destroy'])->assignRole($roleAdmin);
        Permission::create(['name' => 'users.update'])->assignRole($roleAdmin);

        Permission::create(['name' => 'crud.articles.index'])->syncRoles([$roleAdmin, $roleMod]);
        Permission::create(['name' => 'crud.articles.show'])->syncRoles([$roleAdmin, $roleMod]);
        Permission::create(['name' => 'crud.articles.destroy'])->syncRoles([$roleAdmin, $roleMod]);

        Permission::create(['name' => 'comments.destroy'])->syncRoles([$roleAdmin, $roleMod]);


    }
}
