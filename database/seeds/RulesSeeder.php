<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rules::insert([
            [ 
                "gejala_id" => 1,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.8'
            ],
            [ 
                "gejala_id" => 2,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 3,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 4,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 5,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 6,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 7,
                'penyakit_id'=> 1,
                'nilai_mb' => '0.8'
            ],
            [ 
                "gejala_id" => 1,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 2,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 3,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 4,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 5,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 6,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 7,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 8,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 9,
                'penyakit_id'=> 2,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 1,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 2,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 3,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 4,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 5,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 6,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 7,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 8,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 10,
                'penyakit_id'=> 3,
                'nilai_mb' => '0.8'
            ],
            [ 
                "gejala_id" => 1,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 2,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 3,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 4,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 5,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.6'
            ],
            [ 
                "gejala_id" => 6,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.7'
            ],
            [ 
                "gejala_id" => 7,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.5'
            ],
            [ 
                "gejala_id" => 8,
                'penyakit_id'=> 4,
                'nilai_mb' => '0.8'
            ],
        ]);
    }
}