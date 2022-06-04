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
        $administrator = Role::create(['name' => 'administrator']);
        $manager = Role::create(['name' => 'manager']);

        Permission::create(['name' => 'user.index'])->syncRoles([$administrator, $manager]);
        Permission::create(['name' => 'user.show'])->syncRoles([$administrator, $manager]);
        Permission::create(['name' => 'user.create'])->syncRoles([$administrator]);
        Permission::create(['name' => 'user.store'])->syncRoles([$administrator]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$administrator]);
        Permission::create(['name' => 'user.update'])->syncRoles([$administrator]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$administrator]);
    }
}
