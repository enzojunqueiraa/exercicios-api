<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioSeisRequest;
use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function verificar(ExercicioSeisRequest $request){

        $n1 = $request->idade;

        if($request->idade >= 12  && $request->idade <= 18) {
            return json_encode([
                'mensagem' => 'É adolescente'
            ]);
        } else if($request->idade >= 18){
            return json_encode([
                'mensagem' => 'É adulto'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'É criança'
            ]);
        }

       

    }
}
