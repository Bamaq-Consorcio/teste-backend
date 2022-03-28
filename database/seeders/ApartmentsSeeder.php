<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = [
            [
                'id' => 1,
                'number' => 203,
                'floor' => 2,
                'edifice_id' => 1,
                'resident_id' => 27,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 2,
                'number' => 104,
                'floor' => 1,
                'edifice_id' => 2,
                'resident_id' => 17,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 3,
                'number' => 301,
                'floor' => 3,
                'edifice_id' => 2,
                'resident_id' => 33,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 4,
                'number' => 202,
                'floor' => 2,
                'edifice_id' => 3,
                'resident_id' => 28,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 5,
                'number' => 304,
                'floor' => 3,
                'edifice_id' => 3,
                'resident_id' => 18,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 6,
                'number' => 102,
                'floor' => 1,
                'edifice_id' => 3,
                'resident_id' => 1,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 7,
                'number' => 203,
                'floor' => 2,
                'edifice_id' => 3,
                'resident_id' => 19,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 8,
                'number' => 302,
                'floor' => 3,
                'edifice_id' => 2,
                'resident_id' => 11,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 9,
                'number' => 302,
                'floor' => 3,
                'edifice_id' => 1,
                'resident_id' => 29,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 10,
                'number' => 104,
                'floor' => 1,
                'edifice_id' => 3,
                'resident_id' => 2,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 11,
                'number' => 203,
                'floor' => 2,
                'edifice_id' => 2,
                'resident_id' => 20,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 12,
                'number' => 201,
                'floor' => 2,
                'edifice_id' => 1,
                'resident_id' => 12,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 13,
                'number' => 103,
                'floor' => 1,
                'edifice_id' => 2,
                'resident_id' => 30,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 14,
                'number' => 204,
                'floor' => 2,
                'edifice_id' => 3,
                'resident_id' => 31,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 15,
                'number' => 204,
                'floor' => 2,
                'edifice_id' => 2,
                'resident_id' => 5,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 16,
                'number' => 202,
                'floor' => 2,
                'edifice_id' => 1,
                'resident_id' => 32,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 17,
                'number' => 304,
                'floor' => 3,
                'edifice_id' => 2,
                'resident_id' => 6,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 18,
                'number' => 303,
                'floor' => 3,
                'edifice_id' => 1,
                'resident_id' => 13,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 19,
                'number' => 104,
                'floor' => 1,
                'edifice_id' => 1,
                'resident_id' => 7,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 20,
                'number' => 204,
                'floor' => 2,
                'edifice_id' => 1,
                'resident_id' => 21,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 21,
                'number' => 202,
                'floor' => 2,
                'edifice_id' => 2,
                'resident_id' => 22,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 22,
                'number' => 303,
                'floor' => 3,
                'edifice_id' => 2,
                'resident_id' => 8,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 23,
                'number' => 101,
                'floor' => 1,
                'edifice_id' => 1,
                'resident_id' => 34,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 24,
                'number' => 103,
                'floor' => 1,
                'edifice_id' => 3,
                'resident_id' => 23,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 25,
                'number' => 201,
                'floor' => 2,
                'edifice_id' => 3,
                'resident_id' => 9,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 26,
                'number' => 301,
                'floor' => 3,
                'edifice_id' => 1,
                'resident_id' => 35,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 27,
                'number' => 102,
                'floor' => 1,
                'edifice_id' => 2,
                'resident_id' => 14,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 28,
                'number' => 102,
                'floor' => 1,
                'edifice_id' => 1,
                'resident_id' => 3,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 29,
                'number' => 101,
                'floor' => 1,
                'edifice_id' => 2,
                'resident_id' => 15,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 30,
                'number' => 201,
                'floor' => 2,
                'edifice_id' => 2,
                'resident_id' => 36,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 31,
                'number' => 303,
                'floor' => 3,
                'edifice_id' => 3,
                'resident_id' => 10,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 32,
                'number' => 301,
                'floor' => 3,
                'edifice_id' => 3,
                'resident_id' => 4,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 33,
                'number' => 101,
                'floor' => 1,
                'edifice_id' => 3,
                'resident_id' => 16,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 34,
                'number' => 103,
                'floor' => 1,
                'edifice_id' => 1,
                'resident_id' => 24,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 35,
                'number' => 304,
                'floor' => 3,
                'edifice_id' => 1,
                'resident_id' => 25,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 36,
                'number' => 302,
                'floor' => 3,
                'edifice_id' => 3,
                'resident_id' => 26,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ]
        ];

        DB::table('apartments')->insert($apartments);
    }
}
