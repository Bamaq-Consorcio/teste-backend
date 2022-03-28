<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            [
                'id' => 1,
                'license_plate' => 'TBV-7077',
                'color' => 'yellow',
                'type' => 2,
                'year' => 2019,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 2,
                'license_plate' => 'PFZ-2929',
                'color' => 'teal',
                'type' => 2,
                'year' => 2011,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 3,
                'license_plate' => 'YKG-7346',
                'color' => 'white',
                'type' => 1,
                'year' => 2021,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 4,
                'license_plate' => 'LZL-6778',
                'color' => 'purple',
                'type' => 1,
                'year' => 2012,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 5,
                'license_plate' => 'ETE-8743',
                'color' => 'aqua',
                'type' => 1,
                'year' => 2011,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 6,
                'license_plate' => 'QMO-8664',
                'color' => 'lime',
                'type' => 1,
                'year' => 2022,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 7,
                'license_plate' => 'VRT-6034',
                'color' => 'navy',
                'type' => 2,
                'year' => 2010,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 8,
                'license_plate' => 'BEP-5030',
                'color' => 'maroon',
                'type' => 2,
                'year' => 2019,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 9,
                'license_plate' => 'DPD-4499',
                'color' => 'teal',
                'type' => 2,
                'year' => 2011,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 10,
                'license_plate' => 'GOT-2793',
                'color' => 'purple',
                'type' => 1,
                'year' => 2022,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 11,
                'license_plate' => 'NDB-2950',
                'color' => 'green',
                'type' => 2,
                'year' => 2018,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 12,
                'license_plate' => 'BUG-8284',
                'color' => 'yellow',
                'type' => 1,
                'year' => 2013,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 13,
                'license_plate' => 'ZKP-6818',
                'color' => 'white',
                'type' => 1,
                'year' => 2012,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 14,
                'license_plate' => 'PEJ-6192',
                'color' => 'maroon',
                'type' => 1,
                'year' => 2015,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 15,
                'license_plate' => 'HPS-5963',
                'color' => 'yellow',
                'type' => 1,
                'year' => 2020,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 16,
                'license_plate' => 'YZF-1640',
                'color' => 'navy',
                'type' => 2,
                'year' => 2022,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 17,
                'license_plate' => 'WWW-5642',
                'color' => 'lime',
                'type' => 2,
                'year' => 2020,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 18,
                'license_plate' => 'GPG-4949',
                'color' => 'olive',
                'type' => 2,
                'year' => 2022,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 19,
                'license_plate' => 'UUC-4060',
                'color' => 'purple',
                'type' => 2,
                'year' => 2012,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 20,
                'license_plate' => 'YYN-3921',
                'color' => 'black',
                'type' => 2,
                'year' => 2010,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 21,
                'license_plate' => 'OSI-9753',
                'color' => 'aqua',
                'type' => 1,
                'year' => 2016,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 22,
                'license_plate' => 'VFU-0872',
                'color' => 'gray',
                'type' => 1,
                'year' => 2015,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 23,
                'license_plate' => 'ZQO-6663',
                'color' => 'purple',
                'type' => 1,
                'year' => 2013,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 24,
                'license_plate' => 'ZSP-6385',
                'color' => 'yellow',
                'type' => 1,
                'year' => 2010,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 25,
                'license_plate' => 'LDZ-6019',
                'color' => 'aqua',
                'type' => 1,
                'year' => 2016,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 26,
                'license_plate' => 'GXJ-9391',
                'color' => 'aqua',
                'type' => 1,
                'year' => 2021,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 27,
                'license_plate' => 'QVV-0394',
                'color' => 'black',
                'type' => 1,
                'year' => 2015,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 28,
                'license_plate' => 'KQM-8699',
                'color' => 'lime',
                'type' => 2,
                'year' => 2012,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 29,
                'license_plate' => 'DRS-2821',
                'color' => 'yellow',
                'type' => 2,
                'year' => 2017,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 30,
                'license_plate' => 'FZE-3318',
                'color' => 'maroon',
                'type' => 1,
                'year' => 2014,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 31,
                'license_plate' => 'ONS-1441',
                'color' => 'lime',
                'type' => 1,
                'year' => 2014,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 32,
                'license_plate' => 'ZRJ-1414',
                'color' => 'purple',
                'type' => 1,
                'year' => 2022,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 33,
                'license_plate' => 'PVY-2211',
                'color' => 'navy',
                'type' => 2,
                'year' => 2010,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 34,
                'license_plate' => 'UZG-9338',
                'color' => 'purple',
                'type' => 1,
                'year' => 2011,
                'created_at' => '2022-03-03 19:23:27.000',
                'updated_at' => '2022-03-03 19:23:27.000'
            ],
            [
                'id' => 35,
                'license_plate' => 'WMF-6713',
                'color' => 'purple',
                'type' => 1,
                'year' => 2013,
                'created_at' => '2022-03-03 19:23:28.000',
                'updated_at' => '2022-03-03 19:23:28.000'
            ],
            [
                'id' => 36,
                'license_plate' => 'SMK-3594',
                'color' => 'maroon',
                'type' => 2,
                'year' => 2018,
                'created_at' => '2022-03-03 19:23:28.000',
                'updated_at' => '2022-03-03 19:23:28.000'
            ]
        ];
        
        DB::table('vehicles')->insert($vehicles);
        
    }
}
