<?php

namespace Database\Seeders;

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
        \App\Models\User::insert([
            [ 
                'nama' => 'Administrator',
                'email' => 'superadmin@gmail.com',
                'username'=> 'admin',
                'password' => bcrypt('12345678'), // password
                'role' => 'admin'
            ],
            [ 
                'nama' => 'reynold',
                'email' => 'reynold@gmail.com',
                'username'=> 'reynold',
                'password' => bcrypt('12345678'), // password
                'role' => 'user'
            ]
        ]);

       
    }
}
