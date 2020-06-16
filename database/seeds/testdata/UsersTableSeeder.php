<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Muhammad Adam Danish Bin Abdul Hadi Abdullah Halim',
                'email' => 'user1@example.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => "Dato' Pelulus Permohonan Jabatan",
                'email' => 'pelulus1@example.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Penyemak MOF',
                'email' => 'penyemak1@example.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Peraku MOF',
                'email' => 'peraku1@example.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Pelulus MOF',
                'email' => 'pelulusmof1@example.com',
                'password' => bcrypt('12345678'),
            ]
        ]);
    }
}
