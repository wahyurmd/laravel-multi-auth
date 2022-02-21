<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {

        $user = [
            [
                'name' => 'Wahyu Ramadhani',
                'email' => 'wahyu@gmail.com',
                'password' => Hash::make( 'wahyu' ),
                'role' => 'Admin',
            ],
            [
                'name' => 'Fadhilah Nur',
                'email' => 'dhil@gmail.com',
                'password' => Hash::make( 'wahyu' ),
                'role' => 'Pegawai',
            ],
        ];

        DB::table( 'users' )->insert( $user );
    }
}