<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori')->delete();
        
        \DB::table('kategori')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_kategori' => 'Hijab',
                'created_at' => '2021-12-13 09:50:13',
                'updated_at' => '2021-12-13 10:13:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama_kategori' => 'Sepatu',
                'created_at' => '2021-12-13 09:51:21',
                'updated_at' => '2021-12-13 10:02:01',
                'deleted_at' => '2021-12-13 10:02:01',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_kategori' => 'Pashmina',
                'created_at' => '2021-12-13 10:13:01',
                'updated_at' => '2021-12-13 10:13:38',
                'deleted_at' => '2021-12-13 10:13:38',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_kategori' => 'Hijab Instan',
                'created_at' => '2021-12-13 10:13:16',
                'updated_at' => '2021-12-13 10:13:41',
                'deleted_at' => '2021-12-13 10:13:41',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_kategori' => 'Pakaian Pria',
                'created_at' => '2021-12-13 10:13:25',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nama_kategori' => 'Pakaian Wanita',
                'created_at' => '2021-12-13 10:13:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nama_kategori' => 'Aksesoris',
                'created_at' => '2021-12-13 10:14:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
