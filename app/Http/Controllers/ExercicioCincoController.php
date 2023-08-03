<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioCincoRequest;
use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function verificarNumero(ExercicioCincoRequest $request){

        $n1 = $request->numero;
        if($request->numero % 4 ==0) {
            return json_encode([
                'mensagem ' => 'É dívisivel por 4'
            ]);
        }else {
            return json_encode([
                'mensagem' => 'não é divisivel'
            ]);
        }

        

        
    }
}
