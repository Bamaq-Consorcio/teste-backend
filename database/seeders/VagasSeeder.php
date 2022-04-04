<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vagas;

class VagasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocos = [
            "1",
            "2",
            "3",
        ];

        foreach ($blocos as $bloco) {
            for ($i=1; $i < 13 ; $i++) {

                $verifica = Vagas::where('numero', $i)->where('bloco', $bloco)->first();

                if(!$verifica)
                {
                    Vagas::create([
                        "numero"        => $i,
                        "bloco"         => $bloco,
                        "situacao_id"   => 1
                    ]);
                }
            }
        }
    }
}
