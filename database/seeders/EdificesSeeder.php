<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdificesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edifices = [
            [
                'id' => 1,
                'name' => 'Bloco 01',
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 2,
                'name' => 'Bloco 02',
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 3,
                'name' => 'Bloco 03',
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
        ];

        DB::table('edifices')->insert($edifices);
    }
}
