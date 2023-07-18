<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);



        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'user.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'user.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$role1,$role2]);

    }
}
