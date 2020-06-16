<?php

use Illuminate\Database\Seeder;

class KjbKenderaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kjb_kenderaan')->insert([
            [
                'kenderaan' => 'Lain-lain',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'Ambulan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'Bas',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'Kereta',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'MPV',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'Pacuan Empat Roda',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'kenderaan' => 'Van',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
