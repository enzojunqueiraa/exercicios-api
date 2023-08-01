<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function numerosReais(Request $request){

        $primeiraEntrada = $request->primeiroNumero;
        $segundaEntrada =  $request->segundoNumero;
        $terceiraEntrada = $request->terceiroNumero;
        
        return json_encode([
            'resultado' => ($primeiraEntrada + $segundaEntrada + $terceiraEntrada) / 3
        ]); 
    }
}
