<?php

use Illuminate\Database\Seeder;

class KeretaWarnaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta_warna')->insert([
            [
                'warna' => 'Silver',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'warna' => 'Black',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'warna' => 'Graphite Grey',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
