<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin' => 'GPP administrator', 'User' => 'Staff of GPP web', 'Client' => 'Client of GPP web'];

        foreach ($roles as $key => $role){
            \App\Role::create([
                'name' => $key,
                'description' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
