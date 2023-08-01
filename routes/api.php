<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDezController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioDozeController;
use App\Http\Controllers\ExercicioNoveController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioTrezeController;
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

Route::get('exercicio/doze', 
[ExercicioDozeController::class, 'exibirNumeros']);

Route::post('exercicio/dez', 
[ExercicioDezController::class, 'exibirNumeros']);

Route::post('exercicio/treze', 
[ExercicioTrezeController::class, 'dividirInformar']);



