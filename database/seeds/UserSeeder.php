<?php

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
        $admin = \App\User::create([
           'name' => 'GPP Admin',
            'email' => 'admin@gpp.com',
            'password' => bcrypt('password')
        ]);
        $role = \App\Role::where('name', 'Admin')->first();
        $admin->role()->attach($role, ['created_at' => now(), 'updated_at' => now()]);
    }
}
