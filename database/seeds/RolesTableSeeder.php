<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Pendaftar Agensi',
                'guard_name' => 'web',
                'description' => 'Pendaftar/Pemohon di agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pelulus Agensi',
                'guard_name' => 'web',
                'description' => 'Pelulus di agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pengesah Agensi',
                'guard_name' => 'web',
                'description' => 'Pengesah di agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pemohon OTP',
                'guard_name' => 'web',
                'description' => 'Pegawai pemohon OTP(sendiri) di agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Penyemak MOF',
                'guard_name' => 'web',
                'description' => 'Penyemak di MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Peraku MOF',
                'guard_name' => 'web',
                'description' => 'Peraku di MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pelulus MOF',
                'guard_name' => 'web',
                'description' => 'Pelulus di MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pendaftar Konsesi',
                'guard_name' => 'web',
                'description' => 'Pendaftar Konsesi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'Pelulus JKDM',
                'guard_name' => 'web',
                'description' => 'Pelulus Pengecualian Cukai di JKDM',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        ]);
    }
}
