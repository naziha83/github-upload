<?php

use Illuminate\Database\Seeder;

class PegPerhubunganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai_perhubungan')->insert([
            [
                'no_kp' => '851202139999',
                'nama' => 'Abdul Hadi Abdullah Halim Bin Salleh',
                'jawatan' => 'Penolong Setiausaha',
                'gred' => 'F41',
                'emel' => 'hadi.salleh@treasury.gov.my',
                'tel_pejabat' => '0388906568',
                'tel_bimbit' => '01112345678',
                'alamat1' => 'No 4 ',
                'alamat2' => 'Jalan P8/4',
                'alamat3' => 'Presint 8',
                'poskod_id' => '1624',
                'jabatan_id' => '6',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'no_kp' => '850125131237',
                'nama' => 'Mustarjo Junior',
                'jawatan' => 'Ketua Penolong Setiausaha',
                'gred' => 'F52',
                'emel' => 'mustarjo.junior@treasury.gov.my',
                'tel_pejabat' => '0388824728',
                'tel_bimbit' => '0168345678',
                'alamat1' => 'B-03A-01 Blok Cempedak',
                'alamat2' => 'Jalan P11B/2',
                'alamat3' => 'Presint 11',
                'poskod_id' => '1624',
                'jabatan_id' => '3',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'no_kp' => '670101131555',
                'nama' => 'Ahmad Albab Ahmad Nisfu',
                'jawatan' => 'Penolong Setiausaha Kanan',
                'gred' => 'N44',
                'emel' => 'ahmad.albab@treasury.gov.my',
                'tel_pejabat' => '0388821234',
                'tel_bimbit' => '0168341234',
                'alamat1' => 'No 3A, Fasa 2A, Taman Merbuk',
                'alamat2' => 'Jalan Harum Manis 2',
                'alamat3' => 'Presint 17',
                'poskod_id' => '1623',
                'jabatan_id' => '3',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
