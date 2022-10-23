<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Penyakit::insert([
            [ 
                'kode_penyakit' => 'P1',
                'nama_penyakit' => 'Wasir 1',
                'penyebab'=> 'Wasir internal biasanya terbentuk di dalam rektum dan di atas garis pektinat, yaitu batas yang membagi dua per tiga saluran anus bagian atas dan bawah. Jenis ambeien ini biasanya ringan dan dapat sembuh dengan sendirinya.',
                'solusi' => 'Untuk menghindari terjadinya wasir, langkah yang dapat dilakukan adalah dengan mengonsumsi makanan kaya serat, banyak minum air putih, dan rutin berolahraga. Selain itu, hindari kebiasaan yang dapat memicu wasir, seperti duduk terlalu lama, menunda BAB, atau mengejan berlebihan.'
            ],
            [ 
                'kode_penyakit' => 'P2',
                'nama_penyakit' => 'Wasir 2',
                'penyebab'=> 'Wasir luar terbentuk di bawah permukaan kulit di sekitar anus. Awalnya, jenis ambeien ini tidak terlihat. Namun, semakin lama pembengkakan akan menyebabkan benjolan berwarna keunguan.',
                'solusi' => 'Untuk menghindari terjadinya wasir, langkah yang dapat dilakukan adalah dengan mengonsumsi makanan kaya serat, banyak minum air putih, dan rutin berolahraga. Selain itu, hindari kebiasaan yang dapat memicu wasir, seperti duduk terlalu lama, menunda BAB, atau mengejan berlebihan.'
            ],
            [ 
                'kode_penyakit' => 'P3',
                'nama_penyakit' => 'Wasir 3',
                'penyebab'=> 'Wasir internal yang semakin parah atau terjadi secara berulang bisa berkembang menjadi wasir prolapse. Benjolan pada wasir ini sudah keluar dari anus dan benjolannya tidak bisa dikembalikan dengan pendorongan oleh tangan.',
                'solusi' => 'Pada beberapa kasus, orang dengan kondisi ini perlu menjalani operasi untuk mengangkat ambeien supaya tidak menyebabkan komplikasi.'
            ],
            [ 
                'kode_penyakit' => 'P4',
                'nama_penyakit' => 'Wasir 4',
                'penyebab'=> 'Jenis wasir ini merupakan komplikasi dari wasir, ketika gumpalan darah terbentuk pada benjolan. Kondisi ini dapat terjadi pada wasir internal dan juga eksternal.',
                'solusi' => 'Untuk menghindari terjadinya wasir, langkah yang dapat dilakukan adalah dengan mengonsumsi makanan kaya serat, banyak minum air putih, dan rutin berolahraga. Selain itu, hindari kebiasaan yang dapat memicu wasir, seperti duduk terlalu lama, menunda BAB, atau mengejan berlebihan.'
            ],
            
        ]);
    }
}