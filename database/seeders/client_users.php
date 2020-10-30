<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class client_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('client_users')->insert([
            'id_role' => 2,
            'name_company' => 'Rs. Cipto',
            'username' => 'Jihan09',
            'email' => 'jihan@gmail.com',
            'password' => Hash::make('jihan05091995'),
            'no_hp' => '089678062258',
            'nama_depan' => 'Jihan',
            'nama_belakang' => 'Ardillah',
            'status_auth' => 1,
            'status_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
