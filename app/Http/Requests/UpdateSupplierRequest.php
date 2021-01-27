<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return auth()->guard()->check();
  }

  /**
   * Get custom attributes for validator errors.
   *
   * @return array
   */
  public function attributes()
  {
    return [
        'name' => 'nome',
        'nickname' => 'nome fantasia',
        'description' => 'descrição',
        'email' => 'e-mail',
        'code' => 'código',
        'notes' => 'notas',
    ];
  }

  /**
   * Prepare the data for validation.
   *
   * @return void
   */
  protected function prepareForValidation()
  {
    $this->merge([
        'cnpj' => sanitize($this->cnpj)
    ]);
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
        'name' => ['required', 'string', 'min:3', 'max:150'],
        'nickname' => ['nullable', 'string', 'min:3', 'max:150'],
        'description' => ['nullable', 'string', 'min:3', 'max:150'],
        'email' => ['required', 'string', 'email',
            Rule::unique('suppliers', 'email')->ignore($this->supplier->email)
        ],
        'code' => ['nullable', 'string', 'min:3', 'max:8'],
        'cnpj' => ['required', 'string', 'min:14', 'max:18',
            Rule::unique('suppliers', 'cnpj')->ignore($this->supplier->cnpj)
        ],
        'notes' => ['nullable', 'string', 'min:3', 'max:500'],
    ];
  }
}
