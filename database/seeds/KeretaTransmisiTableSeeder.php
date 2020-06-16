<?php

use Illuminate\Database\Seeder;

class KeretaTransmisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta_transmisi')->insert([
            [
                'transmisi' => 'AT',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'transmisi' => 'MT',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
