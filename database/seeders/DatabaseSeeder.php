<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'role_name' => 'userr',
        ]);

        Role::create([
            'role_name' => 'pegawai',
        ]);
        Role::create([
            'role_name' => 'superadmin',
        ]);

       
        
        User::factory(5)->create();

    }
}