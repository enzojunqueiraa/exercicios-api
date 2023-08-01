<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function verificarNumero(Request $request){

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
