<?php

use Illuminate\Database\Seeder;

class KeretaKategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta_kategori')->insert([
            [
                'kategori' => 'KJ',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kategori' => 'KRJ',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kategori' => 'OTP',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
