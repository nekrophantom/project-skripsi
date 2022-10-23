<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Bobot_nilai::insert([
            [ 
                'keterangan' => 'Tidak Yakin',
                'bobot' => 0,
            ],
            [ 
                'keterangan' => 'Kurang Yakin',
                'bobot' => 0.2,
            ],
            [ 
                'keterangan' => 'Sedikit Yakin',
                'bobot' => 0.4,
            ],
            [ 
                'keterangan' => 'Cukup Yakin',
                'bobot' => 0.6,
            ],
            [ 
                'keterangan' => 'Yakin',
                'bobot' => 0.8,
            ],
            [ 
                'keterangan' => 'Sangat Yakin',
                'bobot' => 1,
            ],
            
        ]);
    }
}