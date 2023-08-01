<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTrezeController extends Controller
{
    public function dividirInformar()
    {
        $numeros = []; 

        for ($i = 1000; $i <= 1999; $i++) {
          if($i % 11 == 5)
            array_push($numeros, $i);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
}

}
