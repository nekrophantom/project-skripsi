<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Gejala::insert([
            [ 
                'kode_gejala' => 'G1',
                'nama_gejala' => 'Sulit BAB',
                'nilai'=> 0.8,    
            ],
            [ 
                'kode_gejala' => 'G2',
                'nama_gejala' => 'Gatal pada anus',
                'nilai'=> 0.5,    
            ],
            [ 
                'kode_gejala' => 'G3',
                'nama_gejala' => 'Rasa panas pada anus setelah BAB',
                'nilai'=> 0.5,    
            ],
            [ 
                'kode_gejala' => 'G4',
                'nama_gejala' => 'Rasa mengganjal setelah BAB',
                'nilai'=> 0.7,    
            ],
            [ 
                'kode_gejala' => 'G5',
                'nama_gejala' => 'Bercak darah pada feses',
                'nilai'=> 0.7,    
            ],
            [ 
                'kode_gejala' => 'G6',
                'nama_gejala' => 'Nyeri saat BAB',
                'nilai'=> 0.7,    
            ],
            [ 
                'kode_gejala' => 'G7',
                'nama_gejala' => 'Lendir pada anus',
                'nilai'=> 0.8,    
            ],
            [ 
                'kode_gejala' => 'G8',
                'nama_gejala' => 'Benjolan pada anus',
                'nilai'=> 0.6,    
            ],
            [ 
                'kode_gejala' => 'G9',
                'nama_gejala' => 'Benjolan dapat masuk kembali ke anus dengan spontan / tanpa bantuan jari',
                'nilai'=> 0.5,    
            ],
            [ 
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Benjolan dapat masuk dengan bantuan dorongan jari',
                'nilai'=> 0.7,    
            ],
            
        ]);
    }
}