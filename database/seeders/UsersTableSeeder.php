<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Maulida Aziza',
                'email' => 'admin@gmail.com',
                'phone' => '6281298669897',
                'address' => 'Handil Bakti RT06 RW02',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4VIHiHTZ9tK.C1IAqGrt5.FiZLzwoT0UXUazSYtXgssZk1EDrJ4G2',
                'remember_token' => NULL,
                'created_at' => '2021-12-13 08:13:32',
                'updated_at' => '2022-04-21 11:09:01',
            ),
        ));
        
        
    }
}