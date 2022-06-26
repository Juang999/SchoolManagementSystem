<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'super_admin',
            'guard_name' => 'web-api'
        ]);

        Role::create([
            'name' => 'staff',
            'guard_name' => 'web-api'
        ]);

        Role::create([
            'name' => 'kasir',
            'guard_name' => 'web-api'
        ]);
    }
}
