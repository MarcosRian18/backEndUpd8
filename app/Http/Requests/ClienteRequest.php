<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class ClienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $clienteId = $this->route('cliente') ? $this->route('cliente')->id : null;

        return [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|min:11|max:11|unique:clientes,cpf,' . $clienteId,
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:M,F',
            'endereco' => 'required|string|max:255',
            'estado_id' => 'required|exists:estados,id',
            'cidade_id' => 'required|exists:cidades,id'
        ];
    }

    public function after(Validator $validator)
    {
        if ($validator->fails()) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422));
        }
        return function () {};
    }
    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma sequência de caracteres válida.',
            'nome.max' => 'O nome deve ter no máximo :max caracteres.',
            
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.string' => 'O CPF deve ser uma sequência de caracteres válida.',
            'cpf.unique' => 'O CPF informado já está cadastrado.',
            'cpf.max'=> 'O cpf deve ter no máximo :max caracteres',
            'cpf.min'=> 'O cpf deve ter no minimo :min caracteres',


            'data_nascimento.required' => 'A data de nascimento é obrigatória.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida (formato AAAA-MM-DD).',

            'sexo.required' => 'O campo sexo é obrigatório.',
            'sexo.in' => 'O sexo deve ser "M" (Masculino) ou "F" (Feminino).',

            'endereco.required' => 'O endereço é obrigatório.',
            'endereco.string' => 'O campo endereço deve ser uma sequência de caracteres válida.',
            'endereco.max' => 'O endereço deve ter no máximo :max caracteres.',

            'estado_id.required' => 'O estado é obrigatório.',
            'estado_id.exists' => 'O estado selecionado é inválido.',

            'cidade_id.required' => 'A cidade é obrigatória.',
            'cidade_id.exists' => 'A cidade selecionada é inválida.'
        ];
    }
}
