<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class super_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('super_admins')->insert([
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin123!'),
            'no_hp' => '089678062258',
            'nama_depan' => 'Aiman',
            'nama_belakang' => 'Albantani',
            'last_seen' => now(),
            'status_active' => 1,
        ]);

        DB::table('auth_users')->insert([
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin123!'),
            'id_role' => 1,
            'id_client' => 0,
            'last_seen' => now(),
            'status_active' => 1,
        ]);
    }
}
