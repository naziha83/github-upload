<?php

use Illuminate\Database\Seeder;

class KeretaModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kereta_model')->insert([
            [
                'model' => 'Persona 1.6 CVT Premium',
                'buatan_id' => '1',
                'fuel_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model' => 'Saga 1.3L CVT Premium',
                'buatan_id' => '1',
                'fuel_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'model' => 'Persona 1.6 CVT Premium (MC)',
                'buatan_id' => '1',
                'fuel_id' => '1',
                'status' => '1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
