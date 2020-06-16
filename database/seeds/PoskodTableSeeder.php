<?php

use Illuminate\Database\Seeder;

class PoskodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('poskod')->delete();

        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 1,
                'poskod' => '01000',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:48',
                'updated_at' => '2019-10-14 08:40:48',
            ),
            1 =>
            array (
                'id' => 2,
                'poskod' => '01007',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:48',
                'updated_at' => '2019-10-14 08:40:48',
            ),
            2 =>
            array (
                'id' => 3,
                'poskod' => '01009',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:48',
                'updated_at' => '2019-10-14 08:40:48',
            ),
            3 =>
            array (
                'id' => 4,
                'poskod' => '01500',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            4 =>
            array (
                'id' => 5,
                'poskod' => '01502',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            5 =>
            array (
                'id' => 6,
                'poskod' => '01503',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            6 =>
            array (
                'id' => 7,
                'poskod' => '01504',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            7 =>
            array (
                'id' => 8,
                'poskod' => '01505',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            8 =>
            array (
                'id' => 9,
                'poskod' => '01506',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            9 =>
            array (
                'id' => 10,
                'poskod' => '01508',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            10 =>
            array (
                'id' => 11,
                'poskod' => '01512',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            11 =>
            array (
                'id' => 12,
                'poskod' => '01514',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            12 =>
            array (
                'id' => 13,
                'poskod' => '01516',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            13 =>
            array (
                'id' => 14,
                'poskod' => '01517',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            14 =>
            array (
                'id' => 15,
                'poskod' => '01518',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            15 =>
            array (
                'id' => 16,
                'poskod' => '01524',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            16 =>
            array (
                'id' => 17,
                'poskod' => '01529',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            17 =>
            array (
                'id' => 18,
                'poskod' => '01532',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            18 =>
            array (
                'id' => 19,
                'poskod' => '01538',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            19 =>
            array (
                'id' => 20,
                'poskod' => '01540',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            20 =>
            array (
                'id' => 21,
                'poskod' => '01546',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            21 =>
            array (
                'id' => 22,
                'poskod' => '01550',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:49',
                'updated_at' => '2019-10-14 08:40:49',
            ),
            22 =>
            array (
                'id' => 23,
                'poskod' => '01551',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            23 =>
            array (
                'id' => 24,
                'poskod' => '01556',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            24 =>
            array (
                'id' => 25,
                'poskod' => '01560',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            25 =>
            array (
                'id' => 26,
                'poskod' => '01564',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            26 =>
            array (
                'id' => 27,
                'poskod' => '01570',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            27 =>
            array (
                'id' => 28,
                'poskod' => '01572',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            28 =>
            array (
                'id' => 29,
                'poskod' => '01576',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            29 =>
            array (
                'id' => 30,
                'poskod' => '01578',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            30 =>
            array (
                'id' => 31,
                'poskod' => '01582',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            31 =>
            array (
                'id' => 32,
                'poskod' => '01586',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            32 =>
            array (
                'id' => 33,
                'poskod' => '01590',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            33 =>
            array (
                'id' => 34,
                'poskod' => '01592',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            34 =>
            array (
                'id' => 35,
                'poskod' => '01594',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            35 =>
            array (
                'id' => 36,
                'poskod' => '01596',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            36 =>
            array (
                'id' => 37,
                'poskod' => '01598',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            37 =>
            array (
                'id' => 38,
                'poskod' => '01600',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            38 =>
            array (
                'id' => 39,
                'poskod' => '01604',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            39 =>
            array (
                'id' => 40,
                'poskod' => '01606',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            40 =>
            array (
                'id' => 41,
                'poskod' => '01608',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            41 =>
            array (
                'id' => 42,
                'poskod' => '01609',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:50',
                'updated_at' => '2019-10-14 08:40:50',
            ),
            42 =>
            array (
                'id' => 43,
                'poskod' => '01610',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            43 =>
            array (
                'id' => 44,
                'poskod' => '01612',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            44 =>
            array (
                'id' => 45,
                'poskod' => '01614',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            45 =>
            array (
                'id' => 46,
                'poskod' => '01620',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            46 =>
            array (
                'id' => 47,
                'poskod' => '01622',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            47 =>
            array (
                'id' => 48,
                'poskod' => '01626',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            48 =>
            array (
                'id' => 49,
                'poskod' => '01628',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            49 =>
            array (
                'id' => 50,
                'poskod' => '01630',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            50 =>
            array (
                'id' => 51,
                'poskod' => '01632',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            51 =>
            array (
                'id' => 52,
                'poskod' => '01634',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            52 =>
            array (
                'id' => 53,
                'poskod' => '01644',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            53 =>
            array (
                'id' => 54,
                'poskod' => '01646',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            54 =>
            array (
                'id' => 55,
                'poskod' => '01648',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            55 =>
            array (
                'id' => 56,
                'poskod' => '01660',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            56 =>
            array (
                'id' => 57,
                'poskod' => '01664',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            57 =>
            array (
                'id' => 58,
                'poskod' => '01670',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            58 =>
            array (
                'id' => 59,
                'poskod' => '01672',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            59 =>
            array (
                'id' => 60,
                'poskod' => '01673',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            60 =>
            array (
                'id' => 61,
                'poskod' => '01674',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:51',
                'updated_at' => '2019-10-14 08:40:51',
            ),
            61 =>
            array (
                'id' => 62,
                'poskod' => '01676',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            62 =>
            array (
                'id' => 63,
                'poskod' => '01680',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            63 =>
            array (
                'id' => 64,
                'poskod' => '01694',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            64 =>
            array (
                'id' => 65,
                'poskod' => '02000',
                'bandar' => 'Kuala Perlis',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            65 =>
            array (
                'id' => 66,
                'poskod' => '02100',
                'bandar' => 'Padang Besar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            66 =>
            array (
                'id' => 67,
                'poskod' => '02200',
                'bandar' => 'Kaki Bukit',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            67 =>
            array (
                'id' => 68,
                'poskod' => '02400',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            68 =>
            array (
                'id' => 69,
                'poskod' => '02450',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            69 =>
            array (
                'id' => 70,
                'poskod' => '02500',
                'bandar' => 'Kangar',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            70 =>
            array (
                'id' => 71,
                'poskod' => '02600',
                'bandar' => 'Arau',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            71 =>
            array (
                'id' => 72,
                'poskod' => '02607',
                'bandar' => 'Arau',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            72 =>
            array (
                'id' => 73,
                'poskod' => '02609',
                'bandar' => 'Arau',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            73 =>
            array (
                'id' => 74,
                'poskod' => '02700',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            74 =>
            array (
                'id' => 75,
                'poskod' => '02707',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            75 =>
            array (
                'id' => 76,
                'poskod' => '02709',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            76 =>
            array (
                'id' => 77,
                'poskod' => '02800',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 9,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            77 =>
            array (
                'id' => 78,
                'poskod' => '05000',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            78 =>
            array (
                'id' => 79,
                'poskod' => '05050',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            79 =>
            array (
                'id' => 80,
                'poskod' => '05100',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            80 =>
            array (
                'id' => 81,
                'poskod' => '05150',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            81 =>
            array (
                'id' => 82,
                'poskod' => '05200',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            82 =>
            array (
                'id' => 83,
                'poskod' => '05250',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            83 =>
            array (
                'id' => 84,
                'poskod' => '05300',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            84 =>
            array (
                'id' => 85,
                'poskod' => '05350',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            85 =>
            array (
                'id' => 86,
                'poskod' => '05400',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            86 =>
            array (
                'id' => 87,
                'poskod' => '05460',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            87 =>
            array (
                'id' => 88,
                'poskod' => '05500',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:52',
                'updated_at' => '2019-10-14 08:40:52',
            ),
            88 =>
            array (
                'id' => 89,
                'poskod' => '05502',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            89 =>
            array (
                'id' => 90,
                'poskod' => '05503',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            90 =>
            array (
                'id' => 91,
                'poskod' => '05504',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            91 =>
            array (
                'id' => 92,
                'poskod' => '05505',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            92 =>
            array (
                'id' => 93,
                'poskod' => '05506',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            93 =>
            array (
                'id' => 94,
                'poskod' => '05508',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            94 =>
            array (
                'id' => 95,
                'poskod' => '05512',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            95 =>
            array (
                'id' => 96,
                'poskod' => '05514',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            96 =>
            array (
                'id' => 97,
                'poskod' => '05516',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            97 =>
            array (
                'id' => 98,
                'poskod' => '05517',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            98 =>
            array (
                'id' => 99,
                'poskod' => '05518',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            99 =>
            array (
                'id' => 100,
                'poskod' => '05520',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            100 =>
            array (
                'id' => 101,
                'poskod' => '05532',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            101 =>
            array (
                'id' => 102,
                'poskod' => '05534',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            102 =>
            array (
                'id' => 103,
                'poskod' => '05536',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            103 =>
            array (
                'id' => 104,
                'poskod' => '05538',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            104 =>
            array (
                'id' => 105,
                'poskod' => '05550',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            105 =>
            array (
                'id' => 106,
                'poskod' => '05551',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            106 =>
            array (
                'id' => 107,
                'poskod' => '05552',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            107 =>
            array (
                'id' => 108,
                'poskod' => '05556',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            108 =>
            array (
                'id' => 109,
                'poskod' => '05558',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            109 =>
            array (
                'id' => 110,
                'poskod' => '05560',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            110 =>
            array (
                'id' => 111,
                'poskod' => '05564',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            111 =>
            array (
                'id' => 112,
                'poskod' => '05576',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            112 =>
            array (
                'id' => 113,
                'poskod' => '05578',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:53',
                'updated_at' => '2019-10-14 08:40:53',
            ),
            113 =>
            array (
                'id' => 114,
                'poskod' => '05580',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            114 =>
            array (
                'id' => 115,
                'poskod' => '05582',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            115 =>
            array (
                'id' => 116,
                'poskod' => '05586',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            116 =>
            array (
                'id' => 117,
                'poskod' => '05590',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            117 =>
            array (
                'id' => 118,
                'poskod' => '05592',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            118 =>
            array (
                'id' => 119,
                'poskod' => '05594',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            119 =>
            array (
                'id' => 120,
                'poskod' => '05600',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            120 =>
            array (
                'id' => 121,
                'poskod' => '05604',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            121 =>
            array (
                'id' => 122,
                'poskod' => '05610',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            122 =>
            array (
                'id' => 123,
                'poskod' => '05612',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            123 =>
            array (
                'id' => 124,
                'poskod' => '05614',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            124 =>
            array (
                'id' => 125,
                'poskod' => '05620',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            125 =>
            array (
                'id' => 126,
                'poskod' => '05621',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            126 =>
            array (
                'id' => 127,
                'poskod' => '05622',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            127 =>
            array (
                'id' => 128,
                'poskod' => '05626',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            128 =>
            array (
                'id' => 129,
                'poskod' => '05628',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            129 =>
            array (
                'id' => 130,
                'poskod' => '05630',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            130 =>
            array (
                'id' => 131,
                'poskod' => '05632',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            131 =>
            array (
                'id' => 132,
                'poskod' => '05644',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            132 =>
            array (
                'id' => 133,
                'poskod' => '05660',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            133 =>
            array (
                'id' => 134,
                'poskod' => '05661',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            134 =>
            array (
                'id' => 135,
                'poskod' => '05664',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            135 =>
            array (
                'id' => 136,
                'poskod' => '05670',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            136 =>
            array (
                'id' => 137,
                'poskod' => '05672',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:54',
                'updated_at' => '2019-10-14 08:40:54',
            ),
            137 =>
            array (
                'id' => 138,
                'poskod' => '05673',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            138 =>
            array (
                'id' => 139,
                'poskod' => '05674',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            139 =>
            array (
                'id' => 140,
                'poskod' => '05675',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            140 =>
            array (
                'id' => 141,
                'poskod' => '05676',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            141 =>
            array (
                'id' => 142,
                'poskod' => '05680',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            142 =>
            array (
                'id' => 143,
                'poskod' => '05690',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            143 =>
            array (
                'id' => 144,
                'poskod' => '05696',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            144 =>
            array (
                'id' => 145,
                'poskod' => '05700',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            145 =>
            array (
                'id' => 146,
                'poskod' => '05710',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            146 =>
            array (
                'id' => 147,
                'poskod' => '05720',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            147 =>
            array (
                'id' => 148,
                'poskod' => '05990',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            148 =>
            array (
                'id' => 149,
                'poskod' => '06000',
                'bandar' => 'Jitra',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            149 =>
            array (
                'id' => 150,
                'poskod' => '06007',
                'bandar' => 'Jitra',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            150 =>
            array (
                'id' => 151,
                'poskod' => '06009',
                'bandar' => 'Jitra',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            151 =>
            array (
                'id' => 152,
                'poskod' => '06010',
                'bandar' => 'Changloon',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            152 =>
            array (
                'id' => 153,
                'poskod' => '06010',
                'bandar' => 'Universiti Utara Malaysia',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            153 =>
            array (
                'id' => 154,
                'poskod' => '06050',
                'bandar' => 'Bukit Kayu Hitam',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            154 =>
            array (
                'id' => 155,
                'poskod' => '06100',
                'bandar' => 'Kodiang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            155 =>
            array (
                'id' => 156,
                'poskod' => '06150',
                'bandar' => 'Ayer Hitam',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            156 =>
            array (
                'id' => 157,
                'poskod' => '06200',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            157 =>
            array (
                'id' => 158,
                'poskod' => '06207',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            158 =>
            array (
                'id' => 159,
                'poskod' => '06209',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            159 =>
            array (
                'id' => 160,
                'poskod' => '06250',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            160 =>
            array (
                'id' => 161,
                'poskod' => '06300',
                'bandar' => 'Kuala Nerang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            161 =>
            array (
                'id' => 162,
                'poskod' => '06350',
                'bandar' => 'Pokok Sena',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            162 =>
            array (
                'id' => 163,
                'poskod' => '06400',
                'bandar' => 'Pokok Sena',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            163 =>
            array (
                'id' => 164,
                'poskod' => '06500',
                'bandar' => 'Langgar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            164 =>
            array (
                'id' => 165,
                'poskod' => '06507',
                'bandar' => 'Langgar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:55',
                'updated_at' => '2019-10-14 08:40:55',
            ),
            165 =>
            array (
                'id' => 166,
                'poskod' => '06509',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            166 =>
            array (
                'id' => 167,
                'poskod' => '06550',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            167 =>
            array (
                'id' => 168,
                'poskod' => '06570',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            168 =>
            array (
                'id' => 169,
                'poskod' => '06600',
                'bandar' => 'Kuala Kedah',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            169 =>
            array (
                'id' => 170,
                'poskod' => '06650',
                'bandar' => 'Simpang Empat',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            170 =>
            array (
                'id' => 171,
                'poskod' => '06660',
                'bandar' => 'Alor Setar',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            171 =>
            array (
                'id' => 172,
                'poskod' => '06700',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            172 =>
            array (
                'id' => 173,
                'poskod' => '06707',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            173 =>
            array (
                'id' => 174,
                'poskod' => '06709',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            174 =>
            array (
                'id' => 175,
                'poskod' => '06710',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            175 =>
            array (
                'id' => 176,
                'poskod' => '06720',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            176 =>
            array (
                'id' => 177,
                'poskod' => '06750',
                'bandar' => 'Pendang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            177 =>
            array (
                'id' => 178,
                'poskod' => '06800',
                'bandar' => 'Kota Sarang Semut',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            178 =>
            array (
                'id' => 179,
                'poskod' => '06900',
                'bandar' => 'Yan',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            179 =>
            array (
                'id' => 180,
                'poskod' => '06910',
                'bandar' => 'Yan',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            180 =>
            array (
                'id' => 181,
                'poskod' => '07000',
                'bandar' => 'Langkawi',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            181 =>
            array (
                'id' => 182,
                'poskod' => '07007',
                'bandar' => 'Langkawi',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            182 =>
            array (
                'id' => 183,
                'poskod' => '07009',
                'bandar' => 'Langkawi',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            183 =>
            array (
                'id' => 184,
                'poskod' => '08000',
                'bandar' => 'Sungai Petani',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            184 =>
            array (
                'id' => 185,
                'poskod' => '08007',
                'bandar' => 'Sungai Petani',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:56',
                'updated_at' => '2019-10-14 08:40:56',
            ),
            185 =>
            array (
                'id' => 186,
                'poskod' => '08009',
                'bandar' => 'Sungai Petani',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            186 =>
            array (
                'id' => 187,
                'poskod' => '08010',
                'bandar' => 'Sungai Petani',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            187 =>
            array (
                'id' => 188,
                'poskod' => '08100',
                'bandar' => 'Bedong',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            188 =>
            array (
                'id' => 189,
                'poskod' => '08110',
                'bandar' => 'Bedong',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            189 =>
            array (
                'id' => 190,
                'poskod' => '08200',
                'bandar' => 'Sik',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            190 =>
            array (
                'id' => 191,
                'poskod' => '08210',
                'bandar' => 'Sik',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            191 =>
            array (
                'id' => 192,
                'poskod' => '08300',
                'bandar' => 'Gurun',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            192 =>
            array (
                'id' => 193,
                'poskod' => '08320',
                'bandar' => 'Jeniang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            193 =>
            array (
                'id' => 194,
                'poskod' => '08330',
                'bandar' => 'Gurun',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            194 =>
            array (
                'id' => 195,
                'poskod' => '08340',
                'bandar' => 'Sik',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            195 =>
            array (
                'id' => 196,
                'poskod' => '08400',
                'bandar' => 'Merbok',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            196 =>
            array (
                'id' => 197,
                'poskod' => '08407',
                'bandar' => 'Merbok',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            197 =>
            array (
                'id' => 198,
                'poskod' => '08409',
                'bandar' => 'Merbok',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            198 =>
            array (
                'id' => 199,
                'poskod' => '08500',
                'bandar' => 'Kota Kuala Muda',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            199 =>
            array (
                'id' => 200,
                'poskod' => '08507',
                'bandar' => 'Kota Kuala Muda',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            200 =>
            array (
                'id' => 201,
                'poskod' => '08509',
                'bandar' => 'Kota Kuala Muda',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            201 =>
            array (
                'id' => 202,
                'poskod' => '08600',
                'bandar' => 'Sungai Petani',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            202 =>
            array (
                'id' => 203,
                'poskod' => '08700',
                'bandar' => 'Jeniang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            203 =>
            array (
                'id' => 204,
                'poskod' => '08800',
                'bandar' => 'Gurun',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:57',
                'updated_at' => '2019-10-14 08:40:57',
            ),
            204 =>
            array (
                'id' => 205,
                'poskod' => '09000',
                'bandar' => 'Kulim',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            205 =>
            array (
                'id' => 206,
                'poskod' => '09007',
                'bandar' => 'Kulim',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            206 =>
            array (
                'id' => 207,
                'poskod' => '09009',
                'bandar' => 'Kulim',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            207 =>
            array (
                'id' => 208,
                'poskod' => '09010',
                'bandar' => 'Kulim',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            208 =>
            array (
                'id' => 209,
                'poskod' => '09020',
                'bandar' => 'Kulim',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            209 =>
            array (
                'id' => 210,
                'poskod' => '09100',
                'bandar' => 'Baling',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            210 =>
            array (
                'id' => 211,
                'poskod' => '09110',
                'bandar' => 'Kuala Pegang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            211 =>
            array (
                'id' => 212,
                'poskod' => '09200',
                'bandar' => 'Kupang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            212 =>
            array (
                'id' => 213,
                'poskod' => '09300',
                'bandar' => 'Kuala Ketil',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            213 =>
            array (
                'id' => 214,
                'poskod' => '09310',
                'bandar' => 'Kuala Ketil',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            214 =>
            array (
                'id' => 215,
                'poskod' => '09400',
                'bandar' => 'Padang Serai',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            215 =>
            array (
                'id' => 216,
                'poskod' => '09410',
                'bandar' => 'Padang Serai',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            216 =>
            array (
                'id' => 217,
                'poskod' => '09600',
                'bandar' => 'Lunas',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            217 =>
            array (
                'id' => 218,
                'poskod' => '09700',
                'bandar' => 'Karangan',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            218 =>
            array (
                'id' => 219,
                'poskod' => '09800',
                'bandar' => 'Serdang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            219 =>
            array (
                'id' => 220,
                'poskod' => '09810',
                'bandar' => 'Serdang',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            220 =>
            array (
                'id' => 221,
                'poskod' => '10000',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            221 =>
            array (
                'id' => 222,
                'poskod' => '10050',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            222 =>
            array (
                'id' => 223,
                'poskod' => '10100',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            223 =>
            array (
                'id' => 224,
                'poskod' => '10150',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            224 =>
            array (
                'id' => 225,
                'poskod' => '10200',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:58',
                'updated_at' => '2019-10-14 08:40:58',
            ),
            225 =>
            array (
                'id' => 226,
                'poskod' => '10250',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            226 =>
            array (
                'id' => 227,
                'poskod' => '10300',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            227 =>
            array (
                'id' => 228,
                'poskod' => '10350',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            228 =>
            array (
                'id' => 229,
                'poskod' => '10400',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            229 =>
            array (
                'id' => 230,
                'poskod' => '10450',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            230 =>
            array (
                'id' => 231,
                'poskod' => '10460',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            231 =>
            array (
                'id' => 232,
                'poskod' => '10470',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            232 =>
            array (
                'id' => 233,
                'poskod' => '10500',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            233 =>
            array (
                'id' => 234,
                'poskod' => '10502',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            234 =>
            array (
                'id' => 235,
                'poskod' => '10503',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            235 =>
            array (
                'id' => 236,
                'poskod' => '10504',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            236 =>
            array (
                'id' => 237,
                'poskod' => '10505',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            237 =>
            array (
                'id' => 238,
                'poskod' => '10506',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            238 =>
            array (
                'id' => 239,
                'poskod' => '10508',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            239 =>
            array (
                'id' => 240,
                'poskod' => '10512',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            240 =>
            array (
                'id' => 241,
                'poskod' => '10514',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            241 =>
            array (
                'id' => 242,
                'poskod' => '10516',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            242 =>
            array (
                'id' => 243,
                'poskod' => '10518',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            243 =>
            array (
                'id' => 244,
                'poskod' => '10524',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            244 =>
            array (
                'id' => 245,
                'poskod' => '10534',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            245 =>
            array (
                'id' => 246,
                'poskod' => '10538',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:40:59',
                'updated_at' => '2019-10-14 08:40:59',
            ),
            246 =>
            array (
                'id' => 247,
                'poskod' => '10540',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            247 =>
            array (
                'id' => 248,
                'poskod' => '10542',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            248 =>
            array (
                'id' => 249,
                'poskod' => '10546',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            249 =>
            array (
                'id' => 250,
                'poskod' => '10550',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            250 =>
            array (
                'id' => 251,
                'poskod' => '10551',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            251 =>
            array (
                'id' => 252,
                'poskod' => '10552',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            252 =>
            array (
                'id' => 253,
                'poskod' => '10558',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            253 =>
            array (
                'id' => 254,
                'poskod' => '10560',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            254 =>
            array (
                'id' => 255,
                'poskod' => '10564',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            255 =>
            array (
                'id' => 256,
                'poskod' => '10566',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            256 =>
            array (
                'id' => 257,
                'poskod' => '10570',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            257 =>
            array (
                'id' => 258,
                'poskod' => '10576',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            258 =>
            array (
                'id' => 259,
                'poskod' => '10578',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            259 =>
            array (
                'id' => 260,
                'poskod' => '10582',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            260 =>
            array (
                'id' => 261,
                'poskod' => '10590',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            261 =>
            array (
                'id' => 262,
                'poskod' => '10592',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            262 =>
            array (
                'id' => 263,
                'poskod' => '10593',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            263 =>
            array (
                'id' => 264,
                'poskod' => '10594',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            264 =>
            array (
                'id' => 265,
                'poskod' => '10596',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            265 =>
            array (
                'id' => 266,
                'poskod' => '10600',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            266 =>
            array (
                'id' => 267,
                'poskod' => '10604',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            267 =>
            array (
                'id' => 268,
                'poskod' => '10609',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:00',
                'updated_at' => '2019-10-14 08:41:00',
            ),
            268 =>
            array (
                'id' => 269,
                'poskod' => '10610',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            269 =>
            array (
                'id' => 270,
                'poskod' => '10612',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            270 =>
            array (
                'id' => 271,
                'poskod' => '10620',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            271 =>
            array (
                'id' => 272,
                'poskod' => '10622',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            272 =>
            array (
                'id' => 273,
                'poskod' => '10626',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            273 =>
            array (
                'id' => 274,
                'poskod' => '10628',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            274 =>
            array (
                'id' => 275,
                'poskod' => '10634',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            275 =>
            array (
                'id' => 276,
                'poskod' => '10646',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            276 =>
            array (
                'id' => 277,
                'poskod' => '10648',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            277 =>
            array (
                'id' => 278,
                'poskod' => '10660',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            278 =>
            array (
                'id' => 279,
                'poskod' => '10661',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            279 =>
            array (
                'id' => 280,
                'poskod' => '10662',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            280 =>
            array (
                'id' => 281,
                'poskod' => '10670',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            281 =>
            array (
                'id' => 282,
                'poskod' => '10672',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            282 =>
            array (
                'id' => 283,
                'poskod' => '10673',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            283 =>
            array (
                'id' => 284,
                'poskod' => '10674',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            284 =>
            array (
                'id' => 285,
                'poskod' => '10676',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            285 =>
            array (
                'id' => 286,
                'poskod' => '10690',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            286 =>
            array (
                'id' => 287,
                'poskod' => '10710',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            287 =>
            array (
                'id' => 288,
                'poskod' => '10720',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            288 =>
            array (
                'id' => 289,
                'poskod' => '10730',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:01',
                'updated_at' => '2019-10-14 08:41:01',
            ),
            289 =>
            array (
                'id' => 290,
                'poskod' => '10740',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            290 =>
            array (
                'id' => 291,
                'poskod' => '10750',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            291 =>
            array (
                'id' => 292,
                'poskod' => '10760',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            292 =>
            array (
                'id' => 293,
                'poskod' => '10770',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            293 =>
            array (
                'id' => 294,
                'poskod' => '10780',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            294 =>
            array (
                'id' => 295,
                'poskod' => '10790',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            295 =>
            array (
                'id' => 296,
                'poskod' => '10800',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            296 =>
            array (
                'id' => 297,
                'poskod' => '10810',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            297 =>
            array (
                'id' => 298,
                'poskod' => '10820',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            298 =>
            array (
                'id' => 299,
                'poskod' => '10830',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            299 =>
            array (
                'id' => 300,
                'poskod' => '10840',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            300 =>
            array (
                'id' => 301,
                'poskod' => '10850',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            301 =>
            array (
                'id' => 302,
                'poskod' => '10910',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            302 =>
            array (
                'id' => 303,
                'poskod' => '10920',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            303 =>
            array (
                'id' => 304,
                'poskod' => '10990',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            304 =>
            array (
                'id' => 305,
                'poskod' => '11000',
                'bandar' => 'Balik Pulau',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            305 =>
            array (
                'id' => 306,
                'poskod' => '11010',
                'bandar' => 'Balik Pulau',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            306 =>
            array (
                'id' => 307,
                'poskod' => '11020',
                'bandar' => 'Balik Pulau',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            307 =>
            array (
                'id' => 308,
                'poskod' => '11050',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            308 =>
            array (
                'id' => 309,
                'poskod' => '11060',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:02',
                'updated_at' => '2019-10-14 08:41:02',
            ),
            309 =>
            array (
                'id' => 310,
                'poskod' => '11100',
                'bandar' => 'Batu Ferringhi',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            310 =>
            array (
                'id' => 311,
                'poskod' => '11200',
                'bandar' => 'Tanjong Bungah',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            311 =>
            array (
                'id' => 312,
                'poskod' => '11300',
                'bandar' => 'Penang Hill',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            312 =>
            array (
                'id' => 313,
                'poskod' => '11400',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            313 =>
            array (
                'id' => 314,
                'poskod' => '11409',
                'bandar' => 'Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            314 =>
            array (
                'id' => 315,
                'poskod' => '11500',
                'bandar' => 'Ayer Itam',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            315 =>
            array (
                'id' => 316,
                'poskod' => '11600',
                'bandar' => 'Jelutong',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            316 =>
            array (
                'id' => 317,
                'poskod' => '11609',
                'bandar' => 'Jelutong',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            317 =>
            array (
                'id' => 318,
                'poskod' => '11700',
                'bandar' => 'Gelugor',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            318 =>
            array (
                'id' => 319,
                'poskod' => '11800',
                'bandar' => 'USM Pulau Pinang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            319 =>
            array (
                'id' => 320,
                'poskod' => '11900',
                'bandar' => 'Bayan Lepas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            320 =>
            array (
                'id' => 321,
                'poskod' => '11910',
                'bandar' => 'Bayan Lepas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            321 =>
            array (
                'id' => 322,
                'poskod' => '11920',
                'bandar' => 'Bayan Lepas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            322 =>
            array (
                'id' => 323,
                'poskod' => '11950',
                'bandar' => 'Bayan Lepas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            323 =>
            array (
                'id' => 324,
                'poskod' => '11960',
                'bandar' => 'Batu Maung',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            324 =>
            array (
                'id' => 325,
                'poskod' => '12000',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            325 =>
            array (
                'id' => 326,
                'poskod' => '12100',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            326 =>
            array (
                'id' => 327,
                'poskod' => '12200',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            327 =>
            array (
                'id' => 328,
                'poskod' => '12300',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            328 =>
            array (
                'id' => 329,
                'poskod' => '12700',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            329 =>
            array (
                'id' => 330,
                'poskod' => '12710',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            330 =>
            array (
                'id' => 331,
                'poskod' => '12720',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:03',
                'updated_at' => '2019-10-14 08:41:03',
            ),
            331 =>
            array (
                'id' => 332,
                'poskod' => '12990',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            332 =>
            array (
                'id' => 333,
                'poskod' => '13000',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            333 =>
            array (
                'id' => 334,
                'poskod' => '13009',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            334 =>
            array (
                'id' => 335,
                'poskod' => '13020',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            335 =>
            array (
                'id' => 336,
                'poskod' => '13050',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            336 =>
            array (
                'id' => 337,
                'poskod' => '13100',
                'bandar' => 'Penaga',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            337 =>
            array (
                'id' => 338,
                'poskod' => '13110',
                'bandar' => 'Penaga',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            338 =>
            array (
                'id' => 339,
                'poskod' => '13200',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            339 =>
            array (
                'id' => 340,
                'poskod' => '13210',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            340 =>
            array (
                'id' => 341,
                'poskod' => '13220',
                'bandar' => 'Kepala Batas',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            341 =>
            array (
                'id' => 342,
                'poskod' => '13300',
                'bandar' => 'Tasek Gelugor',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            342 =>
            array (
                'id' => 343,
                'poskod' => '13310',
                'bandar' => 'Tasek Gelugor',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            343 =>
            array (
                'id' => 344,
                'poskod' => '13400',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            344 =>
            array (
                'id' => 345,
                'poskod' => '13409',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            345 =>
            array (
                'id' => 346,
                'poskod' => '13500',
                'bandar' => 'Permatang Pauh',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            346 =>
            array (
                'id' => 347,
                'poskod' => '13600',
                'bandar' => 'Perai',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            347 =>
            array (
                'id' => 348,
                'poskod' => '13700',
                'bandar' => 'Perai',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            348 =>
            array (
                'id' => 349,
                'poskod' => '13800',
                'bandar' => 'Butterworth',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            349 =>
            array (
                'id' => 350,
                'poskod' => '14000',
                'bandar' => 'Bukit Mertajam',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            350 =>
            array (
                'id' => 351,
                'poskod' => '14007',
                'bandar' => 'Bukit Mertajam',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:04',
                'updated_at' => '2019-10-14 08:41:04',
            ),
            351 =>
            array (
                'id' => 352,
                'poskod' => '14009',
                'bandar' => 'Bukit Mertajam',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            352 =>
            array (
                'id' => 353,
                'poskod' => '14020',
                'bandar' => 'Bukit Mertajam',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            353 =>
            array (
                'id' => 354,
                'poskod' => '14100',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            354 =>
            array (
                'id' => 355,
                'poskod' => '14101',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            355 =>
            array (
                'id' => 356,
                'poskod' => '14110',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            356 =>
            array (
                'id' => 357,
                'poskod' => '14120',
                'bandar' => 'Simpang Ampat',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            357 =>
            array (
                'id' => 358,
                'poskod' => '14200',
                'bandar' => 'Sungai Jawi',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            358 =>
            array (
                'id' => 359,
                'poskod' => '14290',
                'bandar' => 'Bandar Bahru',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            359 =>
            array (
                'id' => 360,
                'poskod' => '14300',
                'bandar' => 'Nibong Tebal',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            360 =>
            array (
                'id' => 361,
                'poskod' => '14310',
                'bandar' => 'Nibong Tebal',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            361 =>
            array (
                'id' => 362,
                'poskod' => '14320',
                'bandar' => 'Nibong Tebal',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            362 =>
            array (
                'id' => 363,
                'poskod' => '14390',
                'bandar' => 'Bandar Bahru',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            363 =>
            array (
                'id' => 364,
                'poskod' => '14400',
                'bandar' => 'Kubang Semang',
                'negeri_id' => 7,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            364 =>
            array (
                'id' => 365,
                'poskod' => '15000',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            365 =>
            array (
                'id' => 366,
                'poskod' => '15050',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            366 =>
            array (
                'id' => 367,
                'poskod' => '15100',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            367 =>
            array (
                'id' => 368,
                'poskod' => '15150',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            368 =>
            array (
                'id' => 369,
                'poskod' => '15159',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            369 =>
            array (
                'id' => 370,
                'poskod' => '15200',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            370 =>
            array (
                'id' => 371,
                'poskod' => '15300',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            371 =>
            array (
                'id' => 372,
                'poskod' => '15350',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:05',
                'updated_at' => '2019-10-14 08:41:05',
            ),
            372 =>
            array (
                'id' => 373,
                'poskod' => '15400',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            373 =>
            array (
                'id' => 374,
                'poskod' => '15500',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            374 =>
            array (
                'id' => 375,
                'poskod' => '15502',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            375 =>
            array (
                'id' => 376,
                'poskod' => '15503',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            376 =>
            array (
                'id' => 377,
                'poskod' => '15504',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            377 =>
            array (
                'id' => 378,
                'poskod' => '15505',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            378 =>
            array (
                'id' => 379,
                'poskod' => '15506',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            379 =>
            array (
                'id' => 380,
                'poskod' => '15508',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            380 =>
            array (
                'id' => 381,
                'poskod' => '15512',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            381 =>
            array (
                'id' => 382,
                'poskod' => '15514',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            382 =>
            array (
                'id' => 383,
                'poskod' => '15516',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            383 =>
            array (
                'id' => 384,
                'poskod' => '15517',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            384 =>
            array (
                'id' => 385,
                'poskod' => '15518',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            385 =>
            array (
                'id' => 386,
                'poskod' => '15519',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            386 =>
            array (
                'id' => 387,
                'poskod' => '15520',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            387 =>
            array (
                'id' => 388,
                'poskod' => '15524',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            388 =>
            array (
                'id' => 389,
                'poskod' => '15529',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            389 =>
            array (
                'id' => 390,
                'poskod' => '15532',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            390 =>
            array (
                'id' => 391,
                'poskod' => '15534',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:06',
                'updated_at' => '2019-10-14 08:41:06',
            ),
            391 =>
            array (
                'id' => 392,
                'poskod' => '15536',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            392 =>
            array (
                'id' => 393,
                'poskod' => '15538',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            393 =>
            array (
                'id' => 394,
                'poskod' => '15540',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            394 =>
            array (
                'id' => 395,
                'poskod' => '15546',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            395 =>
            array (
                'id' => 396,
                'poskod' => '15548',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            396 =>
            array (
                'id' => 397,
                'poskod' => '15550',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            397 =>
            array (
                'id' => 398,
                'poskod' => '15551',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            398 =>
            array (
                'id' => 399,
                'poskod' => '15556',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            399 =>
            array (
                'id' => 400,
                'poskod' => '15558',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            400 =>
            array (
                'id' => 401,
                'poskod' => '15560',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            401 =>
            array (
                'id' => 402,
                'poskod' => '15564',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            402 =>
            array (
                'id' => 403,
                'poskod' => '15570',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            403 =>
            array (
                'id' => 404,
                'poskod' => '15572',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            404 =>
            array (
                'id' => 405,
                'poskod' => '15576',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            405 =>
            array (
                'id' => 406,
                'poskod' => '15578',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            406 =>
            array (
                'id' => 407,
                'poskod' => '15582',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            407 =>
            array (
                'id' => 408,
                'poskod' => '15586',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            408 =>
            array (
                'id' => 409,
                'poskod' => '15590',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            409 =>
            array (
                'id' => 410,
                'poskod' => '15592',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            410 =>
            array (
                'id' => 411,
                'poskod' => '15594',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            411 =>
            array (
                'id' => 412,
                'poskod' => '15596',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:07',
                'updated_at' => '2019-10-14 08:41:07',
            ),
            412 =>
            array (
                'id' => 413,
                'poskod' => '15600',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            413 =>
            array (
                'id' => 414,
                'poskod' => '15604',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            414 =>
            array (
                'id' => 415,
                'poskod' => '15608',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            415 =>
            array (
                'id' => 416,
                'poskod' => '15609',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            416 =>
            array (
                'id' => 417,
                'poskod' => '15612',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            417 =>
            array (
                'id' => 418,
                'poskod' => '15614',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            418 =>
            array (
                'id' => 419,
                'poskod' => '15616',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            419 =>
            array (
                'id' => 420,
                'poskod' => '15622',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            420 =>
            array (
                'id' => 421,
                'poskod' => '15623',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            421 =>
            array (
                'id' => 422,
                'poskod' => '15626',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            422 =>
            array (
                'id' => 423,
                'poskod' => '15628',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            423 =>
            array (
                'id' => 424,
                'poskod' => '15630',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            424 =>
            array (
                'id' => 425,
                'poskod' => '15632',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            425 =>
            array (
                'id' => 426,
                'poskod' => '15634',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            426 =>
            array (
                'id' => 427,
                'poskod' => '15644',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            427 =>
            array (
                'id' => 428,
                'poskod' => '15646',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            428 =>
            array (
                'id' => 429,
                'poskod' => '15648',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            429 =>
            array (
                'id' => 430,
                'poskod' => '15658',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            430 =>
            array (
                'id' => 431,
                'poskod' => '15660',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:08',
                'updated_at' => '2019-10-14 08:41:08',
            ),
            431 =>
            array (
                'id' => 432,
                'poskod' => '15661',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            432 =>
            array (
                'id' => 433,
                'poskod' => '15664',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            433 =>
            array (
                'id' => 434,
                'poskod' => '15670',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            434 =>
            array (
                'id' => 435,
                'poskod' => '15672',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            435 =>
            array (
                'id' => 436,
                'poskod' => '15673',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            436 =>
            array (
                'id' => 437,
                'poskod' => '15674',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            437 =>
            array (
                'id' => 438,
                'poskod' => '15676',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            438 =>
            array (
                'id' => 439,
                'poskod' => '15680',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            439 =>
            array (
                'id' => 440,
                'poskod' => '15690',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            440 =>
            array (
                'id' => 441,
                'poskod' => '15710',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            441 =>
            array (
                'id' => 442,
                'poskod' => '15720',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            442 =>
            array (
                'id' => 443,
                'poskod' => '15730',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:09',
                'updated_at' => '2019-10-14 08:41:09',
            ),
            443 =>
            array (
                'id' => 444,
                'poskod' => '15740',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            444 =>
            array (
                'id' => 445,
                'poskod' => '15988',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            445 =>
            array (
                'id' => 446,
                'poskod' => '15990',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            446 =>
            array (
                'id' => 447,
                'poskod' => '16010',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            447 =>
            array (
                'id' => 448,
                'poskod' => '16020',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            448 =>
            array (
                'id' => 449,
                'poskod' => '16030',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            449 =>
            array (
                'id' => 450,
                'poskod' => '16040',
                'bandar' => 'Wakaf Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            450 =>
            array (
                'id' => 451,
                'poskod' => '16050',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            451 =>
            array (
                'id' => 452,
                'poskod' => '16060',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            452 =>
            array (
                'id' => 453,
                'poskod' => '16070',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            453 =>
            array (
                'id' => 454,
                'poskod' => '16080',
                'bandar' => 'Tumpat',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            454 =>
            array (
                'id' => 455,
                'poskod' => '16090',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            455 =>
            array (
                'id' => 456,
                'poskod' => '16100',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            456 =>
            array (
                'id' => 457,
                'poskod' => '16109',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            457 =>
            array (
                'id' => 458,
                'poskod' => '16150',
                'bandar' => 'Kota Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            458 =>
            array (
                'id' => 459,
                'poskod' => '16200',
                'bandar' => 'Tumpat',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            459 =>
            array (
                'id' => 460,
                'poskod' => '16210',
                'bandar' => 'Tumpat',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            460 =>
            array (
                'id' => 461,
                'poskod' => '16250',
                'bandar' => 'Wakaf Bharu',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            461 =>
            array (
                'id' => 462,
                'poskod' => '16300',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            462 =>
            array (
                'id' => 463,
                'poskod' => '16310',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:10',
                'updated_at' => '2019-10-14 08:41:10',
            ),
            463 =>
            array (
                'id' => 464,
                'poskod' => '16320',
                'bandar' => 'Bachok',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            464 =>
            array (
                'id' => 465,
                'poskod' => '16400',
                'bandar' => 'Melor',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            465 =>
            array (
                'id' => 466,
                'poskod' => '16450',
                'bandar' => 'Ketereh',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            466 =>
            array (
                'id' => 467,
                'poskod' => '16500',
                'bandar' => 'Kem Desa Pahlawan',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            467 =>
            array (
                'id' => 468,
                'poskod' => '16600',
                'bandar' => 'Pulai Chondong',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            468 =>
            array (
                'id' => 469,
                'poskod' => '16700',
                'bandar' => 'Cherang Ruku',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            469 =>
            array (
                'id' => 470,
                'poskod' => '16800',
                'bandar' => 'Pasir Puteh',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            470 =>
            array (
                'id' => 471,
                'poskod' => '16810',
                'bandar' => 'Selising',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            471 =>
            array (
                'id' => 472,
                'poskod' => '17000',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            472 =>
            array (
                'id' => 473,
                'poskod' => '17007',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            473 =>
            array (
                'id' => 474,
                'poskod' => '17009',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            474 =>
            array (
                'id' => 475,
                'poskod' => '17010',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            475 =>
            array (
                'id' => 476,
                'poskod' => '17020',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            476 =>
            array (
                'id' => 477,
                'poskod' => '17030',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            477 =>
            array (
                'id' => 478,
                'poskod' => '17040',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            478 =>
            array (
                'id' => 479,
                'poskod' => '17050',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            479 =>
            array (
                'id' => 480,
                'poskod' => '17060',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            480 =>
            array (
                'id' => 481,
                'poskod' => '17070',
                'bandar' => 'Pasir Mas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:11',
                'updated_at' => '2019-10-14 08:41:11',
            ),
            481 =>
            array (
                'id' => 482,
                'poskod' => '17200',
                'bandar' => 'Rantau Panjang',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            482 =>
            array (
                'id' => 483,
                'poskod' => '17500',
                'bandar' => 'Tanah Merah',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            483 =>
            array (
                'id' => 484,
                'poskod' => '17507',
                'bandar' => 'Tanah Merah',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            484 =>
            array (
                'id' => 485,
                'poskod' => '17509',
                'bandar' => 'Tanah Merah',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            485 =>
            array (
                'id' => 486,
                'poskod' => '17510',
                'bandar' => 'Tanah Merah',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            486 =>
            array (
                'id' => 487,
                'poskod' => '17600',
                'bandar' => 'Jeli',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            487 =>
            array (
                'id' => 488,
                'poskod' => '17610',
                'bandar' => 'Kuala Balah',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            488 =>
            array (
                'id' => 489,
                'poskod' => '17700',
                'bandar' => 'Ayer Lanas',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            489 =>
            array (
                'id' => 490,
                'poskod' => '18000',
                'bandar' => 'Kuala Krai',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            490 =>
            array (
                'id' => 491,
                'poskod' => '18050',
                'bandar' => 'Kuala Krai',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            491 =>
            array (
                'id' => 492,
                'poskod' => '18200',
                'bandar' => 'Dabong',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            492 =>
            array (
                'id' => 493,
                'poskod' => '18300',
                'bandar' => 'Gua Musang',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            493 =>
            array (
                'id' => 494,
                'poskod' => '18400',
                'bandar' => 'Temangan',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            494 =>
            array (
                'id' => 495,
                'poskod' => '18500',
                'bandar' => 'Machang',
                'negeri_id' => 3,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            495 =>
            array (
                'id' => 496,
                'poskod' => '20000',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            496 =>
            array (
                'id' => 497,
                'poskod' => '20050',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            497 =>
            array (
                'id' => 498,
                'poskod' => '20100',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            498 =>
            array (
                'id' => 499,
                'poskod' => '20200',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:12',
                'updated_at' => '2019-10-14 08:41:12',
            ),
            499 =>
            array (
                'id' => 500,
                'poskod' => '20300',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
        ));
        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 501,
                'poskod' => '20400',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            1 =>
            array (
                'id' => 502,
                'poskod' => '20500',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            2 =>
            array (
                'id' => 503,
                'poskod' => '20502',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            3 =>
            array (
                'id' => 504,
                'poskod' => '20503',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            4 =>
            array (
                'id' => 505,
                'poskod' => '20504',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            5 =>
            array (
                'id' => 506,
                'poskod' => '20505',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            6 =>
            array (
                'id' => 507,
                'poskod' => '20506',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            7 =>
            array (
                'id' => 508,
                'poskod' => '20508',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            8 =>
            array (
                'id' => 509,
                'poskod' => '20512',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            9 =>
            array (
                'id' => 510,
                'poskod' => '20514',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            10 =>
            array (
                'id' => 511,
                'poskod' => '20516',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            11 =>
            array (
                'id' => 512,
                'poskod' => '20517',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            12 =>
            array (
                'id' => 513,
                'poskod' => '20518',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            13 =>
            array (
                'id' => 514,
                'poskod' => '20519',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            14 =>
            array (
                'id' => 515,
                'poskod' => '20520',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            15 =>
            array (
                'id' => 516,
                'poskod' => '20532',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            16 =>
            array (
                'id' => 517,
                'poskod' => '20534',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:13',
                'updated_at' => '2019-10-14 08:41:13',
            ),
            17 =>
            array (
                'id' => 518,
                'poskod' => '20536',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            18 =>
            array (
                'id' => 519,
                'poskod' => '20538',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            19 =>
            array (
                'id' => 520,
                'poskod' => '20540',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            20 =>
            array (
                'id' => 521,
                'poskod' => '20542',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            21 =>
            array (
                'id' => 522,
                'poskod' => '20546',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            22 =>
            array (
                'id' => 523,
                'poskod' => '20548',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            23 =>
            array (
                'id' => 524,
                'poskod' => '20550',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            24 =>
            array (
                'id' => 525,
                'poskod' => '20551',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            25 =>
            array (
                'id' => 526,
                'poskod' => '20552',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            26 =>
            array (
                'id' => 527,
                'poskod' => '20554',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            27 =>
            array (
                'id' => 528,
                'poskod' => '20556',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            28 =>
            array (
                'id' => 529,
                'poskod' => '20560',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            29 =>
            array (
                'id' => 530,
                'poskod' => '20564',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            30 =>
            array (
                'id' => 531,
                'poskod' => '20566',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            31 =>
            array (
                'id' => 532,
                'poskod' => '20568',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            32 =>
            array (
                'id' => 533,
                'poskod' => '20570',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            33 =>
            array (
                'id' => 534,
                'poskod' => '20572',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            34 =>
            array (
                'id' => 535,
                'poskod' => '20576',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            35 =>
            array (
                'id' => 536,
                'poskod' => '20578',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:14',
                'updated_at' => '2019-10-14 08:41:14',
            ),
            36 =>
            array (
                'id' => 537,
                'poskod' => '20582',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            37 =>
            array (
                'id' => 538,
                'poskod' => '20586',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            38 =>
            array (
                'id' => 539,
                'poskod' => '20590',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            39 =>
            array (
                'id' => 540,
                'poskod' => '20592',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            40 =>
            array (
                'id' => 541,
                'poskod' => '20596',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            41 =>
            array (
                'id' => 542,
                'poskod' => '20600',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            42 =>
            array (
                'id' => 543,
                'poskod' => '20604',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            43 =>
            array (
                'id' => 544,
                'poskod' => '20606',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            44 =>
            array (
                'id' => 545,
                'poskod' => '20608',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            45 =>
            array (
                'id' => 546,
                'poskod' => '20609',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            46 =>
            array (
                'id' => 547,
                'poskod' => '20610',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            47 =>
            array (
                'id' => 548,
                'poskod' => '20612',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            48 =>
            array (
                'id' => 549,
                'poskod' => '20614',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            49 =>
            array (
                'id' => 550,
                'poskod' => '20618',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            50 =>
            array (
                'id' => 551,
                'poskod' => '20620',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            51 =>
            array (
                'id' => 552,
                'poskod' => '20622',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            52 =>
            array (
                'id' => 553,
                'poskod' => '20626',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            53 =>
            array (
                'id' => 554,
                'poskod' => '20628',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            54 =>
            array (
                'id' => 555,
                'poskod' => '20630',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:15',
                'updated_at' => '2019-10-14 08:41:15',
            ),
            55 =>
            array (
                'id' => 556,
                'poskod' => '20632',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            56 =>
            array (
                'id' => 557,
                'poskod' => '20646',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            57 =>
            array (
                'id' => 558,
                'poskod' => '20648',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            58 =>
            array (
                'id' => 559,
                'poskod' => '20656',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            59 =>
            array (
                'id' => 560,
                'poskod' => '20658',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            60 =>
            array (
                'id' => 561,
                'poskod' => '20660',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            61 =>
            array (
                'id' => 562,
                'poskod' => '20661',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            62 =>
            array (
                'id' => 563,
                'poskod' => '20662',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            63 =>
            array (
                'id' => 564,
                'poskod' => '20664',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            64 =>
            array (
                'id' => 565,
                'poskod' => '20668',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            65 =>
            array (
                'id' => 566,
                'poskod' => '20670',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            66 =>
            array (
                'id' => 567,
                'poskod' => '20672',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            67 =>
            array (
                'id' => 568,
                'poskod' => '20673',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            68 =>
            array (
                'id' => 569,
                'poskod' => '20674',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            69 =>
            array (
                'id' => 570,
                'poskod' => '20676',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            70 =>
            array (
                'id' => 571,
                'poskod' => '20680',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            71 =>
            array (
                'id' => 572,
                'poskod' => '20690',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            72 =>
            array (
                'id' => 573,
                'poskod' => '20698',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:16',
                'updated_at' => '2019-10-14 08:41:16',
            ),
            73 =>
            array (
                'id' => 574,
                'poskod' => '20700',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            74 =>
            array (
                'id' => 575,
                'poskod' => '20710',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            75 =>
            array (
                'id' => 576,
                'poskod' => '20720',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            76 =>
            array (
                'id' => 577,
                'poskod' => '20900',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            77 =>
            array (
                'id' => 578,
                'poskod' => '20902',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            78 =>
            array (
                'id' => 579,
                'poskod' => '20904',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            79 =>
            array (
                'id' => 580,
                'poskod' => '20906',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            80 =>
            array (
                'id' => 581,
                'poskod' => '20908',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            81 =>
            array (
                'id' => 582,
                'poskod' => '20910',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            82 =>
            array (
                'id' => 583,
                'poskod' => '20912',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            83 =>
            array (
                'id' => 584,
                'poskod' => '20914',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            84 =>
            array (
                'id' => 585,
                'poskod' => '20916',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            85 =>
            array (
                'id' => 586,
                'poskod' => '20918',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            86 =>
            array (
                'id' => 587,
                'poskod' => '20920',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            87 =>
            array (
                'id' => 588,
                'poskod' => '20922',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            88 =>
            array (
                'id' => 589,
                'poskod' => '20924',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            89 =>
            array (
                'id' => 590,
                'poskod' => '20926',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            90 =>
            array (
                'id' => 591,
                'poskod' => '20928',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            91 =>
            array (
                'id' => 592,
                'poskod' => '20930',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            92 =>
            array (
                'id' => 593,
                'poskod' => '20990',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:17',
                'updated_at' => '2019-10-14 08:41:17',
            ),
            93 =>
            array (
                'id' => 594,
                'poskod' => '21000',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            94 =>
            array (
                'id' => 595,
                'poskod' => '21009',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            95 =>
            array (
                'id' => 596,
                'poskod' => '21010',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            96 =>
            array (
                'id' => 597,
                'poskod' => '21020',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            97 =>
            array (
                'id' => 598,
                'poskod' => '21030',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            98 =>
            array (
                'id' => 599,
                'poskod' => '21040',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            99 =>
            array (
                'id' => 600,
                'poskod' => '21060',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            100 =>
            array (
                'id' => 601,
                'poskod' => '21070',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            101 =>
            array (
                'id' => 602,
                'poskod' => '21080',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            102 =>
            array (
                'id' => 603,
                'poskod' => '21090',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            103 =>
            array (
                'id' => 604,
                'poskod' => '21100',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            104 =>
            array (
                'id' => 605,
                'poskod' => '21109',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            105 =>
            array (
                'id' => 606,
                'poskod' => '21200',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            106 =>
            array (
                'id' => 607,
                'poskod' => '21209',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            107 =>
            array (
                'id' => 608,
                'poskod' => '21210',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            108 =>
            array (
                'id' => 609,
                'poskod' => '21220',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            109 =>
            array (
                'id' => 610,
                'poskod' => '21300',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:18',
                'updated_at' => '2019-10-14 08:41:18',
            ),
            110 =>
            array (
                'id' => 611,
                'poskod' => '21309',
                'bandar' => 'Kuala Terengganu',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            111 =>
            array (
                'id' => 612,
                'poskod' => '21400',
                'bandar' => 'Bukit Payong',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            112 =>
            array (
                'id' => 613,
                'poskod' => '21450',
                'bandar' => 'Chalok',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            113 =>
            array (
                'id' => 614,
                'poskod' => '21500',
                'bandar' => 'Sungai Tong',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            114 =>
            array (
                'id' => 615,
                'poskod' => '21600',
                'bandar' => 'Marang',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            115 =>
            array (
                'id' => 616,
                'poskod' => '21610',
                'bandar' => 'Marang',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            116 =>
            array (
                'id' => 617,
                'poskod' => '21700',
                'bandar' => 'Kuala Berang',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            117 =>
            array (
                'id' => 618,
                'poskod' => '21800',
                'bandar' => 'Ajil',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            118 =>
            array (
                'id' => 619,
                'poskod' => '21810',
                'bandar' => 'Ajil',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            119 =>
            array (
                'id' => 620,
                'poskod' => '21820',
                'bandar' => 'Ajil',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            120 =>
            array (
                'id' => 621,
                'poskod' => '22000',
                'bandar' => 'Jerteh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            121 =>
            array (
                'id' => 622,
                'poskod' => '22010',
                'bandar' => 'Jerteh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            122 =>
            array (
                'id' => 623,
                'poskod' => '22020',
                'bandar' => 'Jerteh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            123 =>
            array (
                'id' => 624,
                'poskod' => '22100',
                'bandar' => 'Permaisuri',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            124 =>
            array (
                'id' => 625,
                'poskod' => '22107',
                'bandar' => 'Permaisuri',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            125 =>
            array (
                'id' => 626,
                'poskod' => '22109',
                'bandar' => 'Permaisuri',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            126 =>
            array (
                'id' => 627,
                'poskod' => '22110',
                'bandar' => 'Permaisuri',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:19',
                'updated_at' => '2019-10-14 08:41:19',
            ),
            127 =>
            array (
                'id' => 628,
                'poskod' => '22120',
                'bandar' => 'Permaisuri',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            128 =>
            array (
                'id' => 629,
                'poskod' => '22200',
                'bandar' => 'Kampung Raja',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            129 =>
            array (
                'id' => 630,
                'poskod' => '22300',
                'bandar' => 'Kuala Besut',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            130 =>
            array (
                'id' => 631,
                'poskod' => '22307',
                'bandar' => 'Kuala Besut',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            131 =>
            array (
                'id' => 632,
                'poskod' => '22309',
                'bandar' => 'Kuala Besut',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            132 =>
            array (
                'id' => 633,
                'poskod' => '23000',
                'bandar' => 'Dungun',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            133 =>
            array (
                'id' => 634,
                'poskod' => '23007',
                'bandar' => 'Dungun',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            134 =>
            array (
                'id' => 635,
                'poskod' => '23009',
                'bandar' => 'Dungun',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            135 =>
            array (
                'id' => 636,
                'poskod' => '23050',
                'bandar' => 'Dungun',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            136 =>
            array (
                'id' => 637,
                'poskod' => '23100',
                'bandar' => 'Paka',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            137 =>
            array (
                'id' => 638,
                'poskod' => '23200',
                'bandar' => 'Bukit Besi',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            138 =>
            array (
                'id' => 639,
                'poskod' => '23300',
                'bandar' => 'Ketengah Jaya',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            139 =>
            array (
                'id' => 640,
                'poskod' => '23400',
                'bandar' => 'Al Muktatfi Billah Shah',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            140 =>
            array (
                'id' => 641,
                'poskod' => '24000',
                'bandar' => 'Cukai',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            141 =>
            array (
                'id' => 642,
                'poskod' => '24007',
                'bandar' => 'Cukai',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:20',
                'updated_at' => '2019-10-14 08:41:20',
            ),
            142 =>
            array (
                'id' => 643,
                'poskod' => '24009',
                'bandar' => 'Cukai',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            143 =>
            array (
                'id' => 644,
                'poskod' => '24050',
                'bandar' => 'Ayer Puteh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            144 =>
            array (
                'id' => 645,
                'poskod' => '24060',
                'bandar' => 'Ceneh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            145 =>
            array (
                'id' => 646,
                'poskod' => '24100',
                'bandar' => 'Kijal',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            146 =>
            array (
                'id' => 647,
                'poskod' => '24107',
                'bandar' => 'Kijal',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            147 =>
            array (
                'id' => 648,
                'poskod' => '24109',
                'bandar' => 'Kijal',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            148 =>
            array (
                'id' => 649,
                'poskod' => '24200',
                'bandar' => 'Kemasek',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            149 =>
            array (
                'id' => 650,
                'poskod' => '24207',
                'bandar' => 'Kemasek',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            150 =>
            array (
                'id' => 651,
                'poskod' => '24209',
                'bandar' => 'Kemasek',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            151 =>
            array (
                'id' => 652,
                'poskod' => '24300',
                'bandar' => 'Kerteh',
                'negeri_id' => 11,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            152 =>
            array (
                'id' => 653,
                'poskod' => '25000',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            153 =>
            array (
                'id' => 654,
                'poskod' => '25050',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            154 =>
            array (
                'id' => 655,
                'poskod' => '25100',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            155 =>
            array (
                'id' => 656,
                'poskod' => '25150',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            156 =>
            array (
                'id' => 657,
                'poskod' => '25200',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            157 =>
            array (
                'id' => 658,
                'poskod' => '25250',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            158 =>
            array (
                'id' => 659,
                'poskod' => '25300',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            159 =>
            array (
                'id' => 660,
                'poskod' => '25350',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:21',
                'updated_at' => '2019-10-14 08:41:21',
            ),
            160 =>
            array (
                'id' => 661,
                'poskod' => '25500',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            161 =>
            array (
                'id' => 662,
                'poskod' => '25502',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            162 =>
            array (
                'id' => 663,
                'poskod' => '25503',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            163 =>
            array (
                'id' => 664,
                'poskod' => '25504',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            164 =>
            array (
                'id' => 665,
                'poskod' => '25505',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            165 =>
            array (
                'id' => 666,
                'poskod' => '25506',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            166 =>
            array (
                'id' => 667,
                'poskod' => '25508',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            167 =>
            array (
                'id' => 668,
                'poskod' => '25509',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            168 =>
            array (
                'id' => 669,
                'poskod' => '25512',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            169 =>
            array (
                'id' => 670,
                'poskod' => '25514',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            170 =>
            array (
                'id' => 671,
                'poskod' => '25516',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            171 =>
            array (
                'id' => 672,
                'poskod' => '25517',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            172 =>
            array (
                'id' => 673,
                'poskod' => '25518',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            173 =>
            array (
                'id' => 674,
                'poskod' => '25520',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            174 =>
            array (
                'id' => 675,
                'poskod' => '25524',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            175 =>
            array (
                'id' => 676,
                'poskod' => '25529',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            176 =>
            array (
                'id' => 677,
                'poskod' => '25532',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:22',
                'updated_at' => '2019-10-14 08:41:22',
            ),
            177 =>
            array (
                'id' => 678,
                'poskod' => '25534',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            178 =>
            array (
                'id' => 679,
                'poskod' => '25536',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            179 =>
            array (
                'id' => 680,
                'poskod' => '25538',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            180 =>
            array (
                'id' => 681,
                'poskod' => '25540',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            181 =>
            array (
                'id' => 682,
                'poskod' => '25546',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            182 =>
            array (
                'id' => 683,
                'poskod' => '25548',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            183 =>
            array (
                'id' => 684,
                'poskod' => '25550',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            184 =>
            array (
                'id' => 685,
                'poskod' => '25551',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            185 =>
            array (
                'id' => 686,
                'poskod' => '25552',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            186 =>
            array (
                'id' => 687,
                'poskod' => '25556',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            187 =>
            array (
                'id' => 688,
                'poskod' => '25558',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            188 =>
            array (
                'id' => 689,
                'poskod' => '25560',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            189 =>
            array (
                'id' => 690,
                'poskod' => '25564',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            190 =>
            array (
                'id' => 691,
                'poskod' => '25570',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            191 =>
            array (
                'id' => 692,
                'poskod' => '25576',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            192 =>
            array (
                'id' => 693,
                'poskod' => '25578',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            193 =>
            array (
                'id' => 694,
                'poskod' => '25582',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:23',
                'updated_at' => '2019-10-14 08:41:23',
            ),
            194 =>
            array (
                'id' => 695,
                'poskod' => '25584',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            195 =>
            array (
                'id' => 696,
                'poskod' => '25586',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            196 =>
            array (
                'id' => 697,
                'poskod' => '25590',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            197 =>
            array (
                'id' => 698,
                'poskod' => '25592',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            198 =>
            array (
                'id' => 699,
                'poskod' => '25594',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            199 =>
            array (
                'id' => 700,
                'poskod' => '25596',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            200 =>
            array (
                'id' => 701,
                'poskod' => '25598',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            201 =>
            array (
                'id' => 702,
                'poskod' => '25600',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            202 =>
            array (
                'id' => 703,
                'poskod' => '25604',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            203 =>
            array (
                'id' => 704,
                'poskod' => '25606',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            204 =>
            array (
                'id' => 705,
                'poskod' => '25608',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            205 =>
            array (
                'id' => 706,
                'poskod' => '25609',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            206 =>
            array (
                'id' => 707,
                'poskod' => '25610',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            207 =>
            array (
                'id' => 708,
                'poskod' => '25612',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            208 =>
            array (
                'id' => 709,
                'poskod' => '25614',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            209 =>
            array (
                'id' => 710,
                'poskod' => '25620',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            210 =>
            array (
                'id' => 711,
                'poskod' => '25622',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            211 =>
            array (
                'id' => 712,
                'poskod' => '25626',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            212 =>
            array (
                'id' => 713,
                'poskod' => '25628',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:24',
                'updated_at' => '2019-10-14 08:41:24',
            ),
            213 =>
            array (
                'id' => 714,
                'poskod' => '25630',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            214 =>
            array (
                'id' => 715,
                'poskod' => '25632',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            215 =>
            array (
                'id' => 716,
                'poskod' => '25644',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            216 =>
            array (
                'id' => 717,
                'poskod' => '25646',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            217 =>
            array (
                'id' => 718,
                'poskod' => '25648',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            218 =>
            array (
                'id' => 719,
                'poskod' => '25656',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            219 =>
            array (
                'id' => 720,
                'poskod' => '25660',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            220 =>
            array (
                'id' => 721,
                'poskod' => '25661',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            221 =>
            array (
                'id' => 722,
                'poskod' => '25662',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            222 =>
            array (
                'id' => 723,
                'poskod' => '25670',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            223 =>
            array (
                'id' => 724,
                'poskod' => '25672',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            224 =>
            array (
                'id' => 725,
                'poskod' => '25673',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            225 =>
            array (
                'id' => 726,
                'poskod' => '25674',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            226 =>
            array (
                'id' => 727,
                'poskod' => '25676',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            227 =>
            array (
                'id' => 728,
                'poskod' => '25690',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            228 =>
            array (
                'id' => 729,
                'poskod' => '25700',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:25',
                'updated_at' => '2019-10-14 08:41:25',
            ),
            229 =>
            array (
                'id' => 730,
                'poskod' => '25710',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            230 =>
            array (
                'id' => 731,
                'poskod' => '25720',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            231 =>
            array (
                'id' => 732,
                'poskod' => '25730',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            232 =>
            array (
                'id' => 733,
                'poskod' => '25740',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            233 =>
            array (
                'id' => 734,
                'poskod' => '25750',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            234 =>
            array (
                'id' => 735,
                'poskod' => '25990',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            235 =>
            array (
                'id' => 736,
                'poskod' => '26010',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            236 =>
            array (
                'id' => 737,
                'poskod' => '26040',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            237 =>
            array (
                'id' => 738,
                'poskod' => '26050',
                'bandar' => 'Bukit Goh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            238 =>
            array (
                'id' => 739,
                'poskod' => '26060',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            239 =>
            array (
                'id' => 740,
                'poskod' => '26070',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            240 =>
            array (
                'id' => 741,
                'poskod' => '26080',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            241 =>
            array (
                'id' => 742,
                'poskod' => '26090',
                'bandar' => 'Bukit Goh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            242 =>
            array (
                'id' => 743,
                'poskod' => '26100',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            243 =>
            array (
                'id' => 744,
                'poskod' => '26140',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            244 =>
            array (
                'id' => 745,
                'poskod' => '26150',
                'bandar' => 'Balok',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            245 =>
            array (
                'id' => 746,
                'poskod' => '26180',
                'bandar' => 'Kuantan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            246 =>
            array (
                'id' => 747,
                'poskod' => '26190',
                'bandar' => 'Balok',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            247 =>
            array (
                'id' => 748,
                'poskod' => '26200',
                'bandar' => 'Sungai Lembing',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            248 =>
            array (
                'id' => 749,
                'poskod' => '26250',
                'bandar' => 'Jaya Gading',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:26',
                'updated_at' => '2019-10-14 08:41:26',
            ),
            249 =>
            array (
                'id' => 750,
                'poskod' => '26300',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            250 =>
            array (
                'id' => 751,
                'poskod' => '26310',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            251 =>
            array (
                'id' => 752,
                'poskod' => '26320',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            252 =>
            array (
                'id' => 753,
                'poskod' => '26330',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            253 =>
            array (
                'id' => 754,
                'poskod' => '26340',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            254 =>
            array (
                'id' => 755,
                'poskod' => '26350',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            255 =>
            array (
                'id' => 756,
                'poskod' => '26360',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            256 =>
            array (
                'id' => 757,
                'poskod' => '26370',
                'bandar' => 'Gambang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            257 =>
            array (
                'id' => 758,
                'poskod' => '26400',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            258 =>
            array (
                'id' => 759,
                'poskod' => '26410',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            259 =>
            array (
                'id' => 760,
                'poskod' => '26420',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            260 =>
            array (
                'id' => 761,
                'poskod' => '26430',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            261 =>
            array (
                'id' => 762,
                'poskod' => '26440',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            262 =>
            array (
                'id' => 763,
                'poskod' => '26450',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            263 =>
            array (
                'id' => 764,
                'poskod' => '26460',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            264 =>
            array (
                'id' => 765,
                'poskod' => '26485',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            265 =>
            array (
                'id' => 766,
                'poskod' => '26490',
                'bandar' => 'Bandar Pusat Jengka',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            266 =>
            array (
                'id' => 767,
                'poskod' => '26500',
                'bandar' => 'Maran',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            267 =>
            array (
                'id' => 768,
                'poskod' => '26600',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:27',
                'updated_at' => '2019-10-14 08:41:27',
            ),
            268 =>
            array (
                'id' => 769,
                'poskod' => '26607',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            269 =>
            array (
                'id' => 770,
                'poskod' => '26609',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            270 =>
            array (
                'id' => 771,
                'poskod' => '26610',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            271 =>
            array (
                'id' => 772,
                'poskod' => '26620',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            272 =>
            array (
                'id' => 773,
                'poskod' => '26630',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            273 =>
            array (
                'id' => 774,
                'poskod' => '26640',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            274 =>
            array (
                'id' => 775,
                'poskod' => '26650',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            275 =>
            array (
                'id' => 776,
                'poskod' => '26660',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            276 =>
            array (
                'id' => 777,
                'poskod' => '26680',
                'bandar' => 'Pekan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            277 =>
            array (
                'id' => 778,
                'poskod' => '26690',
                'bandar' => 'Chini',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            278 =>
            array (
                'id' => 779,
                'poskod' => '26700',
                'bandar' => 'Muadzam Shah',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            279 =>
            array (
                'id' => 780,
                'poskod' => '26800',
                'bandar' => 'Kuala Rompin',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            280 =>
            array (
                'id' => 781,
                'poskod' => '26810',
                'bandar' => 'Kuala Rompin',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            281 =>
            array (
                'id' => 782,
                'poskod' => '26820',
                'bandar' => 'Kuala Rompin',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            282 =>
            array (
                'id' => 783,
                'poskod' => '26900',
                'bandar' => 'Bandar Tun Abdul Razak',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            283 =>
            array (
                'id' => 784,
                'poskod' => '27000',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            284 =>
            array (
                'id' => 785,
                'poskod' => '27010',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            285 =>
            array (
                'id' => 786,
                'poskod' => '27020',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:28',
                'updated_at' => '2019-10-14 08:41:28',
            ),
            286 =>
            array (
                'id' => 787,
                'poskod' => '27030',
                'bandar' => 'Damak',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            287 =>
            array (
                'id' => 788,
                'poskod' => '27040',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            288 =>
            array (
                'id' => 789,
                'poskod' => '27050',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            289 =>
            array (
                'id' => 790,
                'poskod' => '27060',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            290 =>
            array (
                'id' => 791,
                'poskod' => '27070',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            291 =>
            array (
                'id' => 792,
                'poskod' => '27090',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            292 =>
            array (
                'id' => 793,
                'poskod' => '27100',
                'bandar' => 'Padang Tengku',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            293 =>
            array (
                'id' => 794,
                'poskod' => '27150',
                'bandar' => 'Jerantut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            294 =>
            array (
                'id' => 795,
                'poskod' => '27200',
                'bandar' => 'Kuala Lipis',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            295 =>
            array (
                'id' => 796,
                'poskod' => '27207',
                'bandar' => 'Kuala Lipis',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            296 =>
            array (
                'id' => 797,
                'poskod' => '27209',
                'bandar' => 'Kuala Lipis',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            297 =>
            array (
                'id' => 798,
                'poskod' => '27210',
                'bandar' => 'Kuala Lipis',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            298 =>
            array (
                'id' => 799,
                'poskod' => '27300',
                'bandar' => 'Benta',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            299 =>
            array (
                'id' => 800,
                'poskod' => '27310',
                'bandar' => 'Benta',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            300 =>
            array (
                'id' => 801,
                'poskod' => '27400',
                'bandar' => 'Dong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            301 =>
            array (
                'id' => 802,
                'poskod' => '27600',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:29',
                'updated_at' => '2019-10-14 08:41:29',
            ),
            302 =>
            array (
                'id' => 803,
                'poskod' => '27607',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            303 =>
            array (
                'id' => 804,
                'poskod' => '27609',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            304 =>
            array (
                'id' => 805,
                'poskod' => '27610',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            305 =>
            array (
                'id' => 806,
                'poskod' => '27620',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            306 =>
            array (
                'id' => 807,
                'poskod' => '27630',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            307 =>
            array (
                'id' => 808,
                'poskod' => '27650',
                'bandar' => 'Sungai Koyan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            308 =>
            array (
                'id' => 809,
                'poskod' => '27660',
                'bandar' => 'Sega',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            309 =>
            array (
                'id' => 810,
                'poskod' => '27670',
                'bandar' => 'Raub',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            310 =>
            array (
                'id' => 811,
                'poskod' => '28000',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            311 =>
            array (
                'id' => 812,
                'poskod' => '28007',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            312 =>
            array (
                'id' => 813,
                'poskod' => '28009',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            313 =>
            array (
                'id' => 814,
                'poskod' => '28010',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            314 =>
            array (
                'id' => 815,
                'poskod' => '28020',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            315 =>
            array (
                'id' => 816,
                'poskod' => '28030',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            316 =>
            array (
                'id' => 817,
                'poskod' => '28040',
                'bandar' => 'Temerloh',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            317 =>
            array (
                'id' => 818,
                'poskod' => '28050',
                'bandar' => 'Kuala Krau',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            318 =>
            array (
                'id' => 819,
                'poskod' => '28100',
                'bandar' => 'Chenor',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:30',
                'updated_at' => '2019-10-14 08:41:30',
            ),
            319 =>
            array (
                'id' => 820,
                'poskod' => '28200',
                'bandar' => 'Bandar Bera',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            320 =>
            array (
                'id' => 821,
                'poskod' => '28300',
                'bandar' => 'Triang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            321 =>
            array (
                'id' => 822,
                'poskod' => '28310',
                'bandar' => 'Triang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            322 =>
            array (
                'id' => 823,
                'poskod' => '28320',
                'bandar' => 'Triang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            323 =>
            array (
                'id' => 824,
                'poskod' => '28330',
                'bandar' => 'Triang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            324 =>
            array (
                'id' => 825,
                'poskod' => '28340',
                'bandar' => 'Kemayan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            325 =>
            array (
                'id' => 826,
                'poskod' => '28380',
                'bandar' => 'Kemayan',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            326 =>
            array (
                'id' => 827,
                'poskod' => '28400',
                'bandar' => 'Mentakab',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            327 =>
            array (
                'id' => 828,
                'poskod' => '28407',
                'bandar' => 'Mentakab',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            328 =>
            array (
                'id' => 829,
                'poskod' => '28409',
                'bandar' => 'Mentakab',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            329 =>
            array (
                'id' => 830,
                'poskod' => '28500',
                'bandar' => 'Lanchang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            330 =>
            array (
                'id' => 831,
                'poskod' => '28600',
                'bandar' => 'Karak',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            331 =>
            array (
                'id' => 832,
                'poskod' => '28610',
                'bandar' => 'Karak',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            332 =>
            array (
                'id' => 833,
                'poskod' => '28620',
                'bandar' => 'Karak',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            333 =>
            array (
                'id' => 834,
                'poskod' => '28700',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:31',
                'updated_at' => '2019-10-14 08:41:31',
            ),
            334 =>
            array (
                'id' => 835,
                'poskod' => '28707',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            335 =>
            array (
                'id' => 836,
                'poskod' => '28709',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            336 =>
            array (
                'id' => 837,
                'poskod' => '28730',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            337 =>
            array (
                'id' => 838,
                'poskod' => '28740',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            338 =>
            array (
                'id' => 839,
                'poskod' => '28750',
                'bandar' => 'Bentong',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            339 =>
            array (
                'id' => 840,
                'poskod' => '28800',
                'bandar' => 'Lurah Bilut',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            340 =>
            array (
                'id' => 841,
                'poskod' => '30000',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            341 =>
            array (
                'id' => 842,
                'poskod' => '30010',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            342 =>
            array (
                'id' => 843,
                'poskod' => '30020',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            343 =>
            array (
                'id' => 844,
                'poskod' => '30100',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            344 =>
            array (
                'id' => 845,
                'poskod' => '30200',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            345 =>
            array (
                'id' => 846,
                'poskod' => '30250',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            346 =>
            array (
                'id' => 847,
                'poskod' => '30300',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            347 =>
            array (
                'id' => 848,
                'poskod' => '30350',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            348 =>
            array (
                'id' => 849,
                'poskod' => '30450',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            349 =>
            array (
                'id' => 850,
                'poskod' => '30500',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            350 =>
            array (
                'id' => 851,
                'poskod' => '30502',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:32',
                'updated_at' => '2019-10-14 08:41:32',
            ),
            351 =>
            array (
                'id' => 852,
                'poskod' => '30503',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            352 =>
            array (
                'id' => 853,
                'poskod' => '30504',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            353 =>
            array (
                'id' => 854,
                'poskod' => '30505',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            354 =>
            array (
                'id' => 855,
                'poskod' => '30506',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            355 =>
            array (
                'id' => 856,
                'poskod' => '30508',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            356 =>
            array (
                'id' => 857,
                'poskod' => '30510',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            357 =>
            array (
                'id' => 858,
                'poskod' => '30512',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            358 =>
            array (
                'id' => 859,
                'poskod' => '30516',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            359 =>
            array (
                'id' => 860,
                'poskod' => '30517',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            360 =>
            array (
                'id' => 861,
                'poskod' => '30518',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            361 =>
            array (
                'id' => 862,
                'poskod' => '30519',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            362 =>
            array (
                'id' => 863,
                'poskod' => '30520',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            363 =>
            array (
                'id' => 864,
                'poskod' => '30524',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            364 =>
            array (
                'id' => 865,
                'poskod' => '30532',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:33',
                'updated_at' => '2019-10-14 08:41:33',
            ),
            365 =>
            array (
                'id' => 866,
                'poskod' => '30534',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            366 =>
            array (
                'id' => 867,
                'poskod' => '30536',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            367 =>
            array (
                'id' => 868,
                'poskod' => '30540',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            368 =>
            array (
                'id' => 869,
                'poskod' => '30542',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            369 =>
            array (
                'id' => 870,
                'poskod' => '30546',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            370 =>
            array (
                'id' => 871,
                'poskod' => '30548',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            371 =>
            array (
                'id' => 872,
                'poskod' => '30550',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            372 =>
            array (
                'id' => 873,
                'poskod' => '30551',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            373 =>
            array (
                'id' => 874,
                'poskod' => '30552',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            374 =>
            array (
                'id' => 875,
                'poskod' => '30554',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            375 =>
            array (
                'id' => 876,
                'poskod' => '30556',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            376 =>
            array (
                'id' => 877,
                'poskod' => '30560',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            377 =>
            array (
                'id' => 878,
                'poskod' => '30564',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            378 =>
            array (
                'id' => 879,
                'poskod' => '30570',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            379 =>
            array (
                'id' => 880,
                'poskod' => '30576',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            380 =>
            array (
                'id' => 881,
                'poskod' => '30580',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            381 =>
            array (
                'id' => 882,
                'poskod' => '30582',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:34',
                'updated_at' => '2019-10-14 08:41:34',
            ),
            382 =>
            array (
                'id' => 883,
                'poskod' => '30586',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            383 =>
            array (
                'id' => 884,
                'poskod' => '30590',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            384 =>
            array (
                'id' => 885,
                'poskod' => '30592',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            385 =>
            array (
                'id' => 886,
                'poskod' => '30594',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            386 =>
            array (
                'id' => 887,
                'poskod' => '30596',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            387 =>
            array (
                'id' => 888,
                'poskod' => '30600',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            388 =>
            array (
                'id' => 889,
                'poskod' => '30604',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            389 =>
            array (
                'id' => 890,
                'poskod' => '30606',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            390 =>
            array (
                'id' => 891,
                'poskod' => '30609',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            391 =>
            array (
                'id' => 892,
                'poskod' => '30610',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            392 =>
            array (
                'id' => 893,
                'poskod' => '30612',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            393 =>
            array (
                'id' => 894,
                'poskod' => '30614',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            394 =>
            array (
                'id' => 895,
                'poskod' => '30620',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            395 =>
            array (
                'id' => 896,
                'poskod' => '30621',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            396 =>
            array (
                'id' => 897,
                'poskod' => '30622',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            397 =>
            array (
                'id' => 898,
                'poskod' => '30626',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            398 =>
            array (
                'id' => 899,
                'poskod' => '30628',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:35',
                'updated_at' => '2019-10-14 08:41:35',
            ),
            399 =>
            array (
                'id' => 900,
                'poskod' => '30630',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            400 =>
            array (
                'id' => 901,
                'poskod' => '30632',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            401 =>
            array (
                'id' => 902,
                'poskod' => '30634',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            402 =>
            array (
                'id' => 903,
                'poskod' => '30644',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            403 =>
            array (
                'id' => 904,
                'poskod' => '30646',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            404 =>
            array (
                'id' => 905,
                'poskod' => '30648',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            405 =>
            array (
                'id' => 906,
                'poskod' => '30656',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            406 =>
            array (
                'id' => 907,
                'poskod' => '30658',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            407 =>
            array (
                'id' => 908,
                'poskod' => '30660',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            408 =>
            array (
                'id' => 909,
                'poskod' => '30661',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            409 =>
            array (
                'id' => 910,
                'poskod' => '30662',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            410 =>
            array (
                'id' => 911,
                'poskod' => '30664',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            411 =>
            array (
                'id' => 912,
                'poskod' => '30668',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            412 =>
            array (
                'id' => 913,
                'poskod' => '30670',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            413 =>
            array (
                'id' => 914,
                'poskod' => '30673',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            414 =>
            array (
                'id' => 915,
                'poskod' => '30674',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:36',
                'updated_at' => '2019-10-14 08:41:36',
            ),
            415 =>
            array (
                'id' => 916,
                'poskod' => '30676',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            416 =>
            array (
                'id' => 917,
                'poskod' => '30682',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            417 =>
            array (
                'id' => 918,
                'poskod' => '30690',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            418 =>
            array (
                'id' => 919,
                'poskod' => '30700',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            419 =>
            array (
                'id' => 920,
                'poskod' => '30710',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            420 =>
            array (
                'id' => 921,
                'poskod' => '30720',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            421 =>
            array (
                'id' => 922,
                'poskod' => '30730',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            422 =>
            array (
                'id' => 923,
                'poskod' => '30740',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            423 =>
            array (
                'id' => 924,
                'poskod' => '30750',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            424 =>
            array (
                'id' => 925,
                'poskod' => '30760',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            425 =>
            array (
                'id' => 926,
                'poskod' => '30770',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            426 =>
            array (
                'id' => 927,
                'poskod' => '30780',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            427 =>
            array (
                'id' => 928,
                'poskod' => '30790',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            428 =>
            array (
                'id' => 929,
                'poskod' => '30800',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:37',
                'updated_at' => '2019-10-14 08:41:37',
            ),
            429 =>
            array (
                'id' => 930,
                'poskod' => '30810',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            430 =>
            array (
                'id' => 931,
                'poskod' => '30820',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            431 =>
            array (
                'id' => 932,
                'poskod' => '30830',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            432 =>
            array (
                'id' => 933,
                'poskod' => '30840',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            433 =>
            array (
                'id' => 934,
                'poskod' => '30900',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            434 =>
            array (
                'id' => 935,
                'poskod' => '30902',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            435 =>
            array (
                'id' => 936,
                'poskod' => '30904',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            436 =>
            array (
                'id' => 937,
                'poskod' => '30906',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            437 =>
            array (
                'id' => 938,
                'poskod' => '30908',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            438 =>
            array (
                'id' => 939,
                'poskod' => '30910',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            439 =>
            array (
                'id' => 940,
                'poskod' => '30912',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            440 =>
            array (
                'id' => 941,
                'poskod' => '30988',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            441 =>
            array (
                'id' => 942,
                'poskod' => '30990',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:38',
                'updated_at' => '2019-10-14 08:41:38',
            ),
            442 =>
            array (
                'id' => 943,
                'poskod' => '31000',
                'bandar' => 'Batu Gajah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            443 =>
            array (
                'id' => 944,
                'poskod' => '31007',
                'bandar' => 'Batu Gajah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            444 =>
            array (
                'id' => 945,
                'poskod' => '31009',
                'bandar' => 'Batu Gajah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            445 =>
            array (
                'id' => 946,
                'poskod' => '31050',
                'bandar' => 'Sungai Siput',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            446 =>
            array (
                'id' => 947,
                'poskod' => '31100',
                'bandar' => 'Sungai Siput',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            447 =>
            array (
                'id' => 948,
                'poskod' => '31150',
                'bandar' => 'Ulu Kinta',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            448 =>
            array (
                'id' => 949,
                'poskod' => '31200',
                'bandar' => 'Chemor',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            449 =>
            array (
                'id' => 950,
                'poskod' => '31250',
                'bandar' => 'Tanjong Rambutan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            450 =>
            array (
                'id' => 951,
                'poskod' => '31300',
                'bandar' => 'Kampung Kepayang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            451 =>
            array (
                'id' => 952,
                'poskod' => '31350',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            452 =>
            array (
                'id' => 953,
                'poskod' => '31400',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            453 =>
            array (
                'id' => 954,
                'poskod' => '31407',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            454 =>
            array (
                'id' => 955,
                'poskod' => '31409',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            455 =>
            array (
                'id' => 956,
                'poskod' => '31450',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            456 =>
            array (
                'id' => 957,
                'poskod' => '31500',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:39',
                'updated_at' => '2019-10-14 08:41:39',
            ),
            457 =>
            array (
                'id' => 958,
                'poskod' => '31550',
                'bandar' => 'Pusing',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            458 =>
            array (
                'id' => 959,
                'poskod' => '31560',
                'bandar' => 'Pusing',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            459 =>
            array (
                'id' => 960,
                'poskod' => '31600',
                'bandar' => 'Gopeng',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            460 =>
            array (
                'id' => 961,
                'poskod' => '31610',
                'bandar' => 'Gopeng',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            461 =>
            array (
                'id' => 962,
                'poskod' => '31650',
                'bandar' => 'Ipoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            462 =>
            array (
                'id' => 963,
                'poskod' => '31700',
                'bandar' => 'Malim Nawar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            463 =>
            array (
                'id' => 964,
                'poskod' => '31750',
                'bandar' => 'Tronoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            464 =>
            array (
                'id' => 965,
                'poskod' => '31800',
                'bandar' => 'Tanjong Tualang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            465 =>
            array (
                'id' => 966,
                'poskod' => '31850',
                'bandar' => 'Jeram',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            466 =>
            array (
                'id' => 967,
                'poskod' => '31900',
                'bandar' => 'Kampar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            467 =>
            array (
                'id' => 968,
                'poskod' => '31907',
                'bandar' => 'Kampar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            468 =>
            array (
                'id' => 969,
                'poskod' => '31909',
                'bandar' => 'Kampar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            469 =>
            array (
                'id' => 970,
                'poskod' => '31910',
                'bandar' => 'Kampar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            470 =>
            array (
                'id' => 971,
                'poskod' => '31920',
                'bandar' => 'Kampar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            471 =>
            array (
                'id' => 972,
                'poskod' => '31950',
                'bandar' => 'Mambang Di Awan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:40',
                'updated_at' => '2019-10-14 08:41:40',
            ),
            472 =>
            array (
                'id' => 973,
                'poskod' => '32000',
                'bandar' => 'Sitiawan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            473 =>
            array (
                'id' => 974,
                'poskod' => '32040',
                'bandar' => 'Seri Manjung',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            474 =>
            array (
                'id' => 975,
                'poskod' => '32100',
                'bandar' => 'TLDM Lumut',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            475 =>
            array (
                'id' => 976,
                'poskod' => '32200',
                'bandar' => 'Lumut',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            476 =>
            array (
                'id' => 977,
                'poskod' => '32300',
                'bandar' => 'Pangkor',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            477 =>
            array (
                'id' => 978,
                'poskod' => '32400',
                'bandar' => 'Ayer Tawar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            478 =>
            array (
                'id' => 979,
                'poskod' => '32500',
                'bandar' => 'Changkat Keruing',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            479 =>
            array (
                'id' => 980,
                'poskod' => '32600',
                'bandar' => 'Bota',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            480 =>
            array (
                'id' => 981,
                'poskod' => '32610',
                'bandar' => 'Bandar Seri Iskandar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            481 =>
            array (
                'id' => 982,
                'poskod' => '32700',
                'bandar' => 'Bruas',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            482 =>
            array (
                'id' => 983,
                'poskod' => '32800',
                'bandar' => 'Parit',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            483 =>
            array (
                'id' => 984,
                'poskod' => '32900',
                'bandar' => 'Lambor Kanan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            484 =>
            array (
                'id' => 985,
                'poskod' => '33000',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:41',
                'updated_at' => '2019-10-14 08:41:41',
            ),
            485 =>
            array (
                'id' => 986,
                'poskod' => '33007',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            486 =>
            array (
                'id' => 987,
                'poskod' => '33009',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            487 =>
            array (
                'id' => 988,
                'poskod' => '33010',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            488 =>
            array (
                'id' => 989,
                'poskod' => '33020',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            489 =>
            array (
                'id' => 990,
                'poskod' => '33030',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            490 =>
            array (
                'id' => 991,
                'poskod' => '33040',
                'bandar' => 'Kuala Kangsar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            491 =>
            array (
                'id' => 992,
                'poskod' => '33100',
                'bandar' => 'Pengkalan Hulu',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            492 =>
            array (
                'id' => 993,
                'poskod' => '33200',
                'bandar' => 'Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            493 =>
            array (
                'id' => 994,
                'poskod' => '33300',
                'bandar' => 'Gerik',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            494 =>
            array (
                'id' => 995,
                'poskod' => '33310',
                'bandar' => 'Gerik',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            495 =>
            array (
                'id' => 996,
                'poskod' => '33320',
                'bandar' => 'Gerik',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            496 =>
            array (
                'id' => 997,
                'poskod' => '33400',
                'bandar' => 'Lenggong',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            497 =>
            array (
                'id' => 998,
                'poskod' => '33410',
                'bandar' => 'Lenggong',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            498 =>
            array (
                'id' => 999,
                'poskod' => '33420',
                'bandar' => 'Lenggong',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            499 =>
            array (
                'id' => 1000,
                'poskod' => '33500',
                'bandar' => 'Sauk',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
        ));
        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'poskod' => '33600',
                'bandar' => 'Enggor',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            1 =>
            array (
                'id' => 1002,
                'poskod' => '33700',
                'bandar' => 'Padang Rengas',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            2 =>
            array (
                'id' => 1003,
                'poskod' => '33800',
                'bandar' => 'Manong',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:42',
                'updated_at' => '2019-10-14 08:41:42',
            ),
            3 =>
            array (
                'id' => 1004,
                'poskod' => '34000',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            4 =>
            array (
                'id' => 1005,
                'poskod' => '34007',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            5 =>
            array (
                'id' => 1006,
                'poskod' => '34008',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            6 =>
            array (
                'id' => 1007,
                'poskod' => '34009',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            7 =>
            array (
                'id' => 1008,
                'poskod' => '34010',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            8 =>
            array (
                'id' => 1009,
                'poskod' => '34020',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            9 =>
            array (
                'id' => 1010,
                'poskod' => '34030',
                'bandar' => 'Taiping',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            10 =>
            array (
                'id' => 1011,
                'poskod' => '34100',
                'bandar' => 'Selama',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            11 =>
            array (
                'id' => 1012,
                'poskod' => '34120',
                'bandar' => 'Selama',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            12 =>
            array (
                'id' => 1013,
                'poskod' => '34130',
                'bandar' => 'Selama',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            13 =>
            array (
                'id' => 1014,
                'poskod' => '34140',
                'bandar' => 'Rantau Panjang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            14 =>
            array (
                'id' => 1015,
                'poskod' => '34200',
                'bandar' => 'Parit Buntar',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            15 =>
            array (
                'id' => 1016,
                'poskod' => '34250',
                'bandar' => 'Tanjong Piandang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:43',
                'updated_at' => '2019-10-14 08:41:43',
            ),
            16 =>
            array (
                'id' => 1017,
                'poskod' => '34300',
                'bandar' => 'Bagan Serai',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            17 =>
            array (
                'id' => 1018,
                'poskod' => '34310',
                'bandar' => 'Bagan Serai',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            18 =>
            array (
                'id' => 1019,
                'poskod' => '34350',
                'bandar' => 'Kuala Kurau',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            19 =>
            array (
                'id' => 1020,
                'poskod' => '34400',
                'bandar' => 'Simpang Ampat Semanggol',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            20 =>
            array (
                'id' => 1021,
                'poskod' => '34500',
                'bandar' => 'Batu Kurau',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            21 =>
            array (
                'id' => 1022,
                'poskod' => '34510',
                'bandar' => 'Batu Kurau',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            22 =>
            array (
                'id' => 1023,
                'poskod' => '34520',
                'bandar' => 'Batu Kurau',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            23 =>
            array (
                'id' => 1024,
                'poskod' => '34600',
                'bandar' => 'Kamunting',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            24 =>
            array (
                'id' => 1025,
                'poskod' => '34650',
                'bandar' => 'Kuala Sepetang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            25 =>
            array (
                'id' => 1026,
                'poskod' => '34700',
                'bandar' => 'Simpang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            26 =>
            array (
                'id' => 1027,
                'poskod' => '34750',
                'bandar' => 'Matang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            27 =>
            array (
                'id' => 1028,
                'poskod' => '34800',
                'bandar' => 'Trong',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            28 =>
            array (
                'id' => 1029,
                'poskod' => '34850',
                'bandar' => 'Changkat Jering',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            29 =>
            array (
                'id' => 1030,
                'poskod' => '34900',
                'bandar' => 'Pantai Remis',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            30 =>
            array (
                'id' => 1031,
                'poskod' => '34950',
                'bandar' => 'Bandar Baharu',
                'negeri_id' => 2,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            31 =>
            array (
                'id' => 1032,
                'poskod' => '35000',
                'bandar' => 'Tapah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            32 =>
            array (
                'id' => 1033,
                'poskod' => '35007',
                'bandar' => 'Tapah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:44',
                'updated_at' => '2019-10-14 08:41:44',
            ),
            33 =>
            array (
                'id' => 1034,
                'poskod' => '35009',
                'bandar' => 'Tapah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            34 =>
            array (
                'id' => 1035,
                'poskod' => '35300',
                'bandar' => 'Chenderiang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            35 =>
            array (
                'id' => 1036,
                'poskod' => '35350',
                'bandar' => 'Temoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            36 =>
            array (
                'id' => 1037,
                'poskod' => '35400',
                'bandar' => 'Tapah Road',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            37 =>
            array (
                'id' => 1038,
                'poskod' => '35500',
                'bandar' => 'Bidor',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            38 =>
            array (
                'id' => 1039,
                'poskod' => '35600',
                'bandar' => 'Sungkai',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            39 =>
            array (
                'id' => 1040,
                'poskod' => '35700',
                'bandar' => 'Trolak',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            40 =>
            array (
                'id' => 1041,
                'poskod' => '35800',
                'bandar' => 'Slim River',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            41 =>
            array (
                'id' => 1042,
                'poskod' => '35820',
                'bandar' => 'Slim River',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            42 =>
            array (
                'id' => 1043,
                'poskod' => '35900',
                'bandar' => 'Tanjong Malim',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            43 =>
            array (
                'id' => 1044,
                'poskod' => '35907',
                'bandar' => 'Tanjong Malim',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            44 =>
            array (
                'id' => 1045,
                'poskod' => '35909',
                'bandar' => 'Tanjong Malim',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:45',
                'updated_at' => '2019-10-14 08:41:45',
            ),
            45 =>
            array (
                'id' => 1046,
                'poskod' => '35910',
                'bandar' => 'Tanjong Malim',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            46 =>
            array (
                'id' => 1047,
                'poskod' => '35950',
                'bandar' => 'Behrang Stesen',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            47 =>
            array (
                'id' => 1048,
                'poskod' => '36000',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            48 =>
            array (
                'id' => 1049,
                'poskod' => '36007',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            49 =>
            array (
                'id' => 1050,
                'poskod' => '36008',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            50 =>
            array (
                'id' => 1051,
                'poskod' => '36009',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            51 =>
            array (
                'id' => 1052,
                'poskod' => '36010',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            52 =>
            array (
                'id' => 1053,
                'poskod' => '36020',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            53 =>
            array (
                'id' => 1054,
                'poskod' => '36030',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            54 =>
            array (
                'id' => 1055,
                'poskod' => '36100',
                'bandar' => 'Bagan Datoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            55 =>
            array (
                'id' => 1056,
                'poskod' => '36110',
                'bandar' => 'Teluk Intan',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            56 =>
            array (
                'id' => 1057,
                'poskod' => '36200',
                'bandar' => 'Selekoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            57 =>
            array (
                'id' => 1058,
                'poskod' => '36207',
                'bandar' => 'Selekoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            58 =>
            array (
                'id' => 1059,
                'poskod' => '36209',
                'bandar' => 'Selekoh',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:46',
                'updated_at' => '2019-10-14 08:41:46',
            ),
            59 =>
            array (
                'id' => 1060,
                'poskod' => '36300',
                'bandar' => 'Sungai Sumun',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            60 =>
            array (
                'id' => 1061,
                'poskod' => '36307',
                'bandar' => 'Sungai Sumun',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            61 =>
            array (
                'id' => 1062,
                'poskod' => '36309',
                'bandar' => 'Sungai Sumun',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            62 =>
            array (
                'id' => 1063,
                'poskod' => '36400',
                'bandar' => 'Hutan Melintang',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            63 =>
            array (
                'id' => 1064,
                'poskod' => '36500',
                'bandar' => 'Ulu Bernam',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            64 =>
            array (
                'id' => 1065,
                'poskod' => '36600',
                'bandar' => 'Chenderong Balai',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            65 =>
            array (
                'id' => 1066,
                'poskod' => '36700',
                'bandar' => 'Langkap',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            66 =>
            array (
                'id' => 1067,
                'poskod' => '36750',
                'bandar' => 'Chikus',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            67 =>
            array (
                'id' => 1068,
                'poskod' => '36800',
                'bandar' => 'Kampung Gajah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            68 =>
            array (
                'id' => 1069,
                'poskod' => '36810',
                'bandar' => 'Kampung Gajah',
                'negeri_id' => 8,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            69 =>
            array (
                'id' => 1070,
                'poskod' => '39000',
                'bandar' => 'Tanah Rata',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            70 =>
            array (
                'id' => 1071,
                'poskod' => '39007',
                'bandar' => 'Tanah Rata',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            71 =>
            array (
                'id' => 1072,
                'poskod' => '39009',
                'bandar' => 'Tanah Rata',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            72 =>
            array (
                'id' => 1073,
                'poskod' => '39010',
                'bandar' => 'Tanah Rata',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            73 =>
            array (
                'id' => 1074,
                'poskod' => '39100',
                'bandar' => 'Brinchang',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:47',
                'updated_at' => '2019-10-14 08:41:47',
            ),
            74 =>
            array (
                'id' => 1075,
                'poskod' => '39200',
                'bandar' => 'Ringlet',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            75 =>
            array (
                'id' => 1076,
                'poskod' => '40000',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            76 =>
            array (
                'id' => 1077,
                'poskod' => '40100',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            77 =>
            array (
                'id' => 1078,
                'poskod' => '40150',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            78 =>
            array (
                'id' => 1079,
                'poskod' => '40160',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            79 =>
            array (
                'id' => 1080,
                'poskod' => '40170',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            80 =>
            array (
                'id' => 1081,
                'poskod' => '40200',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            81 =>
            array (
                'id' => 1082,
                'poskod' => '40300',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            82 =>
            array (
                'id' => 1083,
                'poskod' => '40400',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            83 =>
            array (
                'id' => 1084,
                'poskod' => '40450',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            84 =>
            array (
                'id' => 1085,
                'poskod' => '40460',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            85 =>
            array (
                'id' => 1086,
                'poskod' => '40470',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            86 =>
            array (
                'id' => 1087,
                'poskod' => '40500',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            87 =>
            array (
                'id' => 1088,
                'poskod' => '40502',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:48',
                'updated_at' => '2019-10-14 08:41:48',
            ),
            88 =>
            array (
                'id' => 1089,
                'poskod' => '40503',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            89 =>
            array (
                'id' => 1090,
                'poskod' => '40505',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            90 =>
            array (
                'id' => 1091,
                'poskod' => '40512',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            91 =>
            array (
                'id' => 1092,
                'poskod' => '40517',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            92 =>
            array (
                'id' => 1093,
                'poskod' => '40520',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            93 =>
            array (
                'id' => 1094,
                'poskod' => '40529',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            94 =>
            array (
                'id' => 1095,
                'poskod' => '40542',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            95 =>
            array (
                'id' => 1096,
                'poskod' => '40548',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            96 =>
            array (
                'id' => 1097,
                'poskod' => '40550',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            97 =>
            array (
                'id' => 1098,
                'poskod' => '40551',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            98 =>
            array (
                'id' => 1099,
                'poskod' => '40560',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            99 =>
            array (
                'id' => 1100,
                'poskod' => '40564',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            100 =>
            array (
                'id' => 1101,
                'poskod' => '40570',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            101 =>
            array (
                'id' => 1102,
                'poskod' => '40572',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            102 =>
            array (
                'id' => 1103,
                'poskod' => '40576',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            103 =>
            array (
                'id' => 1104,
                'poskod' => '40578',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:49',
                'updated_at' => '2019-10-14 08:41:49',
            ),
            104 =>
            array (
                'id' => 1105,
                'poskod' => '40582',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            105 =>
            array (
                'id' => 1106,
                'poskod' => '40590',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            106 =>
            array (
                'id' => 1107,
                'poskod' => '40592',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            107 =>
            array (
                'id' => 1108,
                'poskod' => '40594',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            108 =>
            array (
                'id' => 1109,
                'poskod' => '40596',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            109 =>
            array (
                'id' => 1110,
                'poskod' => '40598',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            110 =>
            array (
                'id' => 1111,
                'poskod' => '40604',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            111 =>
            array (
                'id' => 1112,
                'poskod' => '40607',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            112 =>
            array (
                'id' => 1113,
                'poskod' => '40608',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            113 =>
            array (
                'id' => 1114,
                'poskod' => '40610',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            114 =>
            array (
                'id' => 1115,
                'poskod' => '40612',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            115 =>
            array (
                'id' => 1116,
                'poskod' => '40620',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            116 =>
            array (
                'id' => 1117,
                'poskod' => '40622',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            117 =>
            array (
                'id' => 1118,
                'poskod' => '40626',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            118 =>
            array (
                'id' => 1119,
                'poskod' => '40632',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            119 =>
            array (
                'id' => 1120,
                'poskod' => '40646',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            120 =>
            array (
                'id' => 1121,
                'poskod' => '40648',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:50',
                'updated_at' => '2019-10-14 08:41:50',
            ),
            121 =>
            array (
                'id' => 1122,
                'poskod' => '40660',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            122 =>
            array (
                'id' => 1123,
                'poskod' => '40664',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            123 =>
            array (
                'id' => 1124,
                'poskod' => '40670',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            124 =>
            array (
                'id' => 1125,
                'poskod' => '40672',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            125 =>
            array (
                'id' => 1126,
                'poskod' => '40673',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            126 =>
            array (
                'id' => 1127,
                'poskod' => '40674',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            127 =>
            array (
                'id' => 1128,
                'poskod' => '40675',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            128 =>
            array (
                'id' => 1129,
                'poskod' => '40676',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            129 =>
            array (
                'id' => 1130,
                'poskod' => '40680',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            130 =>
            array (
                'id' => 1131,
                'poskod' => '40690',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            131 =>
            array (
                'id' => 1132,
                'poskod' => '40700',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            132 =>
            array (
                'id' => 1133,
                'poskod' => '40702',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            133 =>
            array (
                'id' => 1134,
                'poskod' => '40704',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:51',
                'updated_at' => '2019-10-14 08:41:51',
            ),
            134 =>
            array (
                'id' => 1135,
                'poskod' => '40706',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            135 =>
            array (
                'id' => 1136,
                'poskod' => '40708',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            136 =>
            array (
                'id' => 1137,
                'poskod' => '40710',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            137 =>
            array (
                'id' => 1138,
                'poskod' => '40712',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            138 =>
            array (
                'id' => 1139,
                'poskod' => '40714',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            139 =>
            array (
                'id' => 1140,
                'poskod' => '40716',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            140 =>
            array (
                'id' => 1141,
                'poskod' => '40718',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            141 =>
            array (
                'id' => 1142,
                'poskod' => '40720',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            142 =>
            array (
                'id' => 1143,
                'poskod' => '40722',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            143 =>
            array (
                'id' => 1144,
                'poskod' => '40724',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            144 =>
            array (
                'id' => 1145,
                'poskod' => '40726',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            145 =>
            array (
                'id' => 1146,
                'poskod' => '40728',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            146 =>
            array (
                'id' => 1147,
                'poskod' => '40730',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:52',
                'updated_at' => '2019-10-14 08:41:52',
            ),
            147 =>
            array (
                'id' => 1148,
                'poskod' => '40732',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            148 =>
            array (
                'id' => 1149,
                'poskod' => '40800',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            149 =>
            array (
                'id' => 1150,
                'poskod' => '40802',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            150 =>
            array (
                'id' => 1151,
                'poskod' => '40804',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            151 =>
            array (
                'id' => 1152,
                'poskod' => '40806',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            152 =>
            array (
                'id' => 1153,
                'poskod' => '40808',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            153 =>
            array (
                'id' => 1154,
                'poskod' => '40810',
                'bandar' => 'Shah Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            154 =>
            array (
                'id' => 1155,
                'poskod' => '40990',
                'bandar' => 'Shah Alam ',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            155 =>
            array (
                'id' => 1156,
                'poskod' => '41000',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            156 =>
            array (
                'id' => 1157,
                'poskod' => '41050',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            157 =>
            array (
                'id' => 1158,
                'poskod' => '41100',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            158 =>
            array (
                'id' => 1159,
                'poskod' => '41150',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            159 =>
            array (
                'id' => 1160,
                'poskod' => '41200',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            160 =>
            array (
                'id' => 1161,
                'poskod' => '41250',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:53',
                'updated_at' => '2019-10-14 08:41:53',
            ),
            161 =>
            array (
                'id' => 1162,
                'poskod' => '41300',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            162 =>
            array (
                'id' => 1163,
                'poskod' => '41400',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            163 =>
            array (
                'id' => 1164,
                'poskod' => '41506',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            164 =>
            array (
                'id' => 1165,
                'poskod' => '41560',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            165 =>
            array (
                'id' => 1166,
                'poskod' => '41586',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            166 =>
            array (
                'id' => 1167,
                'poskod' => '41672',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            167 =>
            array (
                'id' => 1168,
                'poskod' => '41700',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            168 =>
            array (
                'id' => 1169,
                'poskod' => '41710',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            169 =>
            array (
                'id' => 1170,
                'poskod' => '41720',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            170 =>
            array (
                'id' => 1171,
                'poskod' => '41900',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            171 =>
            array (
                'id' => 1172,
                'poskod' => '41902',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            172 =>
            array (
                'id' => 1173,
                'poskod' => '41904',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            173 =>
            array (
                'id' => 1174,
                'poskod' => '41906',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            174 =>
            array (
                'id' => 1175,
                'poskod' => '41908',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            175 =>
            array (
                'id' => 1176,
                'poskod' => '41910',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            176 =>
            array (
                'id' => 1177,
                'poskod' => '41912',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:54',
                'updated_at' => '2019-10-14 08:41:54',
            ),
            177 =>
            array (
                'id' => 1178,
                'poskod' => '41914',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            178 =>
            array (
                'id' => 1179,
                'poskod' => '41916',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            179 =>
            array (
                'id' => 1180,
                'poskod' => '41918',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            180 =>
            array (
                'id' => 1181,
                'poskod' => '41990',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            181 =>
            array (
                'id' => 1182,
                'poskod' => '42000',
                'bandar' => 'Pelabuhan Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            182 =>
            array (
                'id' => 1183,
                'poskod' => '42009',
                'bandar' => 'Pelabuhan Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            183 =>
            array (
                'id' => 1184,
                'poskod' => '42100',
                'bandar' => 'Klang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            184 =>
            array (
                'id' => 1185,
                'poskod' => '42200',
                'bandar' => 'Kapar',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            185 =>
            array (
                'id' => 1186,
                'poskod' => '42300',
                'bandar' => 'Bandar Puncak Alam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            186 =>
            array (
                'id' => 1187,
                'poskod' => '42425',
                'bandar' => 'Telok Panglima Garang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            187 =>
            array (
                'id' => 1188,
                'poskod' => '42500',
                'bandar' => 'Telok Panglima Garang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            188 =>
            array (
                'id' => 1189,
                'poskod' => '42507',
                'bandar' => 'Telok Panglima Garang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            189 =>
            array (
                'id' => 1190,
                'poskod' => '42509',
                'bandar' => 'Telok Panglima Garang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            190 =>
            array (
                'id' => 1191,
                'poskod' => '42600',
                'bandar' => 'Jenjarom',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            191 =>
            array (
                'id' => 1192,
                'poskod' => '42610',
                'bandar' => 'Jenjarom',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:55',
                'updated_at' => '2019-10-14 08:41:55',
            ),
            192 =>
            array (
                'id' => 1193,
                'poskod' => '42700',
                'bandar' => 'Banting',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            193 =>
            array (
                'id' => 1194,
                'poskod' => '42800',
                'bandar' => 'Tanjong Sepat',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            194 =>
            array (
                'id' => 1195,
                'poskod' => '42920',
                'bandar' => 'Pulau Indah',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            195 =>
            array (
                'id' => 1196,
                'poskod' => '42940',
                'bandar' => 'Pulau Ketam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            196 =>
            array (
                'id' => 1197,
                'poskod' => '42960',
                'bandar' => 'Pulau Carey',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            197 =>
            array (
                'id' => 1198,
                'poskod' => '43000',
                'bandar' => 'Kajang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            198 =>
            array (
                'id' => 1199,
                'poskod' => '43007',
                'bandar' => 'Kajang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            199 =>
            array (
                'id' => 1200,
                'poskod' => '43009',
                'bandar' => 'Kajang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            200 =>
            array (
                'id' => 1201,
                'poskod' => '43100',
                'bandar' => 'Hulu Langat',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            201 =>
            array (
                'id' => 1202,
                'poskod' => '43200',
                'bandar' => 'Cheras',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            202 =>
            array (
                'id' => 1203,
                'poskod' => '43207',
                'bandar' => 'Cheras',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            203 =>
            array (
                'id' => 1204,
                'poskod' => '43300',
                'bandar' => 'Seri Kembangan',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            204 =>
            array (
                'id' => 1205,
                'poskod' => '43400',
                'bandar' => 'Serdang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            205 =>
            array (
                'id' => 1206,
                'poskod' => '43500',
                'bandar' => 'Semenyih',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            206 =>
            array (
                'id' => 1207,
                'poskod' => '43558',
                'bandar' => 'Kajang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:56',
                'updated_at' => '2019-10-14 08:41:56',
            ),
            207 =>
            array (
                'id' => 1208,
                'poskod' => '43600',
                'bandar' => 'Bangi',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            208 =>
            array (
                'id' => 1209,
                'poskod' => '43650',
                'bandar' => 'Bandar Baru Bangi',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            209 =>
            array (
                'id' => 1210,
                'poskod' => '43700',
                'bandar' => 'Beranang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            210 =>
            array (
                'id' => 1211,
                'poskod' => '43800',
                'bandar' => 'Dengkil',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            211 =>
            array (
                'id' => 1212,
                'poskod' => '43807',
                'bandar' => 'Dengkil',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            212 =>
            array (
                'id' => 1213,
                'poskod' => '43900',
                'bandar' => 'Sepang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            213 =>
            array (
                'id' => 1214,
                'poskod' => '43950',
                'bandar' => 'Sungai Pelek',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            214 =>
            array (
                'id' => 1215,
                'poskod' => '44000',
                'bandar' => 'Kuala Kubu Baru',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            215 =>
            array (
                'id' => 1216,
                'poskod' => '44010',
                'bandar' => 'Kuala Kubu Baru',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            216 =>
            array (
                'id' => 1217,
                'poskod' => '44020',
                'bandar' => 'Kuala Kubu Baru',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            217 =>
            array (
                'id' => 1218,
                'poskod' => '44100',
                'bandar' => 'Kerling',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            218 =>
            array (
                'id' => 1219,
                'poskod' => '44110',
                'bandar' => 'Kuala Kubu Baru',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            219 =>
            array (
                'id' => 1220,
                'poskod' => '44200',
                'bandar' => 'Rasa',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            220 =>
            array (
                'id' => 1221,
                'poskod' => '44300',
                'bandar' => 'Batang Kali',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            221 =>
            array (
                'id' => 1222,
                'poskod' => '45000',
                'bandar' => 'Kuala Selangor',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            222 =>
            array (
                'id' => 1223,
                'poskod' => '45100',
                'bandar' => 'Sungai Ayer Tawar',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:57',
                'updated_at' => '2019-10-14 08:41:57',
            ),
            223 =>
            array (
                'id' => 1224,
                'poskod' => '45200',
                'bandar' => 'Sabak Bernam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            224 =>
            array (
                'id' => 1225,
                'poskod' => '45207',
                'bandar' => 'Sabak Bernam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            225 =>
            array (
                'id' => 1226,
                'poskod' => '45209',
                'bandar' => 'Sabak Bernam',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            226 =>
            array (
                'id' => 1227,
                'poskod' => '45300',
                'bandar' => 'Sungai Besar',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            227 =>
            array (
                'id' => 1228,
                'poskod' => '45400',
                'bandar' => 'Sekinchan',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            228 =>
            array (
                'id' => 1229,
                'poskod' => '45500',
                'bandar' => 'Tanjong Karang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            229 =>
            array (
                'id' => 1230,
                'poskod' => '45600',
                'bandar' => 'Batang Berjuntai',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            230 =>
            array (
                'id' => 1231,
                'poskod' => '45607',
                'bandar' => 'Batang Berjuntai',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            231 =>
            array (
                'id' => 1232,
                'poskod' => '45609',
                'bandar' => 'Batang Berjuntai',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            232 =>
            array (
                'id' => 1233,
                'poskod' => '45620',
                'bandar' => 'Batang Berjuntai',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            233 =>
            array (
                'id' => 1234,
                'poskod' => '45700',
                'bandar' => 'Bukit Rotan',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            234 =>
            array (
                'id' => 1235,
                'poskod' => '45800',
                'bandar' => 'Jeram',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            235 =>
            array (
                'id' => 1236,
                'poskod' => '46000',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            236 =>
            array (
                'id' => 1237,
                'poskod' => '46050',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            237 =>
            array (
                'id' => 1238,
                'poskod' => '46100',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:58',
                'updated_at' => '2019-10-14 08:41:58',
            ),
            238 =>
            array (
                'id' => 1239,
                'poskod' => '46150',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            239 =>
            array (
                'id' => 1240,
                'poskod' => '46200',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            240 =>
            array (
                'id' => 1241,
                'poskod' => '46300',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            241 =>
            array (
                'id' => 1242,
                'poskod' => '46350',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            242 =>
            array (
                'id' => 1243,
                'poskod' => '46400',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            243 =>
            array (
                'id' => 1244,
                'poskod' => '46506',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            244 =>
            array (
                'id' => 1245,
                'poskod' => '46547',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            245 =>
            array (
                'id' => 1246,
                'poskod' => '46549',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            246 =>
            array (
                'id' => 1247,
                'poskod' => '46551',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            247 =>
            array (
                'id' => 1248,
                'poskod' => '46564',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            248 =>
            array (
                'id' => 1249,
                'poskod' => '46582',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            249 =>
            array (
                'id' => 1250,
                'poskod' => '46598',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            250 =>
            array (
                'id' => 1251,
                'poskod' => '46662',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            251 =>
            array (
                'id' => 1252,
                'poskod' => '46667',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            252 =>
            array (
                'id' => 1253,
                'poskod' => '46668',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            253 =>
            array (
                'id' => 1254,
                'poskod' => '46672',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            254 =>
            array (
                'id' => 1255,
                'poskod' => '46675',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:41:59',
                'updated_at' => '2019-10-14 08:41:59',
            ),
            255 =>
            array (
                'id' => 1256,
                'poskod' => '46700',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            256 =>
            array (
                'id' => 1257,
                'poskod' => '46710',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            257 =>
            array (
                'id' => 1258,
                'poskod' => '46720',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            258 =>
            array (
                'id' => 1259,
                'poskod' => '46730',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            259 =>
            array (
                'id' => 1260,
                'poskod' => '46740',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            260 =>
            array (
                'id' => 1261,
                'poskod' => '46750',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            261 =>
            array (
                'id' => 1262,
                'poskod' => '46760',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            262 =>
            array (
                'id' => 1263,
                'poskod' => '46770',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            263 =>
            array (
                'id' => 1264,
                'poskod' => '46780',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            264 =>
            array (
                'id' => 1265,
                'poskod' => '46781',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            265 =>
            array (
                'id' => 1266,
                'poskod' => '46782',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            266 =>
            array (
                'id' => 1267,
                'poskod' => '46783',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            267 =>
            array (
                'id' => 1268,
                'poskod' => '46784',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            268 =>
            array (
                'id' => 1269,
                'poskod' => '46785',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:00',
                'updated_at' => '2019-10-14 08:42:00',
            ),
            269 =>
            array (
                'id' => 1270,
                'poskod' => '46786',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            270 =>
            array (
                'id' => 1271,
                'poskod' => '46787',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            271 =>
            array (
                'id' => 1272,
                'poskod' => '46788',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            272 =>
            array (
                'id' => 1273,
                'poskod' => '46789',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            273 =>
            array (
                'id' => 1274,
                'poskod' => '46790',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            274 =>
            array (
                'id' => 1275,
                'poskod' => '46791',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            275 =>
            array (
                'id' => 1276,
                'poskod' => '46792',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            276 =>
            array (
                'id' => 1277,
                'poskod' => '46793',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            277 =>
            array (
                'id' => 1278,
                'poskod' => '46794',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            278 =>
            array (
                'id' => 1279,
                'poskod' => '46795',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            279 =>
            array (
                'id' => 1280,
                'poskod' => '46796',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            280 =>
            array (
                'id' => 1281,
                'poskod' => '46797',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            281 =>
            array (
                'id' => 1282,
                'poskod' => '46798',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            282 =>
            array (
                'id' => 1283,
                'poskod' => '46799',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            283 =>
            array (
                'id' => 1284,
                'poskod' => '46800',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            284 =>
            array (
                'id' => 1285,
                'poskod' => '46801',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            285 =>
            array (
                'id' => 1286,
                'poskod' => '46802',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:01',
                'updated_at' => '2019-10-14 08:42:01',
            ),
            286 =>
            array (
                'id' => 1287,
                'poskod' => '46803',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            287 =>
            array (
                'id' => 1288,
                'poskod' => '46804',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            288 =>
            array (
                'id' => 1289,
                'poskod' => '46805',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            289 =>
            array (
                'id' => 1290,
                'poskod' => '46806',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            290 =>
            array (
                'id' => 1291,
                'poskod' => '46860',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            291 =>
            array (
                'id' => 1292,
                'poskod' => '46870',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            292 =>
            array (
                'id' => 1293,
                'poskod' => '46960',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            293 =>
            array (
                'id' => 1294,
                'poskod' => '46962',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            294 =>
            array (
                'id' => 1295,
                'poskod' => '46964',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            295 =>
            array (
                'id' => 1296,
                'poskod' => '46966',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            296 =>
            array (
                'id' => 1297,
                'poskod' => '46968',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            297 =>
            array (
                'id' => 1298,
                'poskod' => '46970',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            298 =>
            array (
                'id' => 1299,
                'poskod' => '46972',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            299 =>
            array (
                'id' => 1300,
                'poskod' => '46974',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            300 =>
            array (
                'id' => 1301,
                'poskod' => '46976',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            301 =>
            array (
                'id' => 1302,
                'poskod' => '46978',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:02',
                'updated_at' => '2019-10-14 08:42:02',
            ),
            302 =>
            array (
                'id' => 1303,
                'poskod' => '47000',
                'bandar' => 'Sungai Buloh',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            303 =>
            array (
                'id' => 1304,
                'poskod' => '47100',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            304 =>
            array (
                'id' => 1305,
                'poskod' => '47110',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            305 =>
            array (
                'id' => 1306,
                'poskod' => '47120',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            306 =>
            array (
                'id' => 1307,
                'poskod' => '47130',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            307 =>
            array (
                'id' => 1308,
                'poskod' => '47140',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            308 =>
            array (
                'id' => 1309,
                'poskod' => '47150',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            309 =>
            array (
                'id' => 1310,
                'poskod' => '47160',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            310 =>
            array (
                'id' => 1311,
                'poskod' => '47170',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            311 =>
            array (
                'id' => 1312,
                'poskod' => '47180',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            312 =>
            array (
                'id' => 1313,
                'poskod' => '47190',
                'bandar' => 'Puchong',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            313 =>
            array (
                'id' => 1314,
                'poskod' => '47200',
                'bandar' => 'Subang Airport',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            314 =>
            array (
                'id' => 1315,
                'poskod' => '47300',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            315 =>
            array (
                'id' => 1316,
                'poskod' => '47301',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            316 =>
            array (
                'id' => 1317,
                'poskod' => '47307',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:03',
                'updated_at' => '2019-10-14 08:42:03',
            ),
            317 =>
            array (
                'id' => 1318,
                'poskod' => '47308',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            318 =>
            array (
                'id' => 1319,
                'poskod' => '47400',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            319 =>
            array (
                'id' => 1320,
                'poskod' => '47410',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            320 =>
            array (
                'id' => 1321,
                'poskod' => '47500',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            321 =>
            array (
                'id' => 1322,
                'poskod' => '47507',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            322 =>
            array (
                'id' => 1323,
                'poskod' => '47600',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            323 =>
            array (
                'id' => 1324,
                'poskod' => '47610',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            324 =>
            array (
                'id' => 1325,
                'poskod' => '47620',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            325 =>
            array (
                'id' => 1326,
                'poskod' => '47630',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            326 =>
            array (
                'id' => 1327,
                'poskod' => '47640',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            327 =>
            array (
                'id' => 1328,
                'poskod' => '47650',
                'bandar' => 'Subang Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            328 =>
            array (
                'id' => 1329,
                'poskod' => '47800',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            329 =>
            array (
                'id' => 1330,
                'poskod' => '47810',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            330 =>
            array (
                'id' => 1331,
                'poskod' => '47820',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            331 =>
            array (
                'id' => 1332,
                'poskod' => '47830',
                'bandar' => 'Petaling Jaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            332 =>
            array (
                'id' => 1333,
                'poskod' => '48000',
                'bandar' => 'Rawang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            333 =>
            array (
                'id' => 1334,
                'poskod' => '48010',
                'bandar' => 'Rawang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            334 =>
            array (
                'id' => 1335,
                'poskod' => '48020',
                'bandar' => 'Rawang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:04',
                'updated_at' => '2019-10-14 08:42:04',
            ),
            335 =>
            array (
                'id' => 1336,
                'poskod' => '48050',
                'bandar' => 'Rawang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            336 =>
            array (
                'id' => 1337,
                'poskod' => '48100',
                'bandar' => 'Batu Arang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            337 =>
            array (
                'id' => 1338,
                'poskod' => '48200',
                'bandar' => 'Serendah',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            338 =>
            array (
                'id' => 1339,
                'poskod' => '48300',
                'bandar' => 'Rawang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            339 =>
            array (
                'id' => 1340,
                'poskod' => '49000',
                'bandar' => 'Bukit Fraser',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            340 =>
            array (
                'id' => 1341,
                'poskod' => '50000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            341 =>
            array (
                'id' => 1342,
                'poskod' => '50050',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            342 =>
            array (
                'id' => 1343,
                'poskod' => '50088',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            343 =>
            array (
                'id' => 1344,
                'poskod' => '50100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            344 =>
            array (
                'id' => 1345,
                'poskod' => '50150',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            345 =>
            array (
                'id' => 1346,
                'poskod' => '50200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            346 =>
            array (
                'id' => 1347,
                'poskod' => '50250',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            347 =>
            array (
                'id' => 1348,
                'poskod' => '50300',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            348 =>
            array (
                'id' => 1349,
                'poskod' => '50350',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:05',
                'updated_at' => '2019-10-14 08:42:05',
            ),
            349 =>
            array (
                'id' => 1350,
                'poskod' => '50400',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            350 =>
            array (
                'id' => 1351,
                'poskod' => '50450',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            351 =>
            array (
                'id' => 1352,
                'poskod' => '50460',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            352 =>
            array (
                'id' => 1353,
                'poskod' => '50470',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            353 =>
            array (
                'id' => 1354,
                'poskod' => '50480',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            354 =>
            array (
                'id' => 1355,
                'poskod' => '50490',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            355 =>
            array (
                'id' => 1356,
                'poskod' => '50500',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            356 =>
            array (
                'id' => 1357,
                'poskod' => '50502',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            357 =>
            array (
                'id' => 1358,
                'poskod' => '50504',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            358 =>
            array (
                'id' => 1359,
                'poskod' => '50505',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            359 =>
            array (
                'id' => 1360,
                'poskod' => '50506',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            360 =>
            array (
                'id' => 1361,
                'poskod' => '50507',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            361 =>
            array (
                'id' => 1362,
                'poskod' => '50508',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            362 =>
            array (
                'id' => 1363,
                'poskod' => '50512',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            363 =>
            array (
                'id' => 1364,
                'poskod' => '50514',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:06',
                'updated_at' => '2019-10-14 08:42:06',
            ),
            364 =>
            array (
                'id' => 1365,
                'poskod' => '50515',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            365 =>
            array (
                'id' => 1366,
                'poskod' => '50519',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            366 =>
            array (
                'id' => 1367,
                'poskod' => '50528',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            367 =>
            array (
                'id' => 1368,
                'poskod' => '50529',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            368 =>
            array (
                'id' => 1369,
                'poskod' => '50530',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            369 =>
            array (
                'id' => 1370,
                'poskod' => '50532',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            370 =>
            array (
                'id' => 1371,
                'poskod' => '50534',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            371 =>
            array (
                'id' => 1372,
                'poskod' => '50536',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            372 =>
            array (
                'id' => 1373,
                'poskod' => '50540',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            373 =>
            array (
                'id' => 1374,
                'poskod' => '50544',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            374 =>
            array (
                'id' => 1375,
                'poskod' => '50546',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            375 =>
            array (
                'id' => 1376,
                'poskod' => '50548',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            376 =>
            array (
                'id' => 1377,
                'poskod' => '50550',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            377 =>
            array (
                'id' => 1378,
                'poskod' => '50551',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            378 =>
            array (
                'id' => 1379,
                'poskod' => '50552',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            379 =>
            array (
                'id' => 1380,
                'poskod' => '50554',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:07',
                'updated_at' => '2019-10-14 08:42:07',
            ),
            380 =>
            array (
                'id' => 1381,
                'poskod' => '50556',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            381 =>
            array (
                'id' => 1382,
                'poskod' => '50560',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            382 =>
            array (
                'id' => 1383,
                'poskod' => '50562',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            383 =>
            array (
                'id' => 1384,
                'poskod' => '50564',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            384 =>
            array (
                'id' => 1385,
                'poskod' => '50566',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            385 =>
            array (
                'id' => 1386,
                'poskod' => '50568',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            386 =>
            array (
                'id' => 1387,
                'poskod' => '50572',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            387 =>
            array (
                'id' => 1388,
                'poskod' => '50576',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            388 =>
            array (
                'id' => 1389,
                'poskod' => '50578',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            389 =>
            array (
                'id' => 1390,
                'poskod' => '50580',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            390 =>
            array (
                'id' => 1391,
                'poskod' => '50582',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            391 =>
            array (
                'id' => 1392,
                'poskod' => '50586',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            392 =>
            array (
                'id' => 1393,
                'poskod' => '50588',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            393 =>
            array (
                'id' => 1394,
                'poskod' => '50590',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            394 =>
            array (
                'id' => 1395,
                'poskod' => '50592',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:08',
                'updated_at' => '2019-10-14 08:42:08',
            ),
            395 =>
            array (
                'id' => 1396,
                'poskod' => '50594',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            396 =>
            array (
                'id' => 1397,
                'poskod' => '50596',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            397 =>
            array (
                'id' => 1398,
                'poskod' => '50598',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            398 =>
            array (
                'id' => 1399,
                'poskod' => '50599',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            399 =>
            array (
                'id' => 1400,
                'poskod' => '50600',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            400 =>
            array (
                'id' => 1401,
                'poskod' => '50603',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            401 =>
            array (
                'id' => 1402,
                'poskod' => '50604',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            402 =>
            array (
                'id' => 1403,
                'poskod' => '50605',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            403 =>
            array (
                'id' => 1404,
                'poskod' => '50608',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            404 =>
            array (
                'id' => 1405,
                'poskod' => '50609',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            405 =>
            array (
                'id' => 1406,
                'poskod' => '50610',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            406 =>
            array (
                'id' => 1407,
                'poskod' => '50612',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            407 =>
            array (
                'id' => 1408,
                'poskod' => '50614',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            408 =>
            array (
                'id' => 1409,
                'poskod' => '50620',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            409 =>
            array (
                'id' => 1410,
                'poskod' => '50621',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:09',
                'updated_at' => '2019-10-14 08:42:09',
            ),
            410 =>
            array (
                'id' => 1411,
                'poskod' => '50622',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            411 =>
            array (
                'id' => 1412,
                'poskod' => '50623',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            412 =>
            array (
                'id' => 1413,
                'poskod' => '50626',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            413 =>
            array (
                'id' => 1414,
                'poskod' => '50632',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            414 =>
            array (
                'id' => 1415,
                'poskod' => '50634',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            415 =>
            array (
                'id' => 1416,
                'poskod' => '50636',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            416 =>
            array (
                'id' => 1417,
                'poskod' => '50638',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            417 =>
            array (
                'id' => 1418,
                'poskod' => '50640',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            418 =>
            array (
                'id' => 1419,
                'poskod' => '50642',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            419 =>
            array (
                'id' => 1420,
                'poskod' => '50644',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            420 =>
            array (
                'id' => 1421,
                'poskod' => '50646',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            421 =>
            array (
                'id' => 1422,
                'poskod' => '50648',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            422 =>
            array (
                'id' => 1423,
                'poskod' => '50650',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            423 =>
            array (
                'id' => 1424,
                'poskod' => '50652',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            424 =>
            array (
                'id' => 1425,
                'poskod' => '50653',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            425 =>
            array (
                'id' => 1426,
                'poskod' => '50656',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            426 =>
            array (
                'id' => 1427,
                'poskod' => '50658',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            427 =>
            array (
                'id' => 1428,
                'poskod' => '50660',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:10',
                'updated_at' => '2019-10-14 08:42:10',
            ),
            428 =>
            array (
                'id' => 1429,
                'poskod' => '50661',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            429 =>
            array (
                'id' => 1430,
                'poskod' => '50662',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            430 =>
            array (
                'id' => 1431,
                'poskod' => '50664',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            431 =>
            array (
                'id' => 1432,
                'poskod' => '50666',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            432 =>
            array (
                'id' => 1433,
                'poskod' => '50668',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            433 =>
            array (
                'id' => 1434,
                'poskod' => '50670',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            434 =>
            array (
                'id' => 1435,
                'poskod' => '50672',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            435 =>
            array (
                'id' => 1436,
                'poskod' => '50673',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            436 =>
            array (
                'id' => 1437,
                'poskod' => '50676',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            437 =>
            array (
                'id' => 1438,
                'poskod' => '50677',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            438 =>
            array (
                'id' => 1439,
                'poskod' => '50678',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            439 =>
            array (
                'id' => 1440,
                'poskod' => '50680',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            440 =>
            array (
                'id' => 1441,
                'poskod' => '50682',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            441 =>
            array (
                'id' => 1442,
                'poskod' => '50684',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            442 =>
            array (
                'id' => 1443,
                'poskod' => '50688',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            443 =>
            array (
                'id' => 1444,
                'poskod' => '50694',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:11',
                'updated_at' => '2019-10-14 08:42:11',
            ),
            444 =>
            array (
                'id' => 1445,
                'poskod' => '50700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            445 =>
            array (
                'id' => 1446,
                'poskod' => '50702',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            446 =>
            array (
                'id' => 1447,
                'poskod' => '50704',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            447 =>
            array (
                'id' => 1448,
                'poskod' => '50706',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            448 =>
            array (
                'id' => 1449,
                'poskod' => '50708',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            449 =>
            array (
                'id' => 1450,
                'poskod' => '50710',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            450 =>
            array (
                'id' => 1451,
                'poskod' => '50712',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            451 =>
            array (
                'id' => 1452,
                'poskod' => '50714',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            452 =>
            array (
                'id' => 1453,
                'poskod' => '50716',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            453 =>
            array (
                'id' => 1454,
                'poskod' => '50718',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            454 =>
            array (
                'id' => 1455,
                'poskod' => '50720',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            455 =>
            array (
                'id' => 1456,
                'poskod' => '50722',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            456 =>
            array (
                'id' => 1457,
                'poskod' => '50724',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            457 =>
            array (
                'id' => 1458,
                'poskod' => '50726',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            458 =>
            array (
                'id' => 1459,
                'poskod' => '50728',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:12',
                'updated_at' => '2019-10-14 08:42:12',
            ),
            459 =>
            array (
                'id' => 1460,
                'poskod' => '50730',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            460 =>
            array (
                'id' => 1461,
                'poskod' => '50732',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            461 =>
            array (
                'id' => 1462,
                'poskod' => '50734',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            462 =>
            array (
                'id' => 1463,
                'poskod' => '50736',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            463 =>
            array (
                'id' => 1464,
                'poskod' => '50738',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            464 =>
            array (
                'id' => 1465,
                'poskod' => '50740',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            465 =>
            array (
                'id' => 1466,
                'poskod' => '50742',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            466 =>
            array (
                'id' => 1467,
                'poskod' => '50744',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            467 =>
            array (
                'id' => 1468,
                'poskod' => '50746',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            468 =>
            array (
                'id' => 1469,
                'poskod' => '50748',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            469 =>
            array (
                'id' => 1470,
                'poskod' => '50750',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            470 =>
            array (
                'id' => 1471,
                'poskod' => '50752',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            471 =>
            array (
                'id' => 1472,
                'poskod' => '50754',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            472 =>
            array (
                'id' => 1473,
                'poskod' => '50758',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            473 =>
            array (
                'id' => 1474,
                'poskod' => '50760',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:13',
                'updated_at' => '2019-10-14 08:42:13',
            ),
            474 =>
            array (
                'id' => 1475,
                'poskod' => '50762',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            475 =>
            array (
                'id' => 1476,
                'poskod' => '50764',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            476 =>
            array (
                'id' => 1477,
                'poskod' => '50766',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            477 =>
            array (
                'id' => 1478,
                'poskod' => '50768',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            478 =>
            array (
                'id' => 1479,
                'poskod' => '50770',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            479 =>
            array (
                'id' => 1480,
                'poskod' => '50772',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            480 =>
            array (
                'id' => 1481,
                'poskod' => '50774',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            481 =>
            array (
                'id' => 1482,
                'poskod' => '50776',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            482 =>
            array (
                'id' => 1483,
                'poskod' => '50778',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            483 =>
            array (
                'id' => 1484,
                'poskod' => '50780',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            484 =>
            array (
                'id' => 1485,
                'poskod' => '50782',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            485 =>
            array (
                'id' => 1486,
                'poskod' => '50784',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            486 =>
            array (
                'id' => 1487,
                'poskod' => '50786',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:14',
                'updated_at' => '2019-10-14 08:42:14',
            ),
            487 =>
            array (
                'id' => 1488,
                'poskod' => '50788',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            488 =>
            array (
                'id' => 1489,
                'poskod' => '50790',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            489 =>
            array (
                'id' => 1490,
                'poskod' => '50792',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            490 =>
            array (
                'id' => 1491,
                'poskod' => '50794',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            491 =>
            array (
                'id' => 1492,
                'poskod' => '50796',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            492 =>
            array (
                'id' => 1493,
                'poskod' => '50798',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            493 =>
            array (
                'id' => 1494,
                'poskod' => '50800',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            494 =>
            array (
                'id' => 1495,
                'poskod' => '50802',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            495 =>
            array (
                'id' => 1496,
                'poskod' => '50804',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            496 =>
            array (
                'id' => 1497,
                'poskod' => '50806',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            497 =>
            array (
                'id' => 1498,
                'poskod' => '50808',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            498 =>
            array (
                'id' => 1499,
                'poskod' => '50810',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            499 =>
            array (
                'id' => 1500,
                'poskod' => '50812',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
        ));
        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'poskod' => '50814',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            1 =>
            array (
                'id' => 1502,
                'poskod' => '50816',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            2 =>
            array (
                'id' => 1503,
                'poskod' => '50818',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            3 =>
            array (
                'id' => 1504,
                'poskod' => '50901',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:15',
                'updated_at' => '2019-10-14 08:42:15',
            ),
            4 =>
            array (
                'id' => 1505,
                'poskod' => '50902',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            5 =>
            array (
                'id' => 1506,
                'poskod' => '50903',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            6 =>
            array (
                'id' => 1507,
                'poskod' => '50904',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            7 =>
            array (
                'id' => 1508,
                'poskod' => '50906',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            8 =>
            array (
                'id' => 1509,
                'poskod' => '50907',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            9 =>
            array (
                'id' => 1510,
                'poskod' => '50908',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            10 =>
            array (
                'id' => 1511,
                'poskod' => '50909',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            11 =>
            array (
                'id' => 1512,
                'poskod' => '50910',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            12 =>
            array (
                'id' => 1513,
                'poskod' => '50911',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            13 =>
            array (
                'id' => 1514,
                'poskod' => '50912',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            14 =>
            array (
                'id' => 1515,
                'poskod' => '50913',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            15 =>
            array (
                'id' => 1516,
                'poskod' => '50914',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            16 =>
            array (
                'id' => 1517,
                'poskod' => '50915',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            17 =>
            array (
                'id' => 1518,
                'poskod' => '50916',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            18 =>
            array (
                'id' => 1519,
                'poskod' => '50917',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            19 =>
            array (
                'id' => 1520,
                'poskod' => '50918',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            20 =>
            array (
                'id' => 1521,
                'poskod' => '50919',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            21 =>
            array (
                'id' => 1522,
                'poskod' => '50920',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:16',
                'updated_at' => '2019-10-14 08:42:16',
            ),
            22 =>
            array (
                'id' => 1523,
                'poskod' => '50921',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            23 =>
            array (
                'id' => 1524,
                'poskod' => '50922',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            24 =>
            array (
                'id' => 1525,
                'poskod' => '50923',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            25 =>
            array (
                'id' => 1526,
                'poskod' => '50924',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            26 =>
            array (
                'id' => 1527,
                'poskod' => '50925',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            27 =>
            array (
                'id' => 1528,
                'poskod' => '50926',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            28 =>
            array (
                'id' => 1529,
                'poskod' => '50927',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            29 =>
            array (
                'id' => 1530,
                'poskod' => '50928',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            30 =>
            array (
                'id' => 1531,
                'poskod' => '50929',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            31 =>
            array (
                'id' => 1532,
                'poskod' => '50930',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            32 =>
            array (
                'id' => 1533,
                'poskod' => '50931',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            33 =>
            array (
                'id' => 1534,
                'poskod' => '50932',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            34 =>
            array (
                'id' => 1535,
                'poskod' => '50933',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            35 =>
            array (
                'id' => 1536,
                'poskod' => '50934',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            36 =>
            array (
                'id' => 1537,
                'poskod' => '50935',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            37 =>
            array (
                'id' => 1538,
                'poskod' => '50936',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:17',
                'updated_at' => '2019-10-14 08:42:17',
            ),
            38 =>
            array (
                'id' => 1539,
                'poskod' => '50937',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            39 =>
            array (
                'id' => 1540,
                'poskod' => '50938',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            40 =>
            array (
                'id' => 1541,
                'poskod' => '50939',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            41 =>
            array (
                'id' => 1542,
                'poskod' => '50940',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            42 =>
            array (
                'id' => 1543,
                'poskod' => '50941',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            43 =>
            array (
                'id' => 1544,
                'poskod' => '50942',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            44 =>
            array (
                'id' => 1545,
                'poskod' => '50943',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            45 =>
            array (
                'id' => 1546,
                'poskod' => '50944',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            46 =>
            array (
                'id' => 1547,
                'poskod' => '50945',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            47 =>
            array (
                'id' => 1548,
                'poskod' => '50946',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            48 =>
            array (
                'id' => 1549,
                'poskod' => '50947',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            49 =>
            array (
                'id' => 1550,
                'poskod' => '50948',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            50 =>
            array (
                'id' => 1551,
                'poskod' => '50949',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            51 =>
            array (
                'id' => 1552,
                'poskod' => '50950',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            52 =>
            array (
                'id' => 1553,
                'poskod' => '50988',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            53 =>
            array (
                'id' => 1554,
                'poskod' => '50989',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            54 =>
            array (
                'id' => 1555,
                'poskod' => '50990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:18',
                'updated_at' => '2019-10-14 08:42:18',
            ),
            55 =>
            array (
                'id' => 1556,
                'poskod' => '51000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            56 =>
            array (
                'id' => 1557,
                'poskod' => '51100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            57 =>
            array (
                'id' => 1558,
                'poskod' => '51200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            58 =>
            array (
                'id' => 1559,
                'poskod' => '51700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            59 =>
            array (
                'id' => 1560,
                'poskod' => '51990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            60 =>
            array (
                'id' => 1561,
                'poskod' => '52000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            61 =>
            array (
                'id' => 1562,
                'poskod' => '52100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            62 =>
            array (
                'id' => 1563,
                'poskod' => '52200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            63 =>
            array (
                'id' => 1564,
                'poskod' => '53000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            64 =>
            array (
                'id' => 1565,
                'poskod' => '53100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            65 =>
            array (
                'id' => 1566,
                'poskod' => '53200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            66 =>
            array (
                'id' => 1567,
                'poskod' => '53300',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            67 =>
            array (
                'id' => 1568,
                'poskod' => '53700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            68 =>
            array (
                'id' => 1569,
                'poskod' => '53800',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            69 =>
            array (
                'id' => 1570,
                'poskod' => '53990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            70 =>
            array (
                'id' => 1571,
                'poskod' => '54000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            71 =>
            array (
                'id' => 1572,
                'poskod' => '54100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:19',
                'updated_at' => '2019-10-14 08:42:19',
            ),
            72 =>
            array (
                'id' => 1573,
                'poskod' => '54200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            73 =>
            array (
                'id' => 1574,
                'poskod' => '55000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            74 =>
            array (
                'id' => 1575,
                'poskod' => '55100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            75 =>
            array (
                'id' => 1576,
                'poskod' => '55200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            76 =>
            array (
                'id' => 1577,
                'poskod' => '55300',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            77 =>
            array (
                'id' => 1578,
                'poskod' => '55700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            78 =>
            array (
                'id' => 1579,
                'poskod' => '55710',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            79 =>
            array (
                'id' => 1580,
                'poskod' => '55720',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            80 =>
            array (
                'id' => 1581,
                'poskod' => '55900',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            81 =>
            array (
                'id' => 1582,
                'poskod' => '55902',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            82 =>
            array (
                'id' => 1583,
                'poskod' => '55904',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            83 =>
            array (
                'id' => 1584,
                'poskod' => '55906',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            84 =>
            array (
                'id' => 1585,
                'poskod' => '55908',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            85 =>
            array (
                'id' => 1586,
                'poskod' => '55910',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            86 =>
            array (
                'id' => 1587,
                'poskod' => '55912',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            87 =>
            array (
                'id' => 1588,
                'poskod' => '55914',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            88 =>
            array (
                'id' => 1589,
                'poskod' => '55916',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:20',
                'updated_at' => '2019-10-14 08:42:20',
            ),
            89 =>
            array (
                'id' => 1590,
                'poskod' => '55918',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            90 =>
            array (
                'id' => 1591,
                'poskod' => '55920',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            91 =>
            array (
                'id' => 1592,
                'poskod' => '55922',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            92 =>
            array (
                'id' => 1593,
                'poskod' => '55924',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            93 =>
            array (
                'id' => 1594,
                'poskod' => '55926',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            94 =>
            array (
                'id' => 1595,
                'poskod' => '55928',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            95 =>
            array (
                'id' => 1596,
                'poskod' => '55930',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            96 =>
            array (
                'id' => 1597,
                'poskod' => '55932',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            97 =>
            array (
                'id' => 1598,
                'poskod' => '55934',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            98 =>
            array (
                'id' => 1599,
                'poskod' => '55990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            99 =>
            array (
                'id' => 1600,
                'poskod' => '56000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            100 =>
            array (
                'id' => 1601,
                'poskod' => '56100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            101 =>
            array (
                'id' => 1602,
                'poskod' => '57000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            102 =>
            array (
                'id' => 1603,
                'poskod' => '57100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            103 =>
            array (
                'id' => 1604,
                'poskod' => '57700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            104 =>
            array (
                'id' => 1605,
                'poskod' => '57990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            105 =>
            array (
                'id' => 1606,
                'poskod' => '58000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:21',
                'updated_at' => '2019-10-14 08:42:21',
            ),
            106 =>
            array (
                'id' => 1607,
                'poskod' => '58100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            107 =>
            array (
                'id' => 1608,
                'poskod' => '58200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            108 =>
            array (
                'id' => 1609,
                'poskod' => '58700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            109 =>
            array (
                'id' => 1610,
                'poskod' => '58990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            110 =>
            array (
                'id' => 1611,
                'poskod' => '59000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            111 =>
            array (
                'id' => 1612,
                'poskod' => '59100',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            112 =>
            array (
                'id' => 1613,
                'poskod' => '59200',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            113 =>
            array (
                'id' => 1614,
                'poskod' => '59700',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            114 =>
            array (
                'id' => 1615,
                'poskod' => '59800',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            115 =>
            array (
                'id' => 1616,
                'poskod' => '59990',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            116 =>
            array (
                'id' => 1617,
                'poskod' => '60000',
                'bandar' => 'Kuala Lumpur',
                'negeri_id' => 14,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            117 =>
            array (
                'id' => 1618,
                'poskod' => '62000',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            118 =>
            array (
                'id' => 1619,
                'poskod' => '62007',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            119 =>
            array (
                'id' => 1620,
                'poskod' => '62050',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            120 =>
            array (
                'id' => 1621,
                'poskod' => '62100',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            121 =>
            array (
                'id' => 1622,
                'poskod' => '62150',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            122 =>
            array (
                'id' => 1623,
                'poskod' => '62200',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            123 =>
            array (
                'id' => 1624,
                'poskod' => '62250',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:22',
                'updated_at' => '2019-10-14 08:42:22',
            ),
            124 =>
            array (
                'id' => 1625,
                'poskod' => '62300',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            125 =>
            array (
                'id' => 1626,
                'poskod' => '62502',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            126 =>
            array (
                'id' => 1627,
                'poskod' => '62504',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            127 =>
            array (
                'id' => 1628,
                'poskod' => '62505',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            128 =>
            array (
                'id' => 1629,
                'poskod' => '62506',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            129 =>
            array (
                'id' => 1630,
                'poskod' => '62510',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            130 =>
            array (
                'id' => 1631,
                'poskod' => '62512',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            131 =>
            array (
                'id' => 1632,
                'poskod' => '62514',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            132 =>
            array (
                'id' => 1633,
                'poskod' => '62516',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            133 =>
            array (
                'id' => 1634,
                'poskod' => '62517',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            134 =>
            array (
                'id' => 1635,
                'poskod' => '62518',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            135 =>
            array (
                'id' => 1636,
                'poskod' => '62519',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            136 =>
            array (
                'id' => 1637,
                'poskod' => '62520',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            137 =>
            array (
                'id' => 1638,
                'poskod' => '62522',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            138 =>
            array (
                'id' => 1639,
                'poskod' => '62524',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            139 =>
            array (
                'id' => 1640,
                'poskod' => '62526',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:23',
                'updated_at' => '2019-10-14 08:42:23',
            ),
            140 =>
            array (
                'id' => 1641,
                'poskod' => '62527',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            141 =>
            array (
                'id' => 1642,
                'poskod' => '62530',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            142 =>
            array (
                'id' => 1643,
                'poskod' => '62532',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            143 =>
            array (
                'id' => 1644,
                'poskod' => '62536',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            144 =>
            array (
                'id' => 1645,
                'poskod' => '62540',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            145 =>
            array (
                'id' => 1646,
                'poskod' => '62542',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            146 =>
            array (
                'id' => 1647,
                'poskod' => '62546',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            147 =>
            array (
                'id' => 1648,
                'poskod' => '62550',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            148 =>
            array (
                'id' => 1649,
                'poskod' => '62551',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            149 =>
            array (
                'id' => 1650,
                'poskod' => '62570',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            150 =>
            array (
                'id' => 1651,
                'poskod' => '62574',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            151 =>
            array (
                'id' => 1652,
                'poskod' => '62576',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            152 =>
            array (
                'id' => 1653,
                'poskod' => '62582',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            153 =>
            array (
                'id' => 1654,
                'poskod' => '62584',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            154 =>
            array (
                'id' => 1655,
                'poskod' => '62590',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            155 =>
            array (
                'id' => 1656,
                'poskod' => '62592',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            156 =>
            array (
                'id' => 1657,
                'poskod' => '62596',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            157 =>
            array (
                'id' => 1658,
                'poskod' => '62602',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            158 =>
            array (
                'id' => 1659,
                'poskod' => '62604',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            159 =>
            array (
                'id' => 1660,
                'poskod' => '62605',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:24',
                'updated_at' => '2019-10-14 08:42:24',
            ),
            160 =>
            array (
                'id' => 1661,
                'poskod' => '62606',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            161 =>
            array (
                'id' => 1662,
                'poskod' => '62616',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            162 =>
            array (
                'id' => 1663,
                'poskod' => '62618',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            163 =>
            array (
                'id' => 1664,
                'poskod' => '62620',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            164 =>
            array (
                'id' => 1665,
                'poskod' => '62623',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            165 =>
            array (
                'id' => 1666,
                'poskod' => '62624',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            166 =>
            array (
                'id' => 1667,
                'poskod' => '62628',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            167 =>
            array (
                'id' => 1668,
                'poskod' => '62630',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            168 =>
            array (
                'id' => 1669,
                'poskod' => '62632',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            169 =>
            array (
                'id' => 1670,
                'poskod' => '62648',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            170 =>
            array (
                'id' => 1671,
                'poskod' => '62652',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            171 =>
            array (
                'id' => 1672,
                'poskod' => '62654',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            172 =>
            array (
                'id' => 1673,
                'poskod' => '62662',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            173 =>
            array (
                'id' => 1674,
                'poskod' => '62668',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            174 =>
            array (
                'id' => 1675,
                'poskod' => '62670',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            175 =>
            array (
                'id' => 1676,
                'poskod' => '62674',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            176 =>
            array (
                'id' => 1677,
                'poskod' => '62675',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            177 =>
            array (
                'id' => 1678,
                'poskod' => '62676',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:25',
                'updated_at' => '2019-10-14 08:42:25',
            ),
            178 =>
            array (
                'id' => 1679,
                'poskod' => '62677',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            179 =>
            array (
                'id' => 1680,
                'poskod' => '62686',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            180 =>
            array (
                'id' => 1681,
                'poskod' => '62692',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            181 =>
            array (
                'id' => 1682,
                'poskod' => '62988',
                'bandar' => 'Putrajaya',
                'negeri_id' => 16,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            182 =>
            array (
                'id' => 1683,
                'poskod' => '63000',
                'bandar' => 'Cyberjaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            183 =>
            array (
                'id' => 1684,
                'poskod' => '63100',
                'bandar' => 'Cyberjaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            184 =>
            array (
                'id' => 1685,
                'poskod' => '63200',
                'bandar' => 'Cyberjaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            185 =>
            array (
                'id' => 1686,
                'poskod' => '63300',
                'bandar' => 'Cyberjaya',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            186 =>
            array (
                'id' => 1687,
                'poskod' => '64000',
                'bandar' => 'KLIA',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            187 =>
            array (
                'id' => 1688,
                'poskod' => '68000',
                'bandar' => 'Ampang',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            188 =>
            array (
                'id' => 1689,
                'poskod' => '68100',
                'bandar' => 'Batu Caves',
                'negeri_id' => 10,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            189 =>
            array (
                'id' => 1690,
                'poskod' => '69000',
                'bandar' => 'Genting Highlands',
                'negeri_id' => 6,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            190 =>
            array (
                'id' => 1691,
                'poskod' => '70000',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            191 =>
            array (
                'id' => 1692,
                'poskod' => '70100',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            192 =>
            array (
                'id' => 1693,
                'poskod' => '70200',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:26',
                'updated_at' => '2019-10-14 08:42:26',
            ),
            193 =>
            array (
                'id' => 1694,
                'poskod' => '70300',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            194 =>
            array (
                'id' => 1695,
                'poskod' => '70400',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            195 =>
            array (
                'id' => 1696,
                'poskod' => '70450',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            196 =>
            array (
                'id' => 1697,
                'poskod' => '70500',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            197 =>
            array (
                'id' => 1698,
                'poskod' => '70502',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            198 =>
            array (
                'id' => 1699,
                'poskod' => '70503',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            199 =>
            array (
                'id' => 1700,
                'poskod' => '70504',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            200 =>
            array (
                'id' => 1701,
                'poskod' => '70505',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            201 =>
            array (
                'id' => 1702,
                'poskod' => '70506',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            202 =>
            array (
                'id' => 1703,
                'poskod' => '70508',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            203 =>
            array (
                'id' => 1704,
                'poskod' => '70512',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            204 =>
            array (
                'id' => 1705,
                'poskod' => '70516',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            205 =>
            array (
                'id' => 1706,
                'poskod' => '70517',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            206 =>
            array (
                'id' => 1707,
                'poskod' => '70518',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            207 =>
            array (
                'id' => 1708,
                'poskod' => '70532',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            208 =>
            array (
                'id' => 1709,
                'poskod' => '70534',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            209 =>
            array (
                'id' => 1710,
                'poskod' => '70536',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            210 =>
            array (
                'id' => 1711,
                'poskod' => '70540',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:27',
                'updated_at' => '2019-10-14 08:42:27',
            ),
            211 =>
            array (
                'id' => 1712,
                'poskod' => '70546',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            212 =>
            array (
                'id' => 1713,
                'poskod' => '70548',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            213 =>
            array (
                'id' => 1714,
                'poskod' => '70550',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            214 =>
            array (
                'id' => 1715,
                'poskod' => '70551',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            215 =>
            array (
                'id' => 1716,
                'poskod' => '70558',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            216 =>
            array (
                'id' => 1717,
                'poskod' => '70560',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            217 =>
            array (
                'id' => 1718,
                'poskod' => '70564',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            218 =>
            array (
                'id' => 1719,
                'poskod' => '70570',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            219 =>
            array (
                'id' => 1720,
                'poskod' => '70572',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            220 =>
            array (
                'id' => 1721,
                'poskod' => '70576',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            221 =>
            array (
                'id' => 1722,
                'poskod' => '70578',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            222 =>
            array (
                'id' => 1723,
                'poskod' => '70582',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            223 =>
            array (
                'id' => 1724,
                'poskod' => '70586',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            224 =>
            array (
                'id' => 1725,
                'poskod' => '70590',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            225 =>
            array (
                'id' => 1726,
                'poskod' => '70592',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            226 =>
            array (
                'id' => 1727,
                'poskod' => '70594',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            227 =>
            array (
                'id' => 1728,
                'poskod' => '70596',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            228 =>
            array (
                'id' => 1729,
                'poskod' => '70600',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:28',
                'updated_at' => '2019-10-14 08:42:28',
            ),
            229 =>
            array (
                'id' => 1730,
                'poskod' => '70604',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            230 =>
            array (
                'id' => 1731,
                'poskod' => '70606',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            231 =>
            array (
                'id' => 1732,
                'poskod' => '70608',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            232 =>
            array (
                'id' => 1733,
                'poskod' => '70609',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            233 =>
            array (
                'id' => 1734,
                'poskod' => '70610',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            234 =>
            array (
                'id' => 1735,
                'poskod' => '70620',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            235 =>
            array (
                'id' => 1736,
                'poskod' => '70626',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            236 =>
            array (
                'id' => 1737,
                'poskod' => '70628',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            237 =>
            array (
                'id' => 1738,
                'poskod' => '70632',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            238 =>
            array (
                'id' => 1739,
                'poskod' => '70634',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            239 =>
            array (
                'id' => 1740,
                'poskod' => '70644',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            240 =>
            array (
                'id' => 1741,
                'poskod' => '70646',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            241 =>
            array (
                'id' => 1742,
                'poskod' => '70648',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            242 =>
            array (
                'id' => 1743,
                'poskod' => '70658',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            243 =>
            array (
                'id' => 1744,
                'poskod' => '70664',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            244 =>
            array (
                'id' => 1745,
                'poskod' => '70670',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            245 =>
            array (
                'id' => 1746,
                'poskod' => '70672',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            246 =>
            array (
                'id' => 1747,
                'poskod' => '70673',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:29',
                'updated_at' => '2019-10-14 08:42:29',
            ),
            247 =>
            array (
                'id' => 1748,
                'poskod' => '70674',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            248 =>
            array (
                'id' => 1749,
                'poskod' => '70676',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            249 =>
            array (
                'id' => 1750,
                'poskod' => '70690',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            250 =>
            array (
                'id' => 1751,
                'poskod' => '70700',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            251 =>
            array (
                'id' => 1752,
                'poskod' => '70710',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            252 =>
            array (
                'id' => 1753,
                'poskod' => '70720',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            253 =>
            array (
                'id' => 1754,
                'poskod' => '70730',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            254 =>
            array (
                'id' => 1755,
                'poskod' => '70740',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            255 =>
            array (
                'id' => 1756,
                'poskod' => '70750',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            256 =>
            array (
                'id' => 1757,
                'poskod' => '70990',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            257 =>
            array (
                'id' => 1758,
                'poskod' => '71000',
                'bandar' => 'Port Dickson',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            258 =>
            array (
                'id' => 1759,
                'poskod' => '71007',
                'bandar' => 'Port Dickson',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            259 =>
            array (
                'id' => 1760,
                'poskod' => '71009',
                'bandar' => 'Port Dickson',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            260 =>
            array (
                'id' => 1761,
                'poskod' => '71010',
                'bandar' => 'Port Dickson',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:30',
                'updated_at' => '2019-10-14 08:42:30',
            ),
            261 =>
            array (
                'id' => 1762,
                'poskod' => '71050',
                'bandar' => 'Si Rusa',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            262 =>
            array (
                'id' => 1763,
                'poskod' => '71059',
                'bandar' => 'Si Rusa',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            263 =>
            array (
                'id' => 1764,
                'poskod' => '71100',
                'bandar' => 'Rantau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            264 =>
            array (
                'id' => 1765,
                'poskod' => '71109',
                'bandar' => 'Rantau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            265 =>
            array (
                'id' => 1766,
                'poskod' => '71150',
                'bandar' => 'Linggi',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            266 =>
            array (
                'id' => 1767,
                'poskod' => '71159',
                'bandar' => 'Linggi',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            267 =>
            array (
                'id' => 1768,
                'poskod' => '71200',
                'bandar' => 'Rantau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            268 =>
            array (
                'id' => 1769,
                'poskod' => '71209',
                'bandar' => 'Rantau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            269 =>
            array (
                'id' => 1770,
                'poskod' => '71250',
                'bandar' => 'Si Rusa',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            270 =>
            array (
                'id' => 1771,
                'poskod' => '71259',
                'bandar' => 'Si Rusa',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            271 =>
            array (
                'id' => 1772,
                'poskod' => '71300',
                'bandar' => 'Rembau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            272 =>
            array (
                'id' => 1773,
                'poskod' => '71309',
                'bandar' => 'Rembau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            273 =>
            array (
                'id' => 1774,
                'poskod' => '71350',
                'bandar' => 'Kota',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            274 =>
            array (
                'id' => 1775,
                'poskod' => '71359',
                'bandar' => 'Kota',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            275 =>
            array (
                'id' => 1776,
                'poskod' => '71400',
                'bandar' => 'Rembau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            276 =>
            array (
                'id' => 1777,
                'poskod' => '71409',
                'bandar' => 'Rembau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            277 =>
            array (
                'id' => 1778,
                'poskod' => '71450',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            278 =>
            array (
                'id' => 1779,
                'poskod' => '71459',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:31',
                'updated_at' => '2019-10-14 08:42:31',
            ),
            279 =>
            array (
                'id' => 1780,
                'poskod' => '71500',
                'bandar' => 'Tanjong Ipoh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            280 =>
            array (
                'id' => 1781,
                'poskod' => '71509',
                'bandar' => 'Tanjong Ipoh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            281 =>
            array (
                'id' => 1782,
                'poskod' => '71550',
                'bandar' => 'Tanjong Ipoh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            282 =>
            array (
                'id' => 1783,
                'poskod' => '71559',
                'bandar' => 'Tanjong Ipoh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            283 =>
            array (
                'id' => 1784,
                'poskod' => '71600',
                'bandar' => 'Kuala Klawang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            284 =>
            array (
                'id' => 1785,
                'poskod' => '71609',
                'bandar' => 'Kuala Klawang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            285 =>
            array (
                'id' => 1786,
                'poskod' => '71650',
                'bandar' => 'Kuala Klawang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            286 =>
            array (
                'id' => 1787,
                'poskod' => '71659',
                'bandar' => 'Kuala Klawang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            287 =>
            array (
                'id' => 1788,
                'poskod' => '71700',
                'bandar' => 'Mantin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            288 =>
            array (
                'id' => 1789,
                'poskod' => '71707',
                'bandar' => 'Mantin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            289 =>
            array (
                'id' => 1790,
                'poskod' => '71709',
                'bandar' => 'Mantin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            290 =>
            array (
                'id' => 1791,
                'poskod' => '71750',
                'bandar' => 'Mantin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            291 =>
            array (
                'id' => 1792,
                'poskod' => '71759',
                'bandar' => 'Mantin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            292 =>
            array (
                'id' => 1793,
                'poskod' => '71760',
                'bandar' => 'Bandar Baru Enstek',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            293 =>
            array (
                'id' => 1794,
                'poskod' => '71770',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            294 =>
            array (
                'id' => 1795,
                'poskod' => '71800',
                'bandar' => 'Nilai',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            295 =>
            array (
                'id' => 1796,
                'poskod' => '71807',
                'bandar' => 'Nilai',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            296 =>
            array (
                'id' => 1797,
                'poskod' => '71809',
                'bandar' => 'Nilai',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            297 =>
            array (
                'id' => 1798,
                'poskod' => '71900',
                'bandar' => 'Labu',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:32',
                'updated_at' => '2019-10-14 08:42:32',
            ),
            298 =>
            array (
                'id' => 1799,
                'poskod' => '71907',
                'bandar' => 'Labu',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            299 =>
            array (
                'id' => 1800,
                'poskod' => '71909',
                'bandar' => 'Labu',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            300 =>
            array (
                'id' => 1801,
                'poskod' => '71950',
                'bandar' => 'Seremban',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            301 =>
            array (
                'id' => 1802,
                'poskod' => '71960',
                'bandar' => 'Port Dickson',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            302 =>
            array (
                'id' => 1803,
                'poskod' => '72000',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            303 =>
            array (
                'id' => 1804,
                'poskod' => '72007',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            304 =>
            array (
                'id' => 1805,
                'poskod' => '72009',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            305 =>
            array (
                'id' => 1806,
                'poskod' => '72100',
                'bandar' => 'Bahau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            306 =>
            array (
                'id' => 1807,
                'poskod' => '72107',
                'bandar' => 'Bahau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            307 =>
            array (
                'id' => 1808,
                'poskod' => '72109',
                'bandar' => 'Bahau',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            308 =>
            array (
                'id' => 1809,
                'poskod' => '72120',
                'bandar' => 'Bandar Seri Jempol',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            309 =>
            array (
                'id' => 1810,
                'poskod' => '72127',
                'bandar' => 'Bandar Seri Jempol',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            310 =>
            array (
                'id' => 1811,
                'poskod' => '72129',
                'bandar' => 'Bandar Seri Jempol',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            311 =>
            array (
                'id' => 1812,
                'poskod' => '72200',
                'bandar' => 'Batu Kikir',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            312 =>
            array (
                'id' => 1813,
                'poskod' => '72207',
                'bandar' => 'Batu Kikir',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            313 =>
            array (
                'id' => 1814,
                'poskod' => '72209',
                'bandar' => 'Batu Kikir',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:33',
                'updated_at' => '2019-10-14 08:42:33',
            ),
            314 =>
            array (
                'id' => 1815,
                'poskod' => '72300',
                'bandar' => 'Simpang Pertang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            315 =>
            array (
                'id' => 1816,
                'poskod' => '72307',
                'bandar' => 'Simpang Pertang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            316 =>
            array (
                'id' => 1817,
                'poskod' => '72309',
                'bandar' => 'Simpang Pertang',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            317 =>
            array (
                'id' => 1818,
                'poskod' => '72400',
                'bandar' => 'Simpang Durian',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            318 =>
            array (
                'id' => 1819,
                'poskod' => '72409',
                'bandar' => 'Simpang Durian',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            319 =>
            array (
                'id' => 1820,
                'poskod' => '72500',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            320 =>
            array (
                'id' => 1821,
                'poskod' => '72507',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            321 =>
            array (
                'id' => 1822,
                'poskod' => '72509',
                'bandar' => 'Kuala Pilah',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            322 =>
            array (
                'id' => 1823,
                'poskod' => '73000',
                'bandar' => 'Tampin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            323 =>
            array (
                'id' => 1824,
                'poskod' => '73007',
                'bandar' => 'Tampin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            324 =>
            array (
                'id' => 1825,
                'poskod' => '73009',
                'bandar' => 'Tampin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            325 =>
            array (
                'id' => 1826,
                'poskod' => '73100',
                'bandar' => 'Johol',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            326 =>
            array (
                'id' => 1827,
                'poskod' => '73109',
                'bandar' => 'Johol',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            327 =>
            array (
                'id' => 1828,
                'poskod' => '73200',
                'bandar' => 'Gemencheh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            328 =>
            array (
                'id' => 1829,
                'poskod' => '73207',
                'bandar' => 'Gemencheh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            329 =>
            array (
                'id' => 1830,
                'poskod' => '73209',
                'bandar' => 'Gemencheh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            330 =>
            array (
                'id' => 1831,
                'poskod' => '73300',
                'bandar' => 'Gemencheh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:34',
                'updated_at' => '2019-10-14 08:42:34',
            ),
            331 =>
            array (
                'id' => 1832,
                'poskod' => '73309',
                'bandar' => 'Gemencheh',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            332 =>
            array (
                'id' => 1833,
                'poskod' => '73400',
                'bandar' => 'Gemas',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            333 =>
            array (
                'id' => 1834,
                'poskod' => '73409',
                'bandar' => 'Gemas',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            334 =>
            array (
                'id' => 1835,
                'poskod' => '73420',
                'bandar' => 'Gemas',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            335 =>
            array (
                'id' => 1836,
                'poskod' => '73430',
                'bandar' => 'Pusat Bandar Palong',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            336 =>
            array (
                'id' => 1837,
                'poskod' => '73440',
                'bandar' => 'Pusat Bandar Palong',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            337 =>
            array (
                'id' => 1838,
                'poskod' => '73450',
                'bandar' => 'Pusat Bandar Palong',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            338 =>
            array (
                'id' => 1839,
                'poskod' => '73460',
                'bandar' => 'Pusat Bandar Palong',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            339 =>
            array (
                'id' => 1840,
                'poskod' => '73470',
                'bandar' => 'Pusat Bandar Palong',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            340 =>
            array (
                'id' => 1841,
                'poskod' => '73480',
                'bandar' => 'Gemas',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            341 =>
            array (
                'id' => 1842,
                'poskod' => '73500',
                'bandar' => 'Rompin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            342 =>
            array (
                'id' => 1843,
                'poskod' => '73507',
                'bandar' => 'Rompin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            343 =>
            array (
                'id' => 1844,
                'poskod' => '73509',
                'bandar' => 'Rompin',
                'negeri_id' => 5,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            344 =>
            array (
                'id' => 1845,
                'poskod' => '75000',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            345 =>
            array (
                'id' => 1846,
                'poskod' => '75050',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            346 =>
            array (
                'id' => 1847,
                'poskod' => '75100',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            347 =>
            array (
                'id' => 1848,
                'poskod' => '75150',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:35',
                'updated_at' => '2019-10-14 08:42:35',
            ),
            348 =>
            array (
                'id' => 1849,
                'poskod' => '75200',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            349 =>
            array (
                'id' => 1850,
                'poskod' => '75250',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            350 =>
            array (
                'id' => 1851,
                'poskod' => '75260',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            351 =>
            array (
                'id' => 1852,
                'poskod' => '75300',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            352 =>
            array (
                'id' => 1853,
                'poskod' => '75350',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            353 =>
            array (
                'id' => 1854,
                'poskod' => '75400',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            354 =>
            array (
                'id' => 1855,
                'poskod' => '75450',
                'bandar' => 'Ayer Keroh',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            355 =>
            array (
                'id' => 1856,
                'poskod' => '75460',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            356 =>
            array (
                'id' => 1857,
                'poskod' => '75500',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            357 =>
            array (
                'id' => 1858,
                'poskod' => '75502',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            358 =>
            array (
                'id' => 1859,
                'poskod' => '75503',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            359 =>
            array (
                'id' => 1860,
                'poskod' => '75504',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            360 =>
            array (
                'id' => 1861,
                'poskod' => '75505',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            361 =>
            array (
                'id' => 1862,
                'poskod' => '75506',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            362 =>
            array (
                'id' => 1863,
                'poskod' => '75508',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            363 =>
            array (
                'id' => 1864,
                'poskod' => '75510',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            364 =>
            array (
                'id' => 1865,
                'poskod' => '75512',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            365 =>
            array (
                'id' => 1866,
                'poskod' => '75514',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:36',
                'updated_at' => '2019-10-14 08:42:36',
            ),
            366 =>
            array (
                'id' => 1867,
                'poskod' => '75516',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            367 =>
            array (
                'id' => 1868,
                'poskod' => '75517',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            368 =>
            array (
                'id' => 1869,
                'poskod' => '75518',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            369 =>
            array (
                'id' => 1870,
                'poskod' => '75519',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            370 =>
            array (
                'id' => 1871,
                'poskod' => '75532',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            371 =>
            array (
                'id' => 1872,
                'poskod' => '75536',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            372 =>
            array (
                'id' => 1873,
                'poskod' => '75538',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            373 =>
            array (
                'id' => 1874,
                'poskod' => '75540',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            374 =>
            array (
                'id' => 1875,
                'poskod' => '75542',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            375 =>
            array (
                'id' => 1876,
                'poskod' => '75546',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            376 =>
            array (
                'id' => 1877,
                'poskod' => '75550',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            377 =>
            array (
                'id' => 1878,
                'poskod' => '75551',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            378 =>
            array (
                'id' => 1879,
                'poskod' => '75552',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            379 =>
            array (
                'id' => 1880,
                'poskod' => '75560',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            380 =>
            array (
                'id' => 1881,
                'poskod' => '75564',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            381 =>
            array (
                'id' => 1882,
                'poskod' => '75566',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            382 =>
            array (
                'id' => 1883,
                'poskod' => '75570',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            383 =>
            array (
                'id' => 1884,
                'poskod' => '75572',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:37',
                'updated_at' => '2019-10-14 08:42:37',
            ),
            384 =>
            array (
                'id' => 1885,
                'poskod' => '75576',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            385 =>
            array (
                'id' => 1886,
                'poskod' => '75578',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            386 =>
            array (
                'id' => 1887,
                'poskod' => '75582',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            387 =>
            array (
                'id' => 1888,
                'poskod' => '75584',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            388 =>
            array (
                'id' => 1889,
                'poskod' => '75586',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            389 =>
            array (
                'id' => 1890,
                'poskod' => '75590',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            390 =>
            array (
                'id' => 1891,
                'poskod' => '75592',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            391 =>
            array (
                'id' => 1892,
                'poskod' => '75594',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            392 =>
            array (
                'id' => 1893,
                'poskod' => '75596',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            393 =>
            array (
                'id' => 1894,
                'poskod' => '75600',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            394 =>
            array (
                'id' => 1895,
                'poskod' => '75604',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            395 =>
            array (
                'id' => 1896,
                'poskod' => '75606',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            396 =>
            array (
                'id' => 1897,
                'poskod' => '75608',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            397 =>
            array (
                'id' => 1898,
                'poskod' => '75609',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            398 =>
            array (
                'id' => 1899,
                'poskod' => '75610',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            399 =>
            array (
                'id' => 1900,
                'poskod' => '75612',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:38',
                'updated_at' => '2019-10-14 08:42:38',
            ),
            400 =>
            array (
                'id' => 1901,
                'poskod' => '75618',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            401 =>
            array (
                'id' => 1902,
                'poskod' => '75620',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            402 =>
            array (
                'id' => 1903,
                'poskod' => '75622',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            403 =>
            array (
                'id' => 1904,
                'poskod' => '75626',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            404 =>
            array (
                'id' => 1905,
                'poskod' => '75628',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            405 =>
            array (
                'id' => 1906,
                'poskod' => '75630',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            406 =>
            array (
                'id' => 1907,
                'poskod' => '75632',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            407 =>
            array (
                'id' => 1908,
                'poskod' => '75646',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            408 =>
            array (
                'id' => 1909,
                'poskod' => '75648',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            409 =>
            array (
                'id' => 1910,
                'poskod' => '75662',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            410 =>
            array (
                'id' => 1911,
                'poskod' => '75670',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            411 =>
            array (
                'id' => 1912,
                'poskod' => '75672',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            412 =>
            array (
                'id' => 1913,
                'poskod' => '75673',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            413 =>
            array (
                'id' => 1914,
                'poskod' => '75674',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            414 =>
            array (
                'id' => 1915,
                'poskod' => '75676',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            415 =>
            array (
                'id' => 1916,
                'poskod' => '75690',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            416 =>
            array (
                'id' => 1917,
                'poskod' => '75700',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            417 =>
            array (
                'id' => 1918,
                'poskod' => '75710',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            418 =>
            array (
                'id' => 1919,
                'poskod' => '75720',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:39',
                'updated_at' => '2019-10-14 08:42:39',
            ),
            419 =>
            array (
                'id' => 1920,
                'poskod' => '75730',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            420 =>
            array (
                'id' => 1921,
                'poskod' => '75740',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            421 =>
            array (
                'id' => 1922,
                'poskod' => '75750',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            422 =>
            array (
                'id' => 1923,
                'poskod' => '75760',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            423 =>
            array (
                'id' => 1924,
                'poskod' => '75900',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            424 =>
            array (
                'id' => 1925,
                'poskod' => '75902',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            425 =>
            array (
                'id' => 1926,
                'poskod' => '75904',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            426 =>
            array (
                'id' => 1927,
                'poskod' => '75906',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            427 =>
            array (
                'id' => 1928,
                'poskod' => '75908',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            428 =>
            array (
                'id' => 1929,
                'poskod' => '75910',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            429 =>
            array (
                'id' => 1930,
                'poskod' => '75912',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            430 =>
            array (
                'id' => 1931,
                'poskod' => '75914',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            431 =>
            array (
                'id' => 1932,
                'poskod' => '75916',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            432 =>
            array (
                'id' => 1933,
                'poskod' => '75918',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            433 =>
            array (
                'id' => 1934,
                'poskod' => '75990',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            434 =>
            array (
                'id' => 1935,
                'poskod' => '76100',
                'bandar' => 'Durian Tunggal',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            435 =>
            array (
                'id' => 1936,
                'poskod' => '76109',
                'bandar' => 'Durian Tunggal',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:40',
                'updated_at' => '2019-10-14 08:42:40',
            ),
            436 =>
            array (
                'id' => 1937,
                'poskod' => '76200',
                'bandar' => 'Kem Trendak',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            437 =>
            array (
                'id' => 1938,
                'poskod' => '76300',
                'bandar' => 'Sungai Udang',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            438 =>
            array (
                'id' => 1939,
                'poskod' => '76400',
                'bandar' => 'Tanjong Kling',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            439 =>
            array (
                'id' => 1940,
                'poskod' => '76409',
                'bandar' => 'Tanjong Kling',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            440 =>
            array (
                'id' => 1941,
                'poskod' => '76450',
                'bandar' => 'Melaka',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            441 =>
            array (
                'id' => 1942,
                'poskod' => '77000',
                'bandar' => 'Jasin',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            442 =>
            array (
                'id' => 1943,
                'poskod' => '77007',
                'bandar' => 'Jasin',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            443 =>
            array (
                'id' => 1944,
                'poskod' => '77008',
                'bandar' => 'Jasin',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            444 =>
            array (
                'id' => 1945,
                'poskod' => '77009',
                'bandar' => 'Jasin',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            445 =>
            array (
                'id' => 1946,
                'poskod' => '77100',
                'bandar' => 'Asahan',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            446 =>
            array (
                'id' => 1947,
                'poskod' => '77109',
                'bandar' => 'Asahan',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            447 =>
            array (
                'id' => 1948,
                'poskod' => '77200',
                'bandar' => 'Bemban',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            448 =>
            array (
                'id' => 1949,
                'poskod' => '77300',
                'bandar' => 'Merlimau',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            449 =>
            array (
                'id' => 1950,
                'poskod' => '77309',
                'bandar' => 'Merlimau',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            450 =>
            array (
                'id' => 1951,
                'poskod' => '77400',
                'bandar' => 'Sungai Rambai',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            451 =>
            array (
                'id' => 1952,
                'poskod' => '77409',
                'bandar' => 'Sungai Rambai',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            452 =>
            array (
                'id' => 1953,
                'poskod' => '77500',
                'bandar' => 'Selandar',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            453 =>
            array (
                'id' => 1954,
                'poskod' => '78000',
                'bandar' => 'Alor Gajah',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:41',
                'updated_at' => '2019-10-14 08:42:41',
            ),
            454 =>
            array (
                'id' => 1955,
                'poskod' => '78009',
                'bandar' => 'Alor Gajah',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            455 =>
            array (
                'id' => 1956,
                'poskod' => '78100',
                'bandar' => 'Lubok China',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            456 =>
            array (
                'id' => 1957,
                'poskod' => '78200',
                'bandar' => 'Kuala Sungai Baru',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            457 =>
            array (
                'id' => 1958,
                'poskod' => '78300',
                'bandar' => 'Masjid Tanah',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            458 =>
            array (
                'id' => 1959,
                'poskod' => '78307',
                'bandar' => 'Masjid Tanah',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            459 =>
            array (
                'id' => 1960,
                'poskod' => '78309',
                'bandar' => 'Masjid Tanah',
                'negeri_id' => 4,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            460 =>
            array (
                'id' => 1961,
                'poskod' => '79000',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            461 =>
            array (
                'id' => 1962,
                'poskod' => '79100',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            462 =>
            array (
                'id' => 1963,
                'poskod' => '79150',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            463 =>
            array (
                'id' => 1964,
                'poskod' => '79200',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            464 =>
            array (
                'id' => 1965,
                'poskod' => '79250',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            465 =>
            array (
                'id' => 1966,
                'poskod' => '79502',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            466 =>
            array (
                'id' => 1967,
                'poskod' => '79503',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            467 =>
            array (
                'id' => 1968,
                'poskod' => '79504',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            468 =>
            array (
                'id' => 1969,
                'poskod' => '79505',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            469 =>
            array (
                'id' => 1970,
                'poskod' => '79511',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            470 =>
            array (
                'id' => 1971,
                'poskod' => '79513',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:42',
                'updated_at' => '2019-10-14 08:42:42',
            ),
            471 =>
            array (
                'id' => 1972,
                'poskod' => '79514',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            472 =>
            array (
                'id' => 1973,
                'poskod' => '79517',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            473 =>
            array (
                'id' => 1974,
                'poskod' => '79518',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            474 =>
            array (
                'id' => 1975,
                'poskod' => '79520',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            475 =>
            array (
                'id' => 1976,
                'poskod' => '79521',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            476 =>
            array (
                'id' => 1977,
                'poskod' => '79523',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            477 =>
            array (
                'id' => 1978,
                'poskod' => '79532',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            478 =>
            array (
                'id' => 1979,
                'poskod' => '79538',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            479 =>
            array (
                'id' => 1980,
                'poskod' => '79540',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            480 =>
            array (
                'id' => 1981,
                'poskod' => '79546',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            481 =>
            array (
                'id' => 1982,
                'poskod' => '79548',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            482 =>
            array (
                'id' => 1983,
                'poskod' => '79550',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            483 =>
            array (
                'id' => 1984,
                'poskod' => '79552',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            484 =>
            array (
                'id' => 1985,
                'poskod' => '79555',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            485 =>
            array (
                'id' => 1986,
                'poskod' => '79570',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            486 =>
            array (
                'id' => 1987,
                'poskod' => '79575',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            487 =>
            array (
                'id' => 1988,
                'poskod' => '79576',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            488 =>
            array (
                'id' => 1989,
                'poskod' => '79592',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            489 =>
            array (
                'id' => 1990,
                'poskod' => '79601',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            490 =>
            array (
                'id' => 1991,
                'poskod' => '79603',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:43',
                'updated_at' => '2019-10-14 08:42:43',
            ),
            491 =>
            array (
                'id' => 1992,
                'poskod' => '79605',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            492 =>
            array (
                'id' => 1993,
                'poskod' => '79606',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            493 =>
            array (
                'id' => 1994,
                'poskod' => '79612',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            494 =>
            array (
                'id' => 1995,
                'poskod' => '79626',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            495 =>
            array (
                'id' => 1996,
                'poskod' => '79630',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            496 =>
            array (
                'id' => 1997,
                'poskod' => '79632',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            497 =>
            array (
                'id' => 1998,
                'poskod' => '79646',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            498 =>
            array (
                'id' => 1999,
                'poskod' => '79658',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            499 =>
            array (
                'id' => 2000,
                'poskod' => '79660',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
        ));
        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 2001,
                'poskod' => '79680',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            1 =>
            array (
                'id' => 2002,
                'poskod' => '79681',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            2 =>
            array (
                'id' => 2003,
                'poskod' => '79683',
                'bandar' => 'Nusajaya',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            3 =>
            array (
                'id' => 2004,
                'poskod' => '80000',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            4 =>
            array (
                'id' => 2005,
                'poskod' => '80050',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            5 =>
            array (
                'id' => 2006,
                'poskod' => '80100',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            6 =>
            array (
                'id' => 2007,
                'poskod' => '80150',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            7 =>
            array (
                'id' => 2008,
                'poskod' => '80200',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:44',
                'updated_at' => '2019-10-14 08:42:44',
            ),
            8 =>
            array (
                'id' => 2009,
                'poskod' => '80250',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            9 =>
            array (
                'id' => 2010,
                'poskod' => '80300',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            10 =>
            array (
                'id' => 2011,
                'poskod' => '80350',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            11 =>
            array (
                'id' => 2012,
                'poskod' => '80400',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            12 =>
            array (
                'id' => 2013,
                'poskod' => '80500',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            13 =>
            array (
                'id' => 2014,
                'poskod' => '80506',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            14 =>
            array (
                'id' => 2015,
                'poskod' => '80508',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            15 =>
            array (
                'id' => 2016,
                'poskod' => '80516',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            16 =>
            array (
                'id' => 2017,
                'poskod' => '80519',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            17 =>
            array (
                'id' => 2018,
                'poskod' => '80534',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            18 =>
            array (
                'id' => 2019,
                'poskod' => '80536',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            19 =>
            array (
                'id' => 2020,
                'poskod' => '80542',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            20 =>
            array (
                'id' => 2021,
                'poskod' => '80546',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            21 =>
            array (
                'id' => 2022,
                'poskod' => '80558',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            22 =>
            array (
                'id' => 2023,
                'poskod' => '80560',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            23 =>
            array (
                'id' => 2024,
                'poskod' => '80564',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            24 =>
            array (
                'id' => 2025,
                'poskod' => '80568',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            25 =>
            array (
                'id' => 2026,
                'poskod' => '80578',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:45',
                'updated_at' => '2019-10-14 08:42:45',
            ),
            26 =>
            array (
                'id' => 2027,
                'poskod' => '80584',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            27 =>
            array (
                'id' => 2028,
                'poskod' => '80586',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            28 =>
            array (
                'id' => 2029,
                'poskod' => '80590',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            29 =>
            array (
                'id' => 2030,
                'poskod' => '80592',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            30 =>
            array (
                'id' => 2031,
                'poskod' => '80594',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            31 =>
            array (
                'id' => 2032,
                'poskod' => '80596',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            32 =>
            array (
                'id' => 2033,
                'poskod' => '80600',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            33 =>
            array (
                'id' => 2034,
                'poskod' => '80604',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            34 =>
            array (
                'id' => 2035,
                'poskod' => '80608',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            35 =>
            array (
                'id' => 2036,
                'poskod' => '80620',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            36 =>
            array (
                'id' => 2037,
                'poskod' => '80622',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            37 =>
            array (
                'id' => 2038,
                'poskod' => '80628',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            38 =>
            array (
                'id' => 2039,
                'poskod' => '80644',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            39 =>
            array (
                'id' => 2040,
                'poskod' => '80648',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            40 =>
            array (
                'id' => 2041,
                'poskod' => '80662',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            41 =>
            array (
                'id' => 2042,
                'poskod' => '80664',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            42 =>
            array (
                'id' => 2043,
                'poskod' => '80668',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:46',
                'updated_at' => '2019-10-14 08:42:46',
            ),
            43 =>
            array (
                'id' => 2044,
                'poskod' => '80670',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            44 =>
            array (
                'id' => 2045,
                'poskod' => '80672',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            45 =>
            array (
                'id' => 2046,
                'poskod' => '80673',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            46 =>
            array (
                'id' => 2047,
                'poskod' => '80676',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            47 =>
            array (
                'id' => 2048,
                'poskod' => '80700',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            48 =>
            array (
                'id' => 2049,
                'poskod' => '80710',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            49 =>
            array (
                'id' => 2050,
                'poskod' => '80720',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            50 =>
            array (
                'id' => 2051,
                'poskod' => '80730',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            51 =>
            array (
                'id' => 2052,
                'poskod' => '80900',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            52 =>
            array (
                'id' => 2053,
                'poskod' => '80902',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            53 =>
            array (
                'id' => 2054,
                'poskod' => '80904',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            54 =>
            array (
                'id' => 2055,
                'poskod' => '80906',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            55 =>
            array (
                'id' => 2056,
                'poskod' => '80908',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            56 =>
            array (
                'id' => 2057,
                'poskod' => '80988',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            57 =>
            array (
                'id' => 2058,
                'poskod' => '80990',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            58 =>
            array (
                'id' => 2059,
                'poskod' => '81000',
                'bandar' => 'Kulai',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:47',
                'updated_at' => '2019-10-14 08:42:47',
            ),
            59 =>
            array (
                'id' => 2060,
                'poskod' => '81100',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            60 =>
            array (
                'id' => 2061,
                'poskod' => '81200',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            61 =>
            array (
                'id' => 2062,
                'poskod' => '81300',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            62 =>
            array (
                'id' => 2063,
                'poskod' => '81310',
                'bandar' => 'Johor Bahru',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            63 =>
            array (
                'id' => 2064,
                'poskod' => '81400',
                'bandar' => 'Senai',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            64 =>
            array (
                'id' => 2065,
                'poskod' => '81440',
                'bandar' => 'Bandar Tenggara',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            65 =>
            array (
                'id' => 2066,
                'poskod' => '81450',
                'bandar' => 'Gugusan Taib Andak',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            66 =>
            array (
                'id' => 2067,
                'poskod' => '81500',
                'bandar' => 'Pekan Nenas',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            67 =>
            array (
                'id' => 2068,
                'poskod' => '81550',
                'bandar' => 'Gelang Patah',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            68 =>
            array (
                'id' => 2069,
                'poskod' => '81600',
                'bandar' => 'Pengerang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            69 =>
            array (
                'id' => 2070,
                'poskod' => '81700',
                'bandar' => 'Pasir Gudang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            70 =>
            array (
                'id' => 2071,
                'poskod' => '81750',
                'bandar' => 'Masai',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            71 =>
            array (
                'id' => 2072,
                'poskod' => '81800',
                'bandar' => 'Ulu Tiram',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            72 =>
            array (
                'id' => 2073,
                'poskod' => '81850',
                'bandar' => 'Layang-Layang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            73 =>
            array (
                'id' => 2074,
                'poskod' => '81900',
                'bandar' => 'Kota Tinggi',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            74 =>
            array (
                'id' => 2075,
                'poskod' => '81920',
                'bandar' => 'Ayer Tawar 2',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            75 =>
            array (
                'id' => 2076,
                'poskod' => '81920',
                'bandar' => 'Ayer Tawar 3',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:48',
                'updated_at' => '2019-10-14 08:42:48',
            ),
            76 =>
            array (
                'id' => 2077,
                'poskod' => '81920',
                'bandar' => 'Ayer Tawar 4',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            77 =>
            array (
                'id' => 2078,
                'poskod' => '81920',
                'bandar' => 'Ayer Tawar 5',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            78 =>
            array (
                'id' => 2079,
                'poskod' => '81930',
                'bandar' => 'Bandar Penawar',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            79 =>
            array (
                'id' => 2080,
                'poskod' => '82000',
                'bandar' => 'Pontian',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            80 =>
            array (
                'id' => 2081,
                'poskod' => '82100',
                'bandar' => 'Ayer Baloi',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            81 =>
            array (
                'id' => 2082,
                'poskod' => '82200',
                'bandar' => 'Benut',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            82 =>
            array (
                'id' => 2083,
                'poskod' => '82300',
                'bandar' => 'Kukup',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            83 =>
            array (
                'id' => 2084,
                'poskod' => '83000',
                'bandar' => 'Batu Pahat',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            84 =>
            array (
                'id' => 2085,
                'poskod' => '83100',
                'bandar' => 'Rengit',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            85 =>
            array (
                'id' => 2086,
                'poskod' => '83200',
                'bandar' => 'Senggarang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            86 =>
            array (
                'id' => 2087,
                'poskod' => '83300',
                'bandar' => 'Sri Gading',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            87 =>
            array (
                'id' => 2088,
                'poskod' => '83400',
                'bandar' => 'Sri Medan',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            88 =>
            array (
                'id' => 2089,
                'poskod' => '83500',
                'bandar' => 'Parit Sulong',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            89 =>
            array (
                'id' => 2090,
                'poskod' => '83600',
                'bandar' => 'Semerah',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            90 =>
            array (
                'id' => 2091,
                'poskod' => '83700',
                'bandar' => 'Yong Peng',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:49',
                'updated_at' => '2019-10-14 08:42:49',
            ),
            91 =>
            array (
                'id' => 2092,
                'poskod' => '84000',
                'bandar' => 'Muar',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            92 =>
            array (
                'id' => 2093,
                'poskod' => '84150',
                'bandar' => 'Parit Jawa',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            93 =>
            array (
                'id' => 2094,
                'poskod' => '84200',
                'bandar' => 'Muar',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            94 =>
            array (
                'id' => 2095,
                'poskod' => '84300',
                'bandar' => 'Bukit Pasir',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            95 =>
            array (
                'id' => 2096,
                'poskod' => '84400',
                'bandar' => 'Sungai Mati',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            96 =>
            array (
                'id' => 2097,
                'poskod' => '84500',
                'bandar' => 'Panchor',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            97 =>
            array (
                'id' => 2098,
                'poskod' => '84600',
                'bandar' => 'Pagoh',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            98 =>
            array (
                'id' => 2099,
                'poskod' => '84700',
                'bandar' => 'Gerisek',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            99 =>
            array (
                'id' => 2100,
                'poskod' => '84800',
                'bandar' => 'Bukit Gambir',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            100 =>
            array (
                'id' => 2101,
                'poskod' => '84900',
                'bandar' => 'Tangkak',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            101 =>
            array (
                'id' => 2102,
                'poskod' => '85000',
                'bandar' => 'Segamat',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            102 =>
            array (
                'id' => 2103,
                'poskod' => '85100',
                'bandar' => 'Batu Anam',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            103 =>
            array (
                'id' => 2104,
                'poskod' => '85200',
                'bandar' => 'Jementah',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            104 =>
            array (
                'id' => 2105,
                'poskod' => '85300',
                'bandar' => 'Labis',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            105 =>
            array (
                'id' => 2106,
                'poskod' => '85400',
                'bandar' => 'Chaah',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:50',
                'updated_at' => '2019-10-14 08:42:50',
            ),
            106 =>
            array (
                'id' => 2107,
                'poskod' => '86000',
                'bandar' => 'Kluang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            107 =>
            array (
                'id' => 2108,
                'poskod' => '86100',
                'bandar' => 'Ayer Hitam',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            108 =>
            array (
                'id' => 2109,
                'poskod' => '86200',
                'bandar' => 'Simpang Rengam',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            109 =>
            array (
                'id' => 2110,
                'poskod' => '86300',
                'bandar' => 'Rengam',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            110 =>
            array (
                'id' => 2111,
                'poskod' => '86400',
                'bandar' => 'Parit Raja',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            111 =>
            array (
                'id' => 2112,
                'poskod' => '86500',
                'bandar' => 'Bekok',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            112 =>
            array (
                'id' => 2113,
                'poskod' => '86600',
                'bandar' => 'Paloh',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            113 =>
            array (
                'id' => 2114,
                'poskod' => '86700',
                'bandar' => 'Kahang',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            114 =>
            array (
                'id' => 2115,
                'poskod' => '86800',
                'bandar' => 'Mersing',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            115 =>
            array (
                'id' => 2116,
                'poskod' => '86810',
                'bandar' => 'Mersing',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            116 =>
            array (
                'id' => 2117,
                'poskod' => '86900',
                'bandar' => 'Endau',
                'negeri_id' => 1,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            117 =>
            array (
                'id' => 2118,
                'poskod' => '87000',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            118 =>
            array (
                'id' => 2119,
                'poskod' => '87010',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            119 =>
            array (
                'id' => 2120,
                'poskod' => '87011',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            120 =>
            array (
                'id' => 2121,
                'poskod' => '87012',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            121 =>
            array (
                'id' => 2122,
                'poskod' => '87013',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            122 =>
            array (
                'id' => 2123,
                'poskod' => '87014',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            123 =>
            array (
                'id' => 2124,
                'poskod' => '87015',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:51',
                'updated_at' => '2019-10-14 08:42:51',
            ),
            124 =>
            array (
                'id' => 2125,
                'poskod' => '87016',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            125 =>
            array (
                'id' => 2126,
                'poskod' => '87017',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            126 =>
            array (
                'id' => 2127,
                'poskod' => '87018',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            127 =>
            array (
                'id' => 2128,
                'poskod' => '87019',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            128 =>
            array (
                'id' => 2129,
                'poskod' => '87020',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            129 =>
            array (
                'id' => 2130,
                'poskod' => '87021',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            130 =>
            array (
                'id' => 2131,
                'poskod' => '87022',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            131 =>
            array (
                'id' => 2132,
                'poskod' => '87023',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            132 =>
            array (
                'id' => 2133,
                'poskod' => '87024',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            133 =>
            array (
                'id' => 2134,
                'poskod' => '87025',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            134 =>
            array (
                'id' => 2135,
                'poskod' => '87026',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            135 =>
            array (
                'id' => 2136,
                'poskod' => '87027',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            136 =>
            array (
                'id' => 2137,
                'poskod' => '87028',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            137 =>
            array (
                'id' => 2138,
                'poskod' => '87029',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            138 =>
            array (
                'id' => 2139,
                'poskod' => '87030',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            139 =>
            array (
                'id' => 2140,
                'poskod' => '87031',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            140 =>
            array (
                'id' => 2141,
                'poskod' => '87032',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            141 =>
            array (
                'id' => 2142,
                'poskod' => '87033',
                'bandar' => 'Labuan',
                'negeri_id' => 15,
                'created_at' => '2019-10-14 08:42:52',
                'updated_at' => '2019-10-14 08:42:52',
            ),
            142 =>
            array (
                'id' => 2143,
                'poskod' => '88000',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            143 =>
            array (
                'id' => 2144,
                'poskod' => '88100',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            144 =>
            array (
                'id' => 2145,
                'poskod' => '88200',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            145 =>
            array (
                'id' => 2146,
                'poskod' => '88300',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            146 =>
            array (
                'id' => 2147,
                'poskod' => '88400',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            147 =>
            array (
                'id' => 2148,
                'poskod' => '88450',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            148 =>
            array (
                'id' => 2149,
                'poskod' => '88460',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            149 =>
            array (
                'id' => 2150,
                'poskod' => '88500',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            150 =>
            array (
                'id' => 2151,
                'poskod' => '88502',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            151 =>
            array (
                'id' => 2152,
                'poskod' => '88504',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            152 =>
            array (
                'id' => 2153,
                'poskod' => '88505',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            153 =>
            array (
                'id' => 2154,
                'poskod' => '88506',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            154 =>
            array (
                'id' => 2155,
                'poskod' => '88508',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            155 =>
            array (
                'id' => 2156,
                'poskod' => '88510',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            156 =>
            array (
                'id' => 2157,
                'poskod' => '88512',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            157 =>
            array (
                'id' => 2158,
                'poskod' => '88514',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:53',
                'updated_at' => '2019-10-14 08:42:53',
            ),
            158 =>
            array (
                'id' => 2159,
                'poskod' => '88516',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            159 =>
            array (
                'id' => 2160,
                'poskod' => '88518',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            160 =>
            array (
                'id' => 2161,
                'poskod' => '88520',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            161 =>
            array (
                'id' => 2162,
                'poskod' => '88526',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            162 =>
            array (
                'id' => 2163,
                'poskod' => '88527',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            163 =>
            array (
                'id' => 2164,
                'poskod' => '88532',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            164 =>
            array (
                'id' => 2165,
                'poskod' => '88534',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            165 =>
            array (
                'id' => 2166,
                'poskod' => '88538',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            166 =>
            array (
                'id' => 2167,
                'poskod' => '88540',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            167 =>
            array (
                'id' => 2168,
                'poskod' => '88546',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            168 =>
            array (
                'id' => 2169,
                'poskod' => '88550',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            169 =>
            array (
                'id' => 2170,
                'poskod' => '88551',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            170 =>
            array (
                'id' => 2171,
                'poskod' => '88552',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            171 =>
            array (
                'id' => 2172,
                'poskod' => '88554',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            172 =>
            array (
                'id' => 2173,
                'poskod' => '88556',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            173 =>
            array (
                'id' => 2174,
                'poskod' => '88558',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            174 =>
            array (
                'id' => 2175,
                'poskod' => '88560',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            175 =>
            array (
                'id' => 2176,
                'poskod' => '88562',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            176 =>
            array (
                'id' => 2177,
                'poskod' => '88564',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:54',
                'updated_at' => '2019-10-14 08:42:54',
            ),
            177 =>
            array (
                'id' => 2178,
                'poskod' => '88566',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            178 =>
            array (
                'id' => 2179,
                'poskod' => '88568',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            179 =>
            array (
                'id' => 2180,
                'poskod' => '88570',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            180 =>
            array (
                'id' => 2181,
                'poskod' => '88572',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            181 =>
            array (
                'id' => 2182,
                'poskod' => '88576',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            182 =>
            array (
                'id' => 2183,
                'poskod' => '88580',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            183 =>
            array (
                'id' => 2184,
                'poskod' => '88582',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            184 =>
            array (
                'id' => 2185,
                'poskod' => '88586',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            185 =>
            array (
                'id' => 2186,
                'poskod' => '88590',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            186 =>
            array (
                'id' => 2187,
                'poskod' => '88592',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            187 =>
            array (
                'id' => 2188,
                'poskod' => '88594',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            188 =>
            array (
                'id' => 2189,
                'poskod' => '88596',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            189 =>
            array (
                'id' => 2190,
                'poskod' => '88598',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            190 =>
            array (
                'id' => 2191,
                'poskod' => '88600',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            191 =>
            array (
                'id' => 2192,
                'poskod' => '88602',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:55',
                'updated_at' => '2019-10-14 08:42:55',
            ),
            192 =>
            array (
                'id' => 2193,
                'poskod' => '88604',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            193 =>
            array (
                'id' => 2194,
                'poskod' => '88606',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            194 =>
            array (
                'id' => 2195,
                'poskod' => '88608',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            195 =>
            array (
                'id' => 2196,
                'poskod' => '88609',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            196 =>
            array (
                'id' => 2197,
                'poskod' => '88610',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            197 =>
            array (
                'id' => 2198,
                'poskod' => '88612',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            198 =>
            array (
                'id' => 2199,
                'poskod' => '88614',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            199 =>
            array (
                'id' => 2200,
                'poskod' => '88617',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            200 =>
            array (
                'id' => 2201,
                'poskod' => '88618',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            201 =>
            array (
                'id' => 2202,
                'poskod' => '88620',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            202 =>
            array (
                'id' => 2203,
                'poskod' => '88621',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            203 =>
            array (
                'id' => 2204,
                'poskod' => '88622',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            204 =>
            array (
                'id' => 2205,
                'poskod' => '88624',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            205 =>
            array (
                'id' => 2206,
                'poskod' => '88626',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:56',
                'updated_at' => '2019-10-14 08:42:56',
            ),
            206 =>
            array (
                'id' => 2207,
                'poskod' => '88628',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            207 =>
            array (
                'id' => 2208,
                'poskod' => '88630',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            208 =>
            array (
                'id' => 2209,
                'poskod' => '88632',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            209 =>
            array (
                'id' => 2210,
                'poskod' => '88634',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            210 =>
            array (
                'id' => 2211,
                'poskod' => '88644',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            211 =>
            array (
                'id' => 2212,
                'poskod' => '88646',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            212 =>
            array (
                'id' => 2213,
                'poskod' => '88648',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            213 =>
            array (
                'id' => 2214,
                'poskod' => '88656',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            214 =>
            array (
                'id' => 2215,
                'poskod' => '88658',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            215 =>
            array (
                'id' => 2216,
                'poskod' => '88660',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            216 =>
            array (
                'id' => 2217,
                'poskod' => '88661',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            217 =>
            array (
                'id' => 2218,
                'poskod' => '88662',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            218 =>
            array (
                'id' => 2219,
                'poskod' => '88670',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            219 =>
            array (
                'id' => 2220,
                'poskod' => '88672',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            220 =>
            array (
                'id' => 2221,
                'poskod' => '88673',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            221 =>
            array (
                'id' => 2222,
                'poskod' => '88675',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            222 =>
            array (
                'id' => 2223,
                'poskod' => '88676',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:57',
                'updated_at' => '2019-10-14 08:42:57',
            ),
            223 =>
            array (
                'id' => 2224,
                'poskod' => '88680',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            224 =>
            array (
                'id' => 2225,
                'poskod' => '88690',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            225 =>
            array (
                'id' => 2226,
                'poskod' => '88700',
                'bandar' => 'Beverly',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            226 =>
            array (
                'id' => 2227,
                'poskod' => '88721',
                'bandar' => 'Putatan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            227 =>
            array (
                'id' => 2228,
                'poskod' => '88722',
                'bandar' => 'Putatan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            228 =>
            array (
                'id' => 2229,
                'poskod' => '88723',
                'bandar' => 'Putatan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            229 =>
            array (
                'id' => 2230,
                'poskod' => '88724',
                'bandar' => 'Putatan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            230 =>
            array (
                'id' => 2231,
                'poskod' => '88725',
                'bandar' => 'Putatan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            231 =>
            array (
                'id' => 2232,
                'poskod' => '88757',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            232 =>
            array (
                'id' => 2233,
                'poskod' => '88758',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            233 =>
            array (
                'id' => 2234,
                'poskod' => '88759',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            234 =>
            array (
                'id' => 2235,
                'poskod' => '88760',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            235 =>
            array (
                'id' => 2236,
                'poskod' => '88761',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            236 =>
            array (
                'id' => 2237,
                'poskod' => '88762',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            237 =>
            array (
                'id' => 2238,
                'poskod' => '88763',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:58',
                'updated_at' => '2019-10-14 08:42:58',
            ),
            238 =>
            array (
                'id' => 2239,
                'poskod' => '88764',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            239 =>
            array (
                'id' => 2240,
                'poskod' => '88765',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            240 =>
            array (
                'id' => 2241,
                'poskod' => '88766',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            241 =>
            array (
                'id' => 2242,
                'poskod' => '88767',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            242 =>
            array (
                'id' => 2243,
                'poskod' => '88768',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            243 =>
            array (
                'id' => 2244,
                'poskod' => '88769',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            244 =>
            array (
                'id' => 2245,
                'poskod' => '88770',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            245 =>
            array (
                'id' => 2246,
                'poskod' => '88771',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            246 =>
            array (
                'id' => 2247,
                'poskod' => '88772',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            247 =>
            array (
                'id' => 2248,
                'poskod' => '88773',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            248 =>
            array (
                'id' => 2249,
                'poskod' => '88774',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            249 =>
            array (
                'id' => 2250,
                'poskod' => '88775',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            250 =>
            array (
                'id' => 2251,
                'poskod' => '88776',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            251 =>
            array (
                'id' => 2252,
                'poskod' => '88777',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            252 =>
            array (
                'id' => 2253,
                'poskod' => '88778',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:42:59',
                'updated_at' => '2019-10-14 08:42:59',
            ),
            253 =>
            array (
                'id' => 2254,
                'poskod' => '88779',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            254 =>
            array (
                'id' => 2255,
                'poskod' => '88780',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            255 =>
            array (
                'id' => 2256,
                'poskod' => '88781',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            256 =>
            array (
                'id' => 2257,
                'poskod' => '88782',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            257 =>
            array (
                'id' => 2258,
                'poskod' => '88783',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            258 =>
            array (
                'id' => 2259,
                'poskod' => '88784',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            259 =>
            array (
                'id' => 2260,
                'poskod' => '88785',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            260 =>
            array (
                'id' => 2261,
                'poskod' => '88786',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            261 =>
            array (
                'id' => 2262,
                'poskod' => '88787',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            262 =>
            array (
                'id' => 2263,
                'poskod' => '88788',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            263 =>
            array (
                'id' => 2264,
                'poskod' => '88789',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            264 =>
            array (
                'id' => 2265,
                'poskod' => '88790',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            265 =>
            array (
                'id' => 2266,
                'poskod' => '88800',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            266 =>
            array (
                'id' => 2267,
                'poskod' => '88801',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            267 =>
            array (
                'id' => 2268,
                'poskod' => '88802',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            268 =>
            array (
                'id' => 2269,
                'poskod' => '88803',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            269 =>
            array (
                'id' => 2270,
                'poskod' => '88804',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            270 =>
            array (
                'id' => 2271,
                'poskod' => '88805',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:00',
                'updated_at' => '2019-10-14 08:43:00',
            ),
            271 =>
            array (
                'id' => 2272,
                'poskod' => '88806',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            272 =>
            array (
                'id' => 2273,
                'poskod' => '88807',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            273 =>
            array (
                'id' => 2274,
                'poskod' => '88808',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            274 =>
            array (
                'id' => 2275,
                'poskod' => '88809',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            275 =>
            array (
                'id' => 2276,
                'poskod' => '88810',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            276 =>
            array (
                'id' => 2277,
                'poskod' => '88811',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            277 =>
            array (
                'id' => 2278,
                'poskod' => '88812',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            278 =>
            array (
                'id' => 2279,
                'poskod' => '88813',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            279 =>
            array (
                'id' => 2280,
                'poskod' => '88814',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            280 =>
            array (
                'id' => 2281,
                'poskod' => '88815',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            281 =>
            array (
                'id' => 2282,
                'poskod' => '88816',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            282 =>
            array (
                'id' => 2283,
                'poskod' => '88817',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            283 =>
            array (
                'id' => 2284,
                'poskod' => '88818',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            284 =>
            array (
                'id' => 2285,
                'poskod' => '88819',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            285 =>
            array (
                'id' => 2286,
                'poskod' => '88820',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            286 =>
            array (
                'id' => 2287,
                'poskod' => '88821',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            287 =>
            array (
                'id' => 2288,
                'poskod' => '88822',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:01',
                'updated_at' => '2019-10-14 08:43:01',
            ),
            288 =>
            array (
                'id' => 2289,
                'poskod' => '88823',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            289 =>
            array (
                'id' => 2290,
                'poskod' => '88824',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            290 =>
            array (
                'id' => 2291,
                'poskod' => '88825',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            291 =>
            array (
                'id' => 2292,
                'poskod' => '88826',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            292 =>
            array (
                'id' => 2293,
                'poskod' => '88827',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            293 =>
            array (
                'id' => 2294,
                'poskod' => '88828',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            294 =>
            array (
                'id' => 2295,
                'poskod' => '88829',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            295 =>
            array (
                'id' => 2296,
                'poskod' => '88830',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            296 =>
            array (
                'id' => 2297,
                'poskod' => '88831',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            297 =>
            array (
                'id' => 2298,
                'poskod' => '88832',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            298 =>
            array (
                'id' => 2299,
                'poskod' => '88833',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            299 =>
            array (
                'id' => 2300,
                'poskod' => '88834',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            300 =>
            array (
                'id' => 2301,
                'poskod' => '88835',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            301 =>
            array (
                'id' => 2302,
                'poskod' => '88836',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            302 =>
            array (
                'id' => 2303,
                'poskod' => '88837',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            303 =>
            array (
                'id' => 2304,
                'poskod' => '88838',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:02',
                'updated_at' => '2019-10-14 08:43:02',
            ),
            304 =>
            array (
                'id' => 2305,
                'poskod' => '88839',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            305 =>
            array (
                'id' => 2306,
                'poskod' => '88840',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            306 =>
            array (
                'id' => 2307,
                'poskod' => '88841',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            307 =>
            array (
                'id' => 2308,
                'poskod' => '88842',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            308 =>
            array (
                'id' => 2309,
                'poskod' => '88843',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            309 =>
            array (
                'id' => 2310,
                'poskod' => '88844',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            310 =>
            array (
                'id' => 2311,
                'poskod' => '88845',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            311 =>
            array (
                'id' => 2312,
                'poskod' => '88846',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            312 =>
            array (
                'id' => 2313,
                'poskod' => '88847',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            313 =>
            array (
                'id' => 2314,
                'poskod' => '88848',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            314 =>
            array (
                'id' => 2315,
                'poskod' => '88849',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            315 =>
            array (
                'id' => 2316,
                'poskod' => '88850',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            316 =>
            array (
                'id' => 2317,
                'poskod' => '88851',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            317 =>
            array (
                'id' => 2318,
                'poskod' => '88852',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:03',
                'updated_at' => '2019-10-14 08:43:03',
            ),
            318 =>
            array (
                'id' => 2319,
                'poskod' => '88853',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            319 =>
            array (
                'id' => 2320,
                'poskod' => '88854',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            320 =>
            array (
                'id' => 2321,
                'poskod' => '88855',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            321 =>
            array (
                'id' => 2322,
                'poskod' => '88856',
                'bandar' => 'Likas',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            322 =>
            array (
                'id' => 2323,
                'poskod' => '88857',
                'bandar' => 'Inanam',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            323 =>
            array (
                'id' => 2324,
                'poskod' => '88858',
                'bandar' => 'Tanjung Aru',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            324 =>
            array (
                'id' => 2325,
                'poskod' => '88860',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            325 =>
            array (
                'id' => 2326,
                'poskod' => '88861',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            326 =>
            array (
                'id' => 2327,
                'poskod' => '88862',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            327 =>
            array (
                'id' => 2328,
                'poskod' => '88863',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            328 =>
            array (
                'id' => 2329,
                'poskod' => '88865',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            329 =>
            array (
                'id' => 2330,
                'poskod' => '88866',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            330 =>
            array (
                'id' => 2331,
                'poskod' => '88867',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            331 =>
            array (
                'id' => 2332,
                'poskod' => '88868',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            332 =>
            array (
                'id' => 2333,
                'poskod' => '88869',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            333 =>
            array (
                'id' => 2334,
                'poskod' => '88870',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            334 =>
            array (
                'id' => 2335,
                'poskod' => '88871',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            335 =>
            array (
                'id' => 2336,
                'poskod' => '88872',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            336 =>
            array (
                'id' => 2337,
                'poskod' => '88873',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            337 =>
            array (
                'id' => 2338,
                'poskod' => '88874',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:04',
                'updated_at' => '2019-10-14 08:43:04',
            ),
            338 =>
            array (
                'id' => 2339,
                'poskod' => '88875',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            339 =>
            array (
                'id' => 2340,
                'poskod' => '88900',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            340 =>
            array (
                'id' => 2341,
                'poskod' => '88901',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            341 =>
            array (
                'id' => 2342,
                'poskod' => '88902',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            342 =>
            array (
                'id' => 2343,
                'poskod' => '88903',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            343 =>
            array (
                'id' => 2344,
                'poskod' => '88904',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            344 =>
            array (
                'id' => 2345,
                'poskod' => '88905',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            345 =>
            array (
                'id' => 2346,
                'poskod' => '88906',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            346 =>
            array (
                'id' => 2347,
                'poskod' => '88988',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            347 =>
            array (
                'id' => 2348,
                'poskod' => '88990',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            348 =>
            array (
                'id' => 2349,
                'poskod' => '88991',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            349 =>
            array (
                'id' => 2350,
                'poskod' => '88992',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            350 =>
            array (
                'id' => 2351,
                'poskod' => '88993',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            351 =>
            array (
                'id' => 2352,
                'poskod' => '88994',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            352 =>
            array (
                'id' => 2353,
                'poskod' => '88995',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:05',
                'updated_at' => '2019-10-14 08:43:05',
            ),
            353 =>
            array (
                'id' => 2354,
                'poskod' => '88996',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            354 =>
            array (
                'id' => 2355,
                'poskod' => '88997',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            355 =>
            array (
                'id' => 2356,
                'poskod' => '88998',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            356 =>
            array (
                'id' => 2357,
                'poskod' => '88999',
                'bandar' => 'Kota Kinabalu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            357 =>
            array (
                'id' => 2358,
                'poskod' => '89000',
                'bandar' => 'Keningau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            358 =>
            array (
                'id' => 2359,
                'poskod' => '89007',
                'bandar' => 'Keningau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            359 =>
            array (
                'id' => 2360,
                'poskod' => '89008',
                'bandar' => 'Keningau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            360 =>
            array (
                'id' => 2361,
                'poskod' => '89009',
                'bandar' => 'Keningau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            361 =>
            array (
                'id' => 2362,
                'poskod' => '89050',
                'bandar' => 'Kudat',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            362 =>
            array (
                'id' => 2363,
                'poskod' => '89057',
                'bandar' => 'Kudat',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            363 =>
            array (
                'id' => 2364,
                'poskod' => '89058',
                'bandar' => 'Kudat',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            364 =>
            array (
                'id' => 2365,
                'poskod' => '89059',
                'bandar' => 'Kudat',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            365 =>
            array (
                'id' => 2366,
                'poskod' => '89100',
                'bandar' => 'Kota Marudu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            366 =>
            array (
                'id' => 2367,
                'poskod' => '89107',
                'bandar' => 'Kota Marudu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            367 =>
            array (
                'id' => 2368,
                'poskod' => '89108',
                'bandar' => 'Kota Marudu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:06',
                'updated_at' => '2019-10-14 08:43:06',
            ),
            368 =>
            array (
                'id' => 2369,
                'poskod' => '89109',
                'bandar' => 'Kota Marudu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            369 =>
            array (
                'id' => 2370,
                'poskod' => '89150',
                'bandar' => 'Kota Belud',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            370 =>
            array (
                'id' => 2371,
                'poskod' => '89157',
                'bandar' => 'Kota Belud',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            371 =>
            array (
                'id' => 2372,
                'poskod' => '89158',
                'bandar' => 'Kota Belud',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            372 =>
            array (
                'id' => 2373,
                'poskod' => '89159',
                'bandar' => 'Kota Belud',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            373 =>
            array (
                'id' => 2374,
                'poskod' => '89200',
                'bandar' => 'Tuaran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            374 =>
            array (
                'id' => 2375,
                'poskod' => '89207',
                'bandar' => 'Tuaran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            375 =>
            array (
                'id' => 2376,
                'poskod' => '89208',
                'bandar' => 'Tuaran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            376 =>
            array (
                'id' => 2377,
                'poskod' => '89209',
                'bandar' => 'Tuaran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            377 =>
            array (
                'id' => 2378,
                'poskod' => '89250',
                'bandar' => 'Tamparuli',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            378 =>
            array (
                'id' => 2379,
                'poskod' => '89257',
                'bandar' => 'Tamparuli',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            379 =>
            array (
                'id' => 2380,
                'poskod' => '89258',
                'bandar' => 'Tamparuli',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            380 =>
            array (
                'id' => 2381,
                'poskod' => '89259',
                'bandar' => 'Tamparuli',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            381 =>
            array (
                'id' => 2382,
                'poskod' => '89260',
                'bandar' => 'Tenghilan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            382 =>
            array (
                'id' => 2383,
                'poskod' => '89300',
                'bandar' => 'Ranau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            383 =>
            array (
                'id' => 2384,
                'poskod' => '89307',
                'bandar' => 'Ranau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            384 =>
            array (
                'id' => 2385,
                'poskod' => '89308',
                'bandar' => 'Ranau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            385 =>
            array (
                'id' => 2386,
                'poskod' => '89309',
                'bandar' => 'Ranau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            386 =>
            array (
                'id' => 2387,
                'poskod' => '89500',
                'bandar' => 'Penampang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:07',
                'updated_at' => '2019-10-14 08:43:07',
            ),
            387 =>
            array (
                'id' => 2388,
                'poskod' => '89507',
                'bandar' => 'Penampang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            388 =>
            array (
                'id' => 2389,
                'poskod' => '89508',
                'bandar' => 'Penampang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            389 =>
            array (
                'id' => 2390,
                'poskod' => '89509',
                'bandar' => 'Penampang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            390 =>
            array (
                'id' => 2391,
                'poskod' => '89600',
                'bandar' => 'Papar',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            391 =>
            array (
                'id' => 2392,
                'poskod' => '89607',
                'bandar' => 'Papar',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            392 =>
            array (
                'id' => 2393,
                'poskod' => '89608',
                'bandar' => 'Papar',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            393 =>
            array (
                'id' => 2394,
                'poskod' => '89609',
                'bandar' => 'Papar',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            394 =>
            array (
                'id' => 2395,
                'poskod' => '89650',
                'bandar' => 'Tambunan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            395 =>
            array (
                'id' => 2396,
                'poskod' => '89657',
                'bandar' => 'Tambunan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            396 =>
            array (
                'id' => 2397,
                'poskod' => '89658',
                'bandar' => 'Tambunan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            397 =>
            array (
                'id' => 2398,
                'poskod' => '89659',
                'bandar' => 'Tambunan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            398 =>
            array (
                'id' => 2399,
                'poskod' => '89700',
                'bandar' => 'Bongawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            399 =>
            array (
                'id' => 2400,
                'poskod' => '89707',
                'bandar' => 'Bongawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            400 =>
            array (
                'id' => 2401,
                'poskod' => '89708',
                'bandar' => 'Bongawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            401 =>
            array (
                'id' => 2402,
                'poskod' => '89709',
                'bandar' => 'Bongawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            402 =>
            array (
                'id' => 2403,
                'poskod' => '89720',
                'bandar' => 'Membakut',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:08',
                'updated_at' => '2019-10-14 08:43:08',
            ),
            403 =>
            array (
                'id' => 2404,
                'poskod' => '89727',
                'bandar' => 'Membakut',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            404 =>
            array (
                'id' => 2405,
                'poskod' => '89728',
                'bandar' => 'Membakut',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            405 =>
            array (
                'id' => 2406,
                'poskod' => '89729',
                'bandar' => 'Membakut',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            406 =>
            array (
                'id' => 2407,
                'poskod' => '89740',
                'bandar' => 'Kuala Penyu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            407 =>
            array (
                'id' => 2408,
                'poskod' => '89747',
                'bandar' => 'Kuala Penyu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            408 =>
            array (
                'id' => 2409,
                'poskod' => '89748',
                'bandar' => 'Kuala Penyu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            409 =>
            array (
                'id' => 2410,
                'poskod' => '89749',
                'bandar' => 'Kuala Penyu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            410 =>
            array (
                'id' => 2411,
                'poskod' => '89760',
                'bandar' => 'Menumbok',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            411 =>
            array (
                'id' => 2412,
                'poskod' => '89767',
                'bandar' => 'Menumbok',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            412 =>
            array (
                'id' => 2413,
                'poskod' => '89768',
                'bandar' => 'Menumbok',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            413 =>
            array (
                'id' => 2414,
                'poskod' => '89769',
                'bandar' => 'Menumbok',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            414 =>
            array (
                'id' => 2415,
                'poskod' => '89800',
                'bandar' => 'Beaufort',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            415 =>
            array (
                'id' => 2416,
                'poskod' => '89807',
                'bandar' => 'Beaufort',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            416 =>
            array (
                'id' => 2417,
                'poskod' => '89808',
                'bandar' => 'Beaufort',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            417 =>
            array (
                'id' => 2418,
                'poskod' => '89809',
                'bandar' => 'Beaufort',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            418 =>
            array (
                'id' => 2419,
                'poskod' => '89850',
                'bandar' => 'Sipitang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            419 =>
            array (
                'id' => 2420,
                'poskod' => '89857',
                'bandar' => 'Sipitang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:09',
                'updated_at' => '2019-10-14 08:43:09',
            ),
            420 =>
            array (
                'id' => 2421,
                'poskod' => '89858',
                'bandar' => 'Sipitang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            421 =>
            array (
                'id' => 2422,
                'poskod' => '89859',
                'bandar' => 'Sipitang',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            422 =>
            array (
                'id' => 2423,
                'poskod' => '89900',
                'bandar' => 'Tenom',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            423 =>
            array (
                'id' => 2424,
                'poskod' => '89907',
                'bandar' => 'Tenom',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            424 =>
            array (
                'id' => 2425,
                'poskod' => '89908',
                'bandar' => 'Tenom',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            425 =>
            array (
                'id' => 2426,
                'poskod' => '89909',
                'bandar' => 'Tenom',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            426 =>
            array (
                'id' => 2427,
                'poskod' => '89950',
                'bandar' => 'Nabawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            427 =>
            array (
                'id' => 2428,
                'poskod' => '89957',
                'bandar' => 'Nabawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            428 =>
            array (
                'id' => 2429,
                'poskod' => '89958',
                'bandar' => 'Nabawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            429 =>
            array (
                'id' => 2430,
                'poskod' => '89959',
                'bandar' => 'Nabawan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            430 =>
            array (
                'id' => 2431,
                'poskod' => '90000',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            431 =>
            array (
                'id' => 2432,
                'poskod' => '90009',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            432 =>
            array (
                'id' => 2433,
                'poskod' => '90100',
                'bandar' => 'Beluran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            433 =>
            array (
                'id' => 2434,
                'poskod' => '90107',
                'bandar' => 'Beluran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            434 =>
            array (
                'id' => 2435,
                'poskod' => '90109',
                'bandar' => 'Beluran',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            435 =>
            array (
                'id' => 2436,
                'poskod' => '90200',
                'bandar' => 'Kota Kinabatangan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            436 =>
            array (
                'id' => 2437,
                'poskod' => '90300',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:10',
                'updated_at' => '2019-10-14 08:43:10',
            ),
            437 =>
            array (
                'id' => 2438,
                'poskod' => '90307',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            438 =>
            array (
                'id' => 2439,
                'poskod' => '90400',
                'bandar' => 'Pamol',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            439 =>
            array (
                'id' => 2440,
                'poskod' => '90700',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            440 =>
            array (
                'id' => 2441,
                'poskod' => '90701',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            441 =>
            array (
                'id' => 2442,
                'poskod' => '90702',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            442 =>
            array (
                'id' => 2443,
                'poskod' => '90703',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            443 =>
            array (
                'id' => 2444,
                'poskod' => '90704',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            444 =>
            array (
                'id' => 2445,
                'poskod' => '90705',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            445 =>
            array (
                'id' => 2446,
                'poskod' => '90706',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            446 =>
            array (
                'id' => 2447,
                'poskod' => '90707',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            447 =>
            array (
                'id' => 2448,
                'poskod' => '90708',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            448 =>
            array (
                'id' => 2449,
                'poskod' => '90709',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            449 =>
            array (
                'id' => 2450,
                'poskod' => '90711',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            450 =>
            array (
                'id' => 2451,
                'poskod' => '90712',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            451 =>
            array (
                'id' => 2452,
                'poskod' => '90713',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            452 =>
            array (
                'id' => 2453,
                'poskod' => '90714',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:11',
                'updated_at' => '2019-10-14 08:43:11',
            ),
            453 =>
            array (
                'id' => 2454,
                'poskod' => '90715',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            454 =>
            array (
                'id' => 2455,
                'poskod' => '90716',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            455 =>
            array (
                'id' => 2456,
                'poskod' => '90717',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            456 =>
            array (
                'id' => 2457,
                'poskod' => '90718',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            457 =>
            array (
                'id' => 2458,
                'poskod' => '90719',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            458 =>
            array (
                'id' => 2459,
                'poskod' => '90720',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            459 =>
            array (
                'id' => 2460,
                'poskod' => '90721',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            460 =>
            array (
                'id' => 2461,
                'poskod' => '90722',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            461 =>
            array (
                'id' => 2462,
                'poskod' => '90723',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            462 =>
            array (
                'id' => 2463,
                'poskod' => '90724',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            463 =>
            array (
                'id' => 2464,
                'poskod' => '90725',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            464 =>
            array (
                'id' => 2465,
                'poskod' => '90726',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            465 =>
            array (
                'id' => 2466,
                'poskod' => '90727',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            466 =>
            array (
                'id' => 2467,
                'poskod' => '90728',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            467 =>
            array (
                'id' => 2468,
                'poskod' => '90729',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            468 =>
            array (
                'id' => 2469,
                'poskod' => '90730',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            469 =>
            array (
                'id' => 2470,
                'poskod' => '90731',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            470 =>
            array (
                'id' => 2471,
                'poskod' => '90732',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            471 =>
            array (
                'id' => 2472,
                'poskod' => '90733',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:12',
                'updated_at' => '2019-10-14 08:43:12',
            ),
            472 =>
            array (
                'id' => 2473,
                'poskod' => '90734',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            473 =>
            array (
                'id' => 2474,
                'poskod' => '90735',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            474 =>
            array (
                'id' => 2475,
                'poskod' => '90736',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            475 =>
            array (
                'id' => 2476,
                'poskod' => '90737',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            476 =>
            array (
                'id' => 2477,
                'poskod' => '90738',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            477 =>
            array (
                'id' => 2478,
                'poskod' => '90739',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            478 =>
            array (
                'id' => 2479,
                'poskod' => '90740',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            479 =>
            array (
                'id' => 2480,
                'poskod' => '90741',
                'bandar' => 'Sandakan',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            480 =>
            array (
                'id' => 2481,
                'poskod' => '91000',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            481 =>
            array (
                'id' => 2482,
                'poskod' => '91007',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            482 =>
            array (
                'id' => 2483,
                'poskod' => '91008',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            483 =>
            array (
                'id' => 2484,
                'poskod' => '91009',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            484 =>
            array (
                'id' => 2485,
                'poskod' => '91010',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            485 =>
            array (
                'id' => 2486,
                'poskod' => '91011',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            486 =>
            array (
                'id' => 2487,
                'poskod' => '91012',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:13',
                'updated_at' => '2019-10-14 08:43:13',
            ),
            487 =>
            array (
                'id' => 2488,
                'poskod' => '91013',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            488 =>
            array (
                'id' => 2489,
                'poskod' => '91014',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            489 =>
            array (
                'id' => 2490,
                'poskod' => '91015',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            490 =>
            array (
                'id' => 2491,
                'poskod' => '91016',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            491 =>
            array (
                'id' => 2492,
                'poskod' => '91017',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            492 =>
            array (
                'id' => 2493,
                'poskod' => '91018',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            493 =>
            array (
                'id' => 2494,
                'poskod' => '91019',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            494 =>
            array (
                'id' => 2495,
                'poskod' => '91020',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            495 =>
            array (
                'id' => 2496,
                'poskod' => '91021',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            496 =>
            array (
                'id' => 2497,
                'poskod' => '91022',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            497 =>
            array (
                'id' => 2498,
                'poskod' => '91023',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            498 =>
            array (
                'id' => 2499,
                'poskod' => '91024',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            499 =>
            array (
                'id' => 2500,
                'poskod' => '91025',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
        ));
        \DB::table('poskod')->insert(array (
            0 =>
            array (
                'id' => 2501,
                'poskod' => '91026',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            1 =>
            array (
                'id' => 2502,
                'poskod' => '91027',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            2 =>
            array (
                'id' => 2503,
                'poskod' => '91028',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            3 =>
            array (
                'id' => 2504,
                'poskod' => '91029',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            4 =>
            array (
                'id' => 2505,
                'poskod' => '91030',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:14',
                'updated_at' => '2019-10-14 08:43:14',
            ),
            5 =>
            array (
                'id' => 2506,
                'poskod' => '91031',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            6 =>
            array (
                'id' => 2507,
                'poskod' => '91032',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            7 =>
            array (
                'id' => 2508,
                'poskod' => '91033',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            8 =>
            array (
                'id' => 2509,
                'poskod' => '91034',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            9 =>
            array (
                'id' => 2510,
                'poskod' => '91035',
                'bandar' => 'Tawau',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            10 =>
            array (
                'id' => 2511,
                'poskod' => '91100',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            11 =>
            array (
                'id' => 2512,
                'poskod' => '91109',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            12 =>
            array (
                'id' => 2513,
                'poskod' => '91110',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            13 =>
            array (
                'id' => 2514,
                'poskod' => '91111',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            14 =>
            array (
                'id' => 2515,
                'poskod' => '91112',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            15 =>
            array (
                'id' => 2516,
                'poskod' => '91113',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            16 =>
            array (
                'id' => 2517,
                'poskod' => '91114',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            17 =>
            array (
                'id' => 2518,
                'poskod' => '91115',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            18 =>
            array (
                'id' => 2519,
                'poskod' => '91116',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:15',
                'updated_at' => '2019-10-14 08:43:15',
            ),
            19 =>
            array (
                'id' => 2520,
                'poskod' => '91117',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            20 =>
            array (
                'id' => 2521,
                'poskod' => '91118',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            21 =>
            array (
                'id' => 2522,
                'poskod' => '91119',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            22 =>
            array (
                'id' => 2523,
                'poskod' => '91120',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            23 =>
            array (
                'id' => 2524,
                'poskod' => '91121',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            24 =>
            array (
                'id' => 2525,
                'poskod' => '91122',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            25 =>
            array (
                'id' => 2526,
                'poskod' => '91123',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            26 =>
            array (
                'id' => 2527,
                'poskod' => '91124',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            27 =>
            array (
                'id' => 2528,
                'poskod' => '91125',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            28 =>
            array (
                'id' => 2529,
                'poskod' => '91126',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            29 =>
            array (
                'id' => 2530,
                'poskod' => '91127',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            30 =>
            array (
                'id' => 2531,
                'poskod' => '91128',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            31 =>
            array (
                'id' => 2532,
                'poskod' => '91150',
                'bandar' => 'Lahad Datu',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            32 =>
            array (
                'id' => 2533,
                'poskod' => '91200',
                'bandar' => 'Kunak',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            33 =>
            array (
                'id' => 2534,
                'poskod' => '91207',
                'bandar' => 'Kunak',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            34 =>
            array (
                'id' => 2535,
                'poskod' => '91209',
                'bandar' => 'Kunak',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:16',
                'updated_at' => '2019-10-14 08:43:16',
            ),
            35 =>
            array (
                'id' => 2536,
                'poskod' => '91300',
                'bandar' => 'Semporna',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            36 =>
            array (
                'id' => 2537,
                'poskod' => '91307',
                'bandar' => 'Semporna',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            37 =>
            array (
                'id' => 2538,
                'poskod' => '91308',
                'bandar' => 'Semporna',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            38 =>
            array (
                'id' => 2539,
                'poskod' => '91309',
                'bandar' => 'Semporna',
                'negeri_id' => 12,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            39 =>
            array (
                'id' => 2540,
                'poskod' => '93000',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            40 =>
            array (
                'id' => 2541,
                'poskod' => '93010',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            41 =>
            array (
                'id' => 2542,
                'poskod' => '93050',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            42 =>
            array (
                'id' => 2543,
                'poskod' => '93100',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            43 =>
            array (
                'id' => 2544,
                'poskod' => '93150',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            44 =>
            array (
                'id' => 2545,
                'poskod' => '93200',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            45 =>
            array (
                'id' => 2546,
                'poskod' => '93250',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            46 =>
            array (
                'id' => 2547,
                'poskod' => '93300',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            47 =>
            array (
                'id' => 2548,
                'poskod' => '93350',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            48 =>
            array (
                'id' => 2549,
                'poskod' => '93400',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            49 =>
            array (
                'id' => 2550,
                'poskod' => '93450',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            50 =>
            array (
                'id' => 2551,
                'poskod' => '93500',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            51 =>
            array (
                'id' => 2552,
                'poskod' => '93502',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:17',
                'updated_at' => '2019-10-14 08:43:17',
            ),
            52 =>
            array (
                'id' => 2553,
                'poskod' => '93503',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            53 =>
            array (
                'id' => 2554,
                'poskod' => '93504',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            54 =>
            array (
                'id' => 2555,
                'poskod' => '93505',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            55 =>
            array (
                'id' => 2556,
                'poskod' => '93506',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            56 =>
            array (
                'id' => 2557,
                'poskod' => '93507',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            57 =>
            array (
                'id' => 2558,
                'poskod' => '93508',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            58 =>
            array (
                'id' => 2559,
                'poskod' => '93514',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            59 =>
            array (
                'id' => 2560,
                'poskod' => '93516',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            60 =>
            array (
                'id' => 2561,
                'poskod' => '93517',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            61 =>
            array (
                'id' => 2562,
                'poskod' => '93518',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            62 =>
            array (
                'id' => 2563,
                'poskod' => '93519',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            63 =>
            array (
                'id' => 2564,
                'poskod' => '93520',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            64 =>
            array (
                'id' => 2565,
                'poskod' => '93527',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            65 =>
            array (
                'id' => 2566,
                'poskod' => '93529',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            66 =>
            array (
                'id' => 2567,
                'poskod' => '93532',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            67 =>
            array (
                'id' => 2568,
                'poskod' => '93540',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            68 =>
            array (
                'id' => 2569,
                'poskod' => '93550',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            69 =>
            array (
                'id' => 2570,
                'poskod' => '93551',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:18',
                'updated_at' => '2019-10-14 08:43:18',
            ),
            70 =>
            array (
                'id' => 2571,
                'poskod' => '93552',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            71 =>
            array (
                'id' => 2572,
                'poskod' => '93554',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            72 =>
            array (
                'id' => 2573,
                'poskod' => '93556',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            73 =>
            array (
                'id' => 2574,
                'poskod' => '93558',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            74 =>
            array (
                'id' => 2575,
                'poskod' => '93560',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            75 =>
            array (
                'id' => 2576,
                'poskod' => '93564',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            76 =>
            array (
                'id' => 2577,
                'poskod' => '93566',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            77 =>
            array (
                'id' => 2578,
                'poskod' => '93570',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            78 =>
            array (
                'id' => 2579,
                'poskod' => '93572',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            79 =>
            array (
                'id' => 2580,
                'poskod' => '93576',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            80 =>
            array (
                'id' => 2581,
                'poskod' => '93578',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:19',
                'updated_at' => '2019-10-14 08:43:19',
            ),
            81 =>
            array (
                'id' => 2582,
                'poskod' => '93582',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            82 =>
            array (
                'id' => 2583,
                'poskod' => '93586',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            83 =>
            array (
                'id' => 2584,
                'poskod' => '93590',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            84 =>
            array (
                'id' => 2585,
                'poskod' => '93592',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            85 =>
            array (
                'id' => 2586,
                'poskod' => '93594',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            86 =>
            array (
                'id' => 2587,
                'poskod' => '93596',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            87 =>
            array (
                'id' => 2588,
                'poskod' => '93600',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            88 =>
            array (
                'id' => 2589,
                'poskod' => '93604',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            89 =>
            array (
                'id' => 2590,
                'poskod' => '93606',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            90 =>
            array (
                'id' => 2591,
                'poskod' => '93608',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            91 =>
            array (
                'id' => 2592,
                'poskod' => '93609',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            92 =>
            array (
                'id' => 2593,
                'poskod' => '93610',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            93 =>
            array (
                'id' => 2594,
                'poskod' => '93612',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:20',
                'updated_at' => '2019-10-14 08:43:20',
            ),
            94 =>
            array (
                'id' => 2595,
                'poskod' => '93614',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            95 =>
            array (
                'id' => 2596,
                'poskod' => '93618',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            96 =>
            array (
                'id' => 2597,
                'poskod' => '93619',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            97 =>
            array (
                'id' => 2598,
                'poskod' => '93620',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            98 =>
            array (
                'id' => 2599,
                'poskod' => '93626',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            99 =>
            array (
                'id' => 2600,
                'poskod' => '93628',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            100 =>
            array (
                'id' => 2601,
                'poskod' => '93632',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            101 =>
            array (
                'id' => 2602,
                'poskod' => '93634',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            102 =>
            array (
                'id' => 2603,
                'poskod' => '93648',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            103 =>
            array (
                'id' => 2604,
                'poskod' => '93658',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            104 =>
            array (
                'id' => 2605,
                'poskod' => '93660',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            105 =>
            array (
                'id' => 2606,
                'poskod' => '93661',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            106 =>
            array (
                'id' => 2607,
                'poskod' => '93662',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            107 =>
            array (
                'id' => 2608,
                'poskod' => '93670',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            108 =>
            array (
                'id' => 2609,
                'poskod' => '93672',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:21',
                'updated_at' => '2019-10-14 08:43:21',
            ),
            109 =>
            array (
                'id' => 2610,
                'poskod' => '93677',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            110 =>
            array (
                'id' => 2611,
                'poskod' => '93690',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            111 =>
            array (
                'id' => 2612,
                'poskod' => '93694',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            112 =>
            array (
                'id' => 2613,
                'poskod' => '93700',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            113 =>
            array (
                'id' => 2614,
                'poskod' => '93702',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            114 =>
            array (
                'id' => 2615,
                'poskod' => '93704',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            115 =>
            array (
                'id' => 2616,
                'poskod' => '93706',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            116 =>
            array (
                'id' => 2617,
                'poskod' => '93708',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            117 =>
            array (
                'id' => 2618,
                'poskod' => '93710',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            118 =>
            array (
                'id' => 2619,
                'poskod' => '93712',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            119 =>
            array (
                'id' => 2620,
                'poskod' => '93714',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            120 =>
            array (
                'id' => 2621,
                'poskod' => '93716',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            121 =>
            array (
                'id' => 2622,
                'poskod' => '93718',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            122 =>
            array (
                'id' => 2623,
                'poskod' => '93720',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            123 =>
            array (
                'id' => 2624,
                'poskod' => '93722',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            124 =>
            array (
                'id' => 2625,
                'poskod' => '93724',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            125 =>
            array (
                'id' => 2626,
                'poskod' => '93726',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            126 =>
            array (
                'id' => 2627,
                'poskod' => '93728',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            127 =>
            array (
                'id' => 2628,
                'poskod' => '93730',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:22',
                'updated_at' => '2019-10-14 08:43:22',
            ),
            128 =>
            array (
                'id' => 2629,
                'poskod' => '93732',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            129 =>
            array (
                'id' => 2630,
                'poskod' => '93734',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            130 =>
            array (
                'id' => 2631,
                'poskod' => '93736',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            131 =>
            array (
                'id' => 2632,
                'poskod' => '93738',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            132 =>
            array (
                'id' => 2633,
                'poskod' => '93740',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            133 =>
            array (
                'id' => 2634,
                'poskod' => '93742',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            134 =>
            array (
                'id' => 2635,
                'poskod' => '93744',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            135 =>
            array (
                'id' => 2636,
                'poskod' => '93746',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            136 =>
            array (
                'id' => 2637,
                'poskod' => '93748',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            137 =>
            array (
                'id' => 2638,
                'poskod' => '93750',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            138 =>
            array (
                'id' => 2639,
                'poskod' => '93752',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            139 =>
            array (
                'id' => 2640,
                'poskod' => '93754',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            140 =>
            array (
                'id' => 2641,
                'poskod' => '93756',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            141 =>
            array (
                'id' => 2642,
                'poskod' => '93758',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            142 =>
            array (
                'id' => 2643,
                'poskod' => '93760',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            143 =>
            array (
                'id' => 2644,
                'poskod' => '93762',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:23',
                'updated_at' => '2019-10-14 08:43:23',
            ),
            144 =>
            array (
                'id' => 2645,
                'poskod' => '93764',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            145 =>
            array (
                'id' => 2646,
                'poskod' => '93900',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            146 =>
            array (
                'id' => 2647,
                'poskod' => '93902',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            147 =>
            array (
                'id' => 2648,
                'poskod' => '93904',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            148 =>
            array (
                'id' => 2649,
                'poskod' => '93906',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            149 =>
            array (
                'id' => 2650,
                'poskod' => '93908',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            150 =>
            array (
                'id' => 2651,
                'poskod' => '93910',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            151 =>
            array (
                'id' => 2652,
                'poskod' => '93912',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            152 =>
            array (
                'id' => 2653,
                'poskod' => '93914',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            153 =>
            array (
                'id' => 2654,
                'poskod' => '93916',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            154 =>
            array (
                'id' => 2655,
                'poskod' => '93990',
                'bandar' => 'Kuching',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            155 =>
            array (
                'id' => 2656,
                'poskod' => '94000',
                'bandar' => 'Bau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            156 =>
            array (
                'id' => 2657,
                'poskod' => '94007',
                'bandar' => 'Bau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            157 =>
            array (
                'id' => 2658,
                'poskod' => '94009',
                'bandar' => 'Bau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            158 =>
            array (
                'id' => 2659,
                'poskod' => '94200',
                'bandar' => 'Siburan',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            159 =>
            array (
                'id' => 2660,
                'poskod' => '94300',
                'bandar' => 'Kota Samarahan',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            160 =>
            array (
                'id' => 2661,
                'poskod' => '94500',
                'bandar' => 'Lundu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:24',
                'updated_at' => '2019-10-14 08:43:24',
            ),
            161 =>
            array (
                'id' => 2662,
                'poskod' => '94507',
                'bandar' => 'Lundu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            162 =>
            array (
                'id' => 2663,
                'poskod' => '94509',
                'bandar' => 'Lundu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            163 =>
            array (
                'id' => 2664,
                'poskod' => '94600',
                'bandar' => 'Asajaya',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            164 =>
            array (
                'id' => 2665,
                'poskod' => '94650',
                'bandar' => 'Kabong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            165 =>
            array (
                'id' => 2666,
                'poskod' => '94700',
                'bandar' => 'Serian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            166 =>
            array (
                'id' => 2667,
                'poskod' => '94707',
                'bandar' => 'Serian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            167 =>
            array (
                'id' => 2668,
                'poskod' => '94709',
                'bandar' => 'Serian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            168 =>
            array (
                'id' => 2669,
                'poskod' => '94750',
                'bandar' => 'Serian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            169 =>
            array (
                'id' => 2670,
                'poskod' => '94760',
                'bandar' => 'Serian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            170 =>
            array (
                'id' => 2671,
                'poskod' => '94800',
                'bandar' => 'Simunjan',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            171 =>
            array (
                'id' => 2672,
                'poskod' => '94807',
                'bandar' => 'Simunjan',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            172 =>
            array (
                'id' => 2673,
                'poskod' => '94809',
                'bandar' => 'Simunjan',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            173 =>
            array (
                'id' => 2674,
                'poskod' => '94850',
                'bandar' => 'Sebuyau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            174 =>
            array (
                'id' => 2675,
                'poskod' => '94900',
                'bandar' => 'Lingga',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            175 =>
            array (
                'id' => 2676,
                'poskod' => '94950',
                'bandar' => 'Pusa',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            176 =>
            array (
                'id' => 2677,
                'poskod' => '95000',
                'bandar' => 'Sri Aman',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            177 =>
            array (
                'id' => 2678,
                'poskod' => '95007',
                'bandar' => 'Sri Aman',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            178 =>
            array (
                'id' => 2679,
                'poskod' => '95008',
                'bandar' => 'Sri Aman',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:25',
                'updated_at' => '2019-10-14 08:43:25',
            ),
            179 =>
            array (
                'id' => 2680,
                'poskod' => '95009',
                'bandar' => 'Sri Aman',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            180 =>
            array (
                'id' => 2681,
                'poskod' => '95300',
                'bandar' => 'Roban',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            181 =>
            array (
                'id' => 2682,
                'poskod' => '95400',
                'bandar' => 'Saratok',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            182 =>
            array (
                'id' => 2683,
                'poskod' => '95407',
                'bandar' => 'Saratok',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            183 =>
            array (
                'id' => 2684,
                'poskod' => '95409',
                'bandar' => 'Saratok',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            184 =>
            array (
                'id' => 2685,
                'poskod' => '95500',
                'bandar' => 'Debak',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            185 =>
            array (
                'id' => 2686,
                'poskod' => '95600',
                'bandar' => 'Spaoh',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            186 =>
            array (
                'id' => 2687,
                'poskod' => '95700',
                'bandar' => 'Betong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            187 =>
            array (
                'id' => 2688,
                'poskod' => '95707',
                'bandar' => 'Betong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            188 =>
            array (
                'id' => 2689,
                'poskod' => '95709',
                'bandar' => 'Betong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            189 =>
            array (
                'id' => 2690,
                'poskod' => '95800',
                'bandar' => 'Engkilili',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            190 =>
            array (
                'id' => 2691,
                'poskod' => '95900',
                'bandar' => 'Lubok Antu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            191 =>
            array (
                'id' => 2692,
                'poskod' => '96000',
                'bandar' => 'Sibu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            192 =>
            array (
                'id' => 2693,
                'poskod' => '96007',
                'bandar' => 'Sibu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            193 =>
            array (
                'id' => 2694,
                'poskod' => '96008',
                'bandar' => 'Sibu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            194 =>
            array (
                'id' => 2695,
                'poskod' => '96009',
                'bandar' => 'Sibu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:26',
                'updated_at' => '2019-10-14 08:43:26',
            ),
            195 =>
            array (
                'id' => 2696,
                'poskod' => '96100',
                'bandar' => 'Sarikei',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            196 =>
            array (
                'id' => 2697,
                'poskod' => '96107',
                'bandar' => 'Sarikei',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            197 =>
            array (
                'id' => 2698,
                'poskod' => '96108',
                'bandar' => 'Sarikei',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            198 =>
            array (
                'id' => 2699,
                'poskod' => '96109',
                'bandar' => 'Sarikei',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            199 =>
            array (
                'id' => 2700,
                'poskod' => '96150',
                'bandar' => 'Belawai',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            200 =>
            array (
                'id' => 2701,
                'poskod' => '96200',
                'bandar' => 'Daro',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            201 =>
            array (
                'id' => 2702,
                'poskod' => '96250',
                'bandar' => 'Matu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            202 =>
            array (
                'id' => 2703,
                'poskod' => '96300',
                'bandar' => 'Dalat',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            203 =>
            array (
                'id' => 2704,
                'poskod' => '96307',
                'bandar' => 'Dalat',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            204 =>
            array (
                'id' => 2705,
                'poskod' => '96309',
                'bandar' => 'Dalat',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            205 =>
            array (
                'id' => 2706,
                'poskod' => '96350',
                'bandar' => 'Balingian',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            206 =>
            array (
                'id' => 2707,
                'poskod' => '96400',
                'bandar' => 'Mukah',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            207 =>
            array (
                'id' => 2708,
                'poskod' => '96410',
                'bandar' => 'Mukah',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            208 =>
            array (
                'id' => 2709,
                'poskod' => '96500',
                'bandar' => 'Bintangor',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            209 =>
            array (
                'id' => 2710,
                'poskod' => '96507',
                'bandar' => 'Bintangor',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            210 =>
            array (
                'id' => 2711,
                'poskod' => '96508',
                'bandar' => 'Bintangor',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:27',
                'updated_at' => '2019-10-14 08:43:27',
            ),
            211 =>
            array (
                'id' => 2712,
                'poskod' => '96509',
                'bandar' => 'Bintangor',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            212 =>
            array (
                'id' => 2713,
                'poskod' => '96600',
                'bandar' => 'Julau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            213 =>
            array (
                'id' => 2714,
                'poskod' => '96700',
                'bandar' => 'Kanowit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            214 =>
            array (
                'id' => 2715,
                'poskod' => '96707',
                'bandar' => 'Kanowit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            215 =>
            array (
                'id' => 2716,
                'poskod' => '96709',
                'bandar' => 'Kanowit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            216 =>
            array (
                'id' => 2717,
                'poskod' => '96800',
                'bandar' => 'Kapit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            217 =>
            array (
                'id' => 2718,
                'poskod' => '96807',
                'bandar' => 'Kapit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            218 =>
            array (
                'id' => 2719,
                'poskod' => '96809',
                'bandar' => 'Kapit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            219 =>
            array (
                'id' => 2720,
                'poskod' => '96850',
                'bandar' => 'Song',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            220 =>
            array (
                'id' => 2721,
                'poskod' => '96900',
                'bandar' => 'Belaga',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            221 =>
            array (
                'id' => 2722,
                'poskod' => '97000',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            222 =>
            array (
                'id' => 2723,
                'poskod' => '97007',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            223 =>
            array (
                'id' => 2724,
                'poskod' => '97008',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            224 =>
            array (
                'id' => 2725,
                'poskod' => '97009',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            225 =>
            array (
                'id' => 2726,
                'poskod' => '97010',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            226 =>
            array (
                'id' => 2727,
                'poskod' => '97011',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            227 =>
            array (
                'id' => 2728,
                'poskod' => '97012',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            228 =>
            array (
                'id' => 2729,
                'poskod' => '97013',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            229 =>
            array (
                'id' => 2730,
                'poskod' => '97014',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:28',
                'updated_at' => '2019-10-14 08:43:28',
            ),
            230 =>
            array (
                'id' => 2731,
                'poskod' => '97015',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            231 =>
            array (
                'id' => 2732,
                'poskod' => '97100',
                'bandar' => 'Sebauh',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            232 =>
            array (
                'id' => 2733,
                'poskod' => '97200',
                'bandar' => 'Tatau',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            233 =>
            array (
                'id' => 2734,
                'poskod' => '97300',
                'bandar' => 'Bintulu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            234 =>
            array (
                'id' => 2735,
                'poskod' => '98000',
                'bandar' => 'Miri',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            235 =>
            array (
                'id' => 2736,
                'poskod' => '98007',
                'bandar' => 'Miri',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            236 =>
            array (
                'id' => 2737,
                'poskod' => '98008',
                'bandar' => 'Miri',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            237 =>
            array (
                'id' => 2738,
                'poskod' => '98009',
                'bandar' => 'Miri',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            238 =>
            array (
                'id' => 2739,
                'poskod' => '98050',
                'bandar' => 'Baram',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            239 =>
            array (
                'id' => 2740,
                'poskod' => '98057',
                'bandar' => 'Baram',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            240 =>
            array (
                'id' => 2741,
                'poskod' => '98058',
                'bandar' => 'Baram',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            241 =>
            array (
                'id' => 2742,
                'poskod' => '98059',
                'bandar' => 'Baram',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            242 =>
            array (
                'id' => 2743,
                'poskod' => '98100',
                'bandar' => 'Lutong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            243 =>
            array (
                'id' => 2744,
                'poskod' => '98107',
                'bandar' => 'Lutong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:29',
                'updated_at' => '2019-10-14 08:43:29',
            ),
            244 =>
            array (
                'id' => 2745,
                'poskod' => '98109',
                'bandar' => 'Lutong',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            245 =>
            array (
                'id' => 2746,
                'poskod' => '98150',
                'bandar' => 'Bekenu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            246 =>
            array (
                'id' => 2747,
                'poskod' => '98157',
                'bandar' => 'Bekenu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            247 =>
            array (
                'id' => 2748,
                'poskod' => '98159',
                'bandar' => 'Bekenu',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            248 =>
            array (
                'id' => 2749,
                'poskod' => '98200',
                'bandar' => 'Niah',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            249 =>
            array (
                'id' => 2750,
                'poskod' => '98300',
                'bandar' => 'Long Lama',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            250 =>
            array (
                'id' => 2751,
                'poskod' => '98700',
                'bandar' => 'Limbang',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            251 =>
            array (
                'id' => 2752,
                'poskod' => '98707',
                'bandar' => 'Limbang',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            252 =>
            array (
                'id' => 2753,
                'poskod' => '98708',
                'bandar' => 'Limbang',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            253 =>
            array (
                'id' => 2754,
                'poskod' => '98709',
                'bandar' => 'Limbang',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            254 =>
            array (
                'id' => 2755,
                'poskod' => '98750',
                'bandar' => 'Nanga Medamit',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            255 =>
            array (
                'id' => 2756,
                'poskod' => '98800',
                'bandar' => 'Sundar',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            256 =>
            array (
                'id' => 2757,
                'poskod' => '98850',
                'bandar' => 'Lawas',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            257 =>
            array (
                'id' => 2758,
                'poskod' => '98857',
                'bandar' => 'Lawas',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
            258 =>
            array (
                'id' => 2759,
                'poskod' => '98859',
                'bandar' => 'Lawas',
                'negeri_id' => 13,
                'created_at' => '2019-10-14 08:43:30',
                'updated_at' => '2019-10-14 08:43:30',
            ),
        ));
    }
}
