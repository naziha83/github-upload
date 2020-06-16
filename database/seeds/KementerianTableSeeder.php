<?php

use Illuminate\Database\Seeder;

class KementerianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kementerian')->insert([
            [
                'nama' => 'Jabatan Perdana Menteri',
                'singkatan' => 'JPM',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Kewangan',
                'singkatan' => 'MOF',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Dalam Negeri',
                'singkatan' => 'MOHA',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pertahanan',
                'singkatan' => 'MINDEF',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Perumahan dan Kerajaan Tempatan',
                'singkatan' => 'KPKT',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pertanian dan Industri Asas Tani',
                'singkatan' => 'MOA',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pendidikan',
                'singkatan' => 'MOE',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pembangunan Wanita, Keluarga dan Masyarakat',
                'singkatan' => 'KPWKM',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pembangunan Luar Bandar',
                'singkatan' => 'KPLB',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Hal Ehwal Ekonomi',
                'singkatan' => 'MEA',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Kerja Raya',
                'singkatan' => 'KKR',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pengangkutan',
                'singkatan' => 'MOT',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Komunikasi dan Multimedia',
                'singkatan' => 'KKMM',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Sumber Manusia',
                'singkatan' => 'MOHR',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Kesihatan',
                'singkatan' => 'MOH',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Luar Negeri',
                'singkatan' => 'KLN',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Belia dan Sukan',
                'singkatan' => 'KBS',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pembangunan Usahawan',
                'singkatan' => 'MED',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Tenaga, Sains, Teknologi, Alam Sekitar dan Perubahan Iklim',
                'singkatan' => 'MESTECC',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Industri Utama',
                'singkatan' => 'MPI',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Perdagangan Antarabangsa dan Industri',
                'singkatan' => 'MITI',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna',
                'singkatan' => 'KPDNHEP',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Air, Tanah dan Sumber Asli',
                'singkatan' => 'KATS',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Wilayah',
                'singkatan' => 'KWP',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kementerian Pelancongan, Seni dan Budaya',
                'singkatan' => 'MOSTAC',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
