<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioDoisRequest;
use Illuminate\Http\Request;

class ExercicioDoisController extends Controller
{
    public function retornarMaior(ExercicioDoisRequest $request){

        if($request->primeira_entrada > $request->segunda_entrada){
            return json_encode([
                'maior' => $request->primeira_entrada
            ]);
        } else if($request->segunda_entrada > $request->primeira_entrada){
            return json_encode([
                'maior' => $request->segunda_entrada
            ]);
        } else {
            return json_encode([
                'message' => 'As entradas são iguais'
            ]);
        }


    }
}
