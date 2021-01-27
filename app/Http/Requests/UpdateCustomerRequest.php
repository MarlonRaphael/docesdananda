<?php

namespace App\Http\Requests;

use App\Enums\UserGender;
use BenSampo\Enum\Rules\EnumValue;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
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
        'email' => 'e-mail',
        'phone' => 'telefone',
        'cell_phone' => 'celular',
        'birthday' => 'data de nascimento',
        'gender' => 'gênero',
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
        'birthday' => Carbon::createFromFormat('d/m/Y', $this->birthday, 'America/Sao_Paulo')
            ->format('Y-m-d'),
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
        'email' => ['required', 'string', 'email',
            Rule::unique('customers', 'email')->ignore($this->customer->id)
        ],
        'phone' => ['nullable'],
        'cell_phone' => ['nullable'],
        'birthday' => ['nullable', 'date', 'date_format:Y-m-d', 'before_or_equal:10 years ago'],
        'gender' => ['required', 'string', new EnumValue(UserGender::class)],
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
        'email.unique' => 'E-mail já cadastrado',
        'birthday.before_or_equal' => 'O cliente deve ter 10 anos no mínimo',
    ];
  }
}
