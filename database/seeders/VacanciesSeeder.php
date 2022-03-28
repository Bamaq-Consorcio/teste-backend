<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacancies = [];
        $edifice_id = 1;
        for ($i = 1; $i <= 36; $i++) {
            
            array_push($vacancies, [
                'id' => $i,
                'name' => 'Vaga 0' . $i,
                'edifice_id' => $edifice_id,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ]);

            if($edifice_id == 3) {
                $edifice_id = 0;
            }
            $edifice_id ++;
        }
        
        DB::table('vacancies')->insert($vacancies);
            
    }
}
