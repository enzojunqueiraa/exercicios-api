<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioNoveRequest;
use Illuminate\Http\Request;

class ExercicioNoveController extends Controller
{
    public function divisivel(ExercicioNoveRequest $request)
    {
        $numeros = []; 

        for ($i = 1; $i <= 100; $i++) {
            if($i % $request->entrada == 0)
          array_push($numeros, $i);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
    }
}
