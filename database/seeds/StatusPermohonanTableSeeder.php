<?php

use Illuminate\Database\Seeder;

class StatusPermohonanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_permohonan')->insert([
            [
                'status' => 'A1',
                'keterangan' => 'Draf',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'A2',
                'keterangan' => 'Mohon kelulusan Ketua Jabatan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'A3',
                'keterangan' => 'Tidak lengkap (Ketua Jabatan)',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'A4',
                'keterangan' => 'Tidak lengkap - Untuk tindakan Agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'A5',
                'keterangan' => 'Dibatalkan oleh Agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'A6',
                'keterangan' => 'Penghantaran kenderaan ke Agensi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B1',
                'keterangan' => 'Dihantar untuk Semakan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B2',
                'keterangan' => 'Lengkap - Untuk Perakuan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B3',
                'keterangan' => 'Diperaku - Untuk Kelulusan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B4',
                'keterangan' => 'Tidak diperaku - Untuk semakan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B5',
                'keterangan' => 'Dikemaskini untuk semakan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B6',
                'keterangan' => 'Tidak lulus - Untuk Tindakan Peraku MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B7',
                'keterangan' => 'Tidak lengkap - Untuk tindakan MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'B8',
                'keterangan' => 'Permohonan ditolak oleh MOF',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'C1',
                'keterangan' => 'Dilulus - Untuk tindakan Konsesi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'C2',
                'keterangan' => 'Pengecualian cukai dilulus',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'C3',
                'keterangan' => 'Pengecualian cukai tidak dilulus',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'D1',
                'keterangan' => 'Mohon pengecualian cukai JKDM',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'status' => 'F',
                'keterangan' => 'Permohonan telah selesai',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ]);
    }
}
