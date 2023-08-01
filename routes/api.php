<?php

use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', 
[ExercicioTresController::class, 'numerosReais']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificarNumero']);

Route::post('exercicio/cinco', 
[ExercicioCincoController::class, 'verificarNumero']);

Route::post('exercicio/seis', 
[ExercicioSeisController::class, 'verificar']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito', 
[ExercicioOitoController::class, 'tabuada']);

Route::post('exercicio/nove', 
[ExercicioNoveController::class, 'divisivel']);
