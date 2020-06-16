<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            KementerianTableSeeder::class,
            JabatanTableSeeder::class,
            PenggunaTableSeeder::class,
            BuatanTableSeeder::class,
            BahanBakarTableSeeder::class,
            KeretaCatTableSeeder::class,
            KeretaKategoriTableSeeder::class,
            KeretaTransmisiTableSeeder::class,
            KeretaWarnaTableSeeder::class,
            KeretaModelTableSeeder::class,
            KeretaVariasiTableSeeder::class,
            NegeriTableSeeder::class,
            PoskodTableSeeder::class,
            RolesTableSeeder::class,
            ModelRolesTableSeeder::class,
            TindakanTableSeeder::class,
            StatusPermohonanTableSeeder::class,
            KjbKenderaanTableSeeder::class,
            PegPerhubunganTableSeeder::class,
        ]);
    }
}
