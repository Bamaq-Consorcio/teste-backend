<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Situacao;

class SituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situacoes = [
            "Livre",
            "Ocupada",
        ];

        foreach ($situacoes as $situacao) {
            $verifica = Situacao::where("descricao", $situacao)->first();

            if(!$verifica)
            {
                Situacao::create([
                    "descricao" => $situacao
                ]);
            }
        }
    }
}
