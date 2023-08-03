<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioTresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeiroNumero' => 'required | numeric' ,
            'segundoNumero' =>  'required | numeric' ,
            'terceiroNumero' =>  'required | numeric' ,
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'sucess' => false,
                'error' => $validator ->errors()
            ]));


    }


    public function messages()
    
    {
         return [

            'primeiroNumero.required' => 'Preencha o campo primeiro número' ,
            'primeiroNumero.numeric'  => 'O campo é somente números' ,
            

            'segundoNumero.required' => 'Preencha o campo segundo número' ,
            'segundoNumero.numeric'  => 'O campo é somente números' ,

            'terceiroNumero.required' => 'Preencha o campo primeiro número' ,
            'terceiroNumero.numeric'  => 'O campo é somente números' ,


         ];
    }
}
