<?php

namespace Database\Seeders;

use App\Models\Resident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $residents = [
      [
        'id' => 34,
        'name' => 'Dr. Valentina Balestero Deverso',
        'email' => 'glozano@example.com',
        'phone' => '846751786307',
        'vehicle_id' => 15,
        'apartment_id' => 1,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 3,
        'name' => 'Dr. Isabelly Zaragoça Galvão',
        'email' => 'rodrigo.delatorre@example.com',
        'phone' => '6809910889',
        'vehicle_id' => 10,
        'apartment_id' => 2,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 6,
        'name' => 'Srta. Ana Naiara Velasques',
        'email' => 'duarte.alma@example.net',
        'phone' => 3525702479033,
        'vehicle_id' => 18,
        'apartment_id' => 3,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 1,
        'name' => 'Luísa Deverso Vasques',
        'email' => 'colaco.natalia@example.net',
        'phone' => 8509373999503,
        'vehicle_id' => 24,
        'apartment_id' => 4,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 8,
        'name' => 'Lucas Ronaldo Marques',
        'email' => 'galhardo.robson@example.net',
        'phone' => 97401197785,
        'vehicle_id' => 14,
        'apartment_id' => 5,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 4,
        'name' => 'Dr. Ivan Salazar de Aguiar Filho',
        'email' => 'cristiana17@example.com',
        'phone' => 93144387982,
        'vehicle_id' => 22,
        'apartment_id' => 6,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 16,
        'name' => 'Marco Perez Sobrinho',
        'email' => 'tbittencourt@example.net',
        'phone' => 628863820786,
        'vehicle_id' => 35,
        'apartment_id' => 7,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 28,
        'name' => 'Sr. Jefferson Gil da Cruz',
        'email' => 'treis@example.com',
        'phone' => 247089162,
        'vehicle_id' => 21,
        'apartment_id' => 8,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 36,
        'name' => 'Sra. Júlia Rodrigues',
        'email' => 'vsalgado@example.com',
        'phone' => 24165147674,
        'vehicle_id' => 27,
        'apartment_id' => 9,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 17,
        'name' => 'Kevin Estrada Paes Jr.',
        'email' => 'isoares@example.org',
        'phone' => 26627298447,
        'vehicle_id' => 3,
        'apartment_id' => 10,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 33,
        'name' => 'Sr. Luan Danilo Solano Sobrinho',
        'email' => 'mbittencourt@example.com',
        'phone' => 8505456799943,
        'vehicle_id' => 31,
        'apartment_id' => 11,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 31,
        'name' => 'Dr. Martinho Danilo Ferreira',
        'email' => 'mrocha@example.org',
        'phone' => 96566954536,
        'vehicle_id' => 6,
        'apartment_id' => 12,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 20,
        'name' => 'Dr. Emanuelly Aranda Azevedo Filho',
        'email' => 'zaragoca.natan@example.com',
        'phone' => 351260872481,
        'vehicle_id' => 33,
        'apartment_id' => 13,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 15,
        'name' => 'Sra. Betina Galindo',
        'email' => 'liz98@example.com',
        'phone' => 22805589301,
        'vehicle_id' => 1,
        'apartment_id' => 14,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 19,
        'name' => 'Dr. Hernani Wilson Souza Neto',
        'email' => 'diana15@example.net',
        'phone' => 97433131170,
        'vehicle_id' => 32,
        'apartment_id' => 15,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 30,
        'name' => 'Giovane Feliciano Leon',
        'email' => 'cordeiro.perola@example.net',
        'phone' => 218947620714,
        'vehicle_id' => 4,
        'apartment_id' => 16,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 21,
        'name' => 'Arthur Deverso Mendes Jr.',
        'email' => 'patricia86@example.org',
        'phone' => 38609825485,
        'vehicle_id' => 5,
        'apartment_id' => 17,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 32,
        'name' => 'Sr. Miguel Cristian Tamoio Jr.',
        'email' => 'jeronimo48@example.net',
        'phone' => 852524059282,
        'vehicle_id' => 2,
        'apartment_id' => 18,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 35,
        'name' => 'Sr. Tomás Uchoa Rios Jr.',
        'email' => 'kelly.marin@example.com',
        'phone' => 22373841060,
        'vehicle_id' => 34,
        'apartment_id' => 19,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 11,
        'name' => 'Sra. Anita Reis Zaragoça Sobrinho',
        'email' => 'dacruz.wagner@example.com',
        'phone' => 4734446929,
        'vehicle_id' => 12,
        'apartment_id' => 20,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 9,
        'name' => 'Srta. Larissa de Freitas',
        'email' => 'ofeliciano@example.org',
        'phone' => 93999370442,
        'vehicle_id' => 25,
        'apartment_id' => 21,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 23,
        'name' => 'Dr. Mirela Tamoio Delvalle',
        'email' => 'jserra@example.net',
        'phone' => 3728660392667,
        'vehicle_id' => 8,
        'apartment_id' => 22,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 5,
        'name' => 'Dr. Joaquim de Arruda Jr.',
        'email' => 'hernani71@example.org',
        'phone' => 68609175609,
        'vehicle_id' => 11,
        'apartment_id' => 23,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 18,
        'name' => 'Abgail Fidalgo Neto',
        'email' => 'clara.santos@example.com',
        'phone' => 387205071053,
        'vehicle_id' => 26,
        'apartment_id' => 24,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 27,
        'name' => 'Márcia Maia Esteves Jr.',
        'email' => 'rangel.julio@example.com',
        'phone' => 50474528742,
        'vehicle_id' => 36,
        'apartment_id' => 25,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 2,
        'name' => 'Dr. Emílio Saito Sanches Neto',
        'email' => 'fabiana24@example.com',
        'phone' => 6853850861362,
        'vehicle_id' => 30,
        'apartment_id' => 26,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 12,
        'name' => 'Tiago Ramos Valdez',
        'email' => 'fabricio.alves@example.net',
        'phone' => 2699957751,
        'vehicle_id' => 16,
        'apartment_id' => 27,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 29,
        'name' => 'Sra. Gabi Lívia Aguiar Jr.',
        'email' => 'clara.meireles@example.net',
        'phone' => 22257909056,
        'vehicle_id' => 23,
        'apartment_id' => 28,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 13,
        'name' => 'Felipe Duarte',
        'email' => 'kvale@example.net',
        'phone' => 6772799191,
        'vehicle_id' => 19,
        'apartment_id' => 29,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 26,
        'name' => 'Dr. Joaquim Ramires Mascarenhas Sobrinho',
        'email' => 'aurora.saraiva@example.net',
        'phone' => 983377860960,
        'vehicle_id' => 9,
        'apartment_id' => 30,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 25,
        'name' => 'Denis Sérgio Fernandes Neto',
        'email' => 'eric43@example.org',
        'phone' => 70419405902,
        'vehicle_id' => 13,
        'apartment_id' => 31,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 22,
        'name' => 'Dr. Lucio André Fidalgo',
        'email' => 'quintana.adriel@example.net',
        'phone' => 817254987192,
        'vehicle_id' => 28,
        'apartment_id' => 32,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 7,
        'name' => 'Marcos Dener Rocha',
        'email' => 'dalcantara@example.com',
        'phone' => 852880565307,
        'vehicle_id' => 17,
        'apartment_id' => 33,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 24,
        'name' => 'Cristiano Leon',
        'email' => 'bsaito@example.org',
        'phone' => 50611565041,
        'vehicle_id' => 20,
        'apartment_id' => 34,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 10,
        'name' => 'Heloísa de Freitas',
        'email' => 'vitoria69@example.org',
        'phone' => 38990699885,
        'vehicle_id' => 7,
        'apartment_id' => 35,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ],
      [
        'id' => 14,
        'name' => 'Sr. Lucio Serna Amaral Jr.',
        'email' => 'george45@example.org',
        'phone' => 55485375997,
        'vehicle_id' => 29,
        'apartment_id' => 36,
        'created_at' => '2022-03-03 19:23:28.000',
        'updated_at' => '2022-03-03 19:23:28.000'
      ]
    ];
    
    DB::table('residents')->insert($residents); 
  }
}
