<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\ResidentVacancy;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function listRounds($id) {
        try {
            $residentVacancy = ResidentVacancy::getInfoResident($id);

            if(count($residentVacancy) > 0) {
                return response()->json([
                    'success' => true,
                    'status' => 'success',
                    'message' => 'Busca realizada com sucesso!',
                    'resident' => $residentVacancy,
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'status' => 'fail',
                    'message' => 'Nenhuma vaga atribuída a esse usuário ainda.',
                    'resident' => [],
                ]);
            }
        }catch(\Exception $e) {
            $error_message = $e->getMessage();
            return response()->json([
                'success' => false,
                'status' => 'fail',
                'message' => $error_message,
                'resident' => [],
            ]);
        }
        
    }
}
