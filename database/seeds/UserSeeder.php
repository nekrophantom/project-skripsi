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
                'email' => '',
                'username'=> 'admin',
                'password' => bcrypt('12345678'), // password
                'role' => 'admin'
            ],
            [ 
                'nama' => 'test',
                'email' => 'test@gmail.com',
                'username'=> 'test',
                'password' => bcrypt('12345678'), // password
                'role' => 'user'
            ]
        ]);

       
    }
}