<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'super-admin',
            'email' => 'super-admin@emart.com',
            'password' => bcrypt('secret')
        ]);

        $super_admin->assignRole('super_admin');

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@emart.com',
            'password' => bcrypt('secret')
        ]);

        $staff->assignRole('staff');

        $kasir = User::create([
            'name' => 'kasir',
            'email' => 'kasir@emart.com',
            'password' => bcrypt('secret')
        ]);

        $kasir->assignRole('kasir');
    }
}
