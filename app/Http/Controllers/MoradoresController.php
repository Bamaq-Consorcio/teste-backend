<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moradores;

class MoradoresController extends Controller
{
    public function index($id = null)
    {
        if($id)
        {
            $moradores = Moradores::where("id", $id)->get();
        }else{
            $moradores = Moradores::all();
        }

        $returnResponse = [];

        if(!$moradores)
        {
            return response()->json(['success' => false, 'msg' => 'Não foram localizados moradores'], 200);
        }

        foreach ($moradores as $index => $morador) {
            $returnResponse[$index] = [
                'id'        => $morador->id,
                'nome'      => $morador->nome,
                'email'     => $morador->email,
                'telefone'  => $morador->telefone
            ];

            $veiculos = $morador->veiculos()->get();
            $returnResponse[$index]['veiculos'] = [];

            foreach ($veiculos as $indexVeiculo => $veiculo) {
                $returnResponse[$index]['veiculos'][$indexVeiculo] = [
                    "id"    => $veiculo->id,
                    "placa" => $veiculo->placa,
                    "cor"   => $veiculo->cor,
                    "tipo"  => $veiculo->tipo,
                    "ano"   => $veiculo->ano,
                ];

                $vagas = $veiculo->vagasMorador()->get();
                $returnResponse[$index]['veiculos'][$indexVeiculo]['vagas'] = [];
    
                foreach ($vagas as $vaga) {
                    dd("ok");
                }
            }

            $apartamentos = $morador->apartamentos()->get();
            $returnResponse[$index]['apartamentos'] = [];

            foreach ($apartamentos as $apartamento) {
                $returnResponse[$index]['apartamentos'][] = [
                    "id"        => $apartamento->id,
                    "numero"    => $apartamento->numero,
                    "andar"     => $apartamento->andar,
                    "bloco"     => $apartamento->bloco,
                ];
            }
        }

        return response()->json(['success' => true, 'data' => $returnResponse]);
    }
}
