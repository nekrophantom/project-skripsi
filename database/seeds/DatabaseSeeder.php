<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BobotSeeder;
use Database\Seeders\RulesSeeder;
use Database\Seeders\GejalaSeeder;
use Database\Seeders\PenyakitSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BobotSeeder::class,
            GejalaSeeder::class,
            PenyakitSeeder::class,
            RulesSeeder::class
        ]);
    }
}
