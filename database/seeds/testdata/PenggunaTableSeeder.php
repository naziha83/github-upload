<?php

use Illuminate\Database\Seeder;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengguna_sistem')->insert([
            [
                'user_id' => '1',
                'no_kp' => '851224131233',
                'jawatan' => 'Penolong Setiausaha',
                'gred' => 'F41',
                'tel_pejabat' => '0388906568',
                'tel_bimbit' => '0168830123',
                'jabatan_id' => '3',
                'emel_alternatif' => 'hadi.salleh@example.com',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'user_id' => '2',
                'no_kp' => '701101095431',
                'jawatan' => 'Setiausaha Bahagian',
                'gred' => 'JUSA C',
                'tel_pejabat' => '0388824728',
                'tel_bimbit' => '0127654321',
                'jabatan_id' => '3',
                'emel_alternatif' => '',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'user_id' => '3',
                'no_kp' => '651002055655',
                'jawatan' => 'Pegawai Tadbir',
                'gred' => 'N41',
                'tel_pejabat' => '0388824455',
                'tel_bimbit' => '0149856412',
                'jabatan_id' => '3',
                'emel_alternatif' => '',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'user_id' => '4',
                'no_kp' => '781128025169',
                'jawatan' => 'Ketua Unit',
                'gred' => 'M44',
                'tel_pejabat' => '0388651002',
                'tel_bimbit' => '0178967425',
                'jabatan_id' => '3',
                'emel_alternatif' => '',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'user_id' => '5',
                'no_kp' => '600101117787',
                'jawatan' => 'Ketua Sekysen',
                'gred' => 'M48',
                'tel_pejabat' => '0388909090',
                'tel_bimbit' => '0129856478',
                'jabatan_id' => '3',
                'emel_alternatif' => '',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
