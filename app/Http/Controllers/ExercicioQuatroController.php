<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioQuatroRequest;
use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{
    public function verificarNumero(ExercicioQuatroRequest $request){

        if($request->numero % 2 == 0){
            return json_encode([
                'mensagem' => 'Par'
            ]);
        } else {
            return json_encode([
                'mensagem' => ' Impar'
            ]);
        }
    }
}
