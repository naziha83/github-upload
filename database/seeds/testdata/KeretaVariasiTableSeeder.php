<?php

use Illuminate\Database\Seeder;

class KeretaVariasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta_variasi')->insert([
            [
                'model_id' => '1',
                'cat_id' => '1',
                'warna_id' => '1',
                'transmisi_id' =>'1',
                'kategori_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model_id' => '1',
                'cat_id' => '1',
                'warna_id' => '3',
                'transmisi_id' =>'1',
                'kategori_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model_id' => '2',
                'cat_id' => '1',
                'warna_id' => '1',
                'transmisi_id' =>'1',
                'kategori_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model_id' => '3',
                'cat_id' => '1',
                'warna_id' => '3',
                'transmisi_id' =>'2',
                'kategori_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model_id' => '3',
                'cat_id' => '2',
                'warna_id' => '3',
                'transmisi_id' =>'1',
                'kategori_id' => '2',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
