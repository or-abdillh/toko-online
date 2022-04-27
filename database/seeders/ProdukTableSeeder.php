<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produk')->delete();
        
        \DB::table('produk')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_kategori' => 1,
                'gambar' => 'produk_1650539608.jpeg',
                'nama_produk' => 'Pasmina Murah',
                'deskripsi' => 'Wajib open PO H-5',
                'harga_jual' => 125000,
                'created_at' => '2022-04-21 11:13:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_kategori' => 5,
                'gambar' => 'produk_1650539665.jpeg',
                'nama_produk' => 'Jubah Spiderman',
                'deskripsi' => 'Hanya melayani PO',
                'harga_jual' => 200000,
                'created_at' => '2022-04-21 11:14:25',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}