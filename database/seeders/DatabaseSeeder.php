<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            VehiclesSeeder::class,
            EdificesSeeder::class,
            ApartmentsSeeder::class,
            ResidentsSeeder::class,
            VacanciesSeeder::class,
            
        ]);
    }
}
