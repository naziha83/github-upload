<?php

use Illuminate\Database\Seeder;

class BahanBakarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahan_bakar')->insert([
            [
                'fuel' => 'Petrol',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'fuel' => 'Diesel',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
