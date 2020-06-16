<?php

use Illuminate\Database\Seeder;

class NegeriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negeri')->insert([
            [
                'nama' => 'Johor',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kedah',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Kelantan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Melaka',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Negeri Sembilan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Pahang',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Pulau Pinang',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Perak',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Perlis',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Selangor',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Terengganu',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Sabah',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Sarawak',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Wilayah Persekutuan Kuala Lumpur ',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Wilayah Persekutuan Labuan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'nama' => 'Wilayah Persekutuan Putrajaya',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        ]);
    }
}
