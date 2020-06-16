<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
            [
                'nama' => 'Agensi Angkasa Negara',
                'singkatan' => 'ANGKASA',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Agensi Nuklear Malaysia',
                'singkatan' => 'NUKLEAR MALAYSIA',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Agensi Remote Sensing Malaysia',
                'singkatan' => 'ARSM',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Jabatan Alam Sekitar',
                'singkatan' => 'JAS',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Jabatan Kimia Malaysia',
                'singkatan' => 'JKM',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Jabatan Meteorologi Malaysia',
                'singkatan' => 'MMD',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Lembaga Perlesenan Tenaga Atom',
                'singkatan' => 'LPTA',
                'kementerian_id' => '19',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],

        ]);
    }
}
