<?php

use Illuminate\Database\Seeder;

class TindakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tindakan')->insert([
            [
                'tindakan' => 'A',
                'catatan' => 'Agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'tindakan' => 'B',
                'catatan' => 'MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'tindakan' => 'C',
                'catatan' => 'Konsesi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'tindakan' => 'D',
                'catatan' => 'JKDM',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        ]);
    }
}
