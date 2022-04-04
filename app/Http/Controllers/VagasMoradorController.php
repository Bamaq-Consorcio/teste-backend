<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vagas;
use App\Models\VagasMorador;
use App\Models\Moradores;
use App\Models\Veiculos;
use App\Models\Apartamentos;

use Carbon\Carbon;

class VagasMoradorController extends Controller
{
    public function indicaVaga(Request $request)
    {
        if(!$request->has('placa'))
        {
            return response()->json(['success' => false, 'msg' => 'Placa do Veículo não informada!']);  
        }
        
        $placaVeiculo = $request->get('placa');

        $veiculo = Veiculos::where('placa', $placaVeiculo)->first();

        if(!$veiculo)
        {
            return response()->json(['success' => false, 'msg' => 'Veículo não localizado!']);
        }

        $morador = Moradores::where('veiculo_id', $veiculo->id)->first();

        if(!$morador)
        {
            return response()->json(['success' => false, 'msg' => 'Morador não localizado!']);
        }

        $apartamento = Apartamentos::find($morador->apartamento_id);

        if(!$apartamento)
        {
            return response()->json(['success' => false, 'msg' => 'Morador não localizado!']);
        }

        $dataInicio = Carbon::now()->subDays('7');
        $dataFim = Carbon::now();

        $historicoVagasId = VagasMorador::where("id_veiculo", $veiculo->id)
                                        ->whereBetween("created_at", [$dataInicio, $dataFim])
                                        ->pluck('id');

        $verificaVaga     = VagasMorador::where("id_veiculo", $veiculo->id)
                                        ->where("created_at", "like", Carbon::now()->format("Y-m-d")."%")
                                        ->first();
        if(!$verificaVaga)
        {
            $verificaVagaAnterior = VagasMorador::where("id_veiculo", $veiculo->id)
                                            ->where("created_at", "like", Carbon::now()->subDays('1')->format("Y-m-d")."%")
                                            ->first();

            if($verificaVagaAnterior)
            {
                $verificaVagaAnterior->situacao = 2;
                $verificaVagaAnterior->update();

                $vagaAnterior = Vagas::find($verificaVagaAnterior->id_vaga);
                $vagaAnterior->situacao = 1;
                $vagaAnterior->update();
            }

            $vagasDisponiveis = Vagas::where("bloco", $apartamento->bloco)
                                        ->where("situacao_id", 1)
                                        ->whereNotIn("id_vaga", $historicoVagasId)
                                        ->pluck('id')->toArray();
    
            $keyVaga = array_rand($vagasDisponiveis);
    
            VagasMorador::create([
                "id_vaga"       => $vagasDisponiveis[$keyVaga],
                "id_veiculo"    => $veiculo->id,
                "id_morador"    => $morador->id,
                "situacao_id"   => 1
            ]);
    
            $vaga = Vagas::find($vagasDisponiveis[$keyVaga]);
            $vaga->situacao_id = 2;
            $vaga->update();
        }else{
            $vaga = Vagas::find($verificaVaga->id_vaga);
        }
        
        return response()->json(["success" => true, "data" => [
            "vaga_numero" => $vaga->numero,
            "vaga_bloco"  => $vaga->bloco,
        ]]);
    }
}
