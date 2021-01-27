<?php

namespace App\Http\Requests;

use App\Enums\UserGender;
use BenSampo\Enum\Rules\EnumValue;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
        'nickname' => 'apelido',
        'code' => 'código',
        'email' => 'e-mail',
        'phone' => 'telefone',
        'cell_phone' => 'celular',
        'birthday' => 'data de nascimento',
        'customer_since' => 'cliente desde',
        'gender' => 'gênero',
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
        'gender' => (int)sanitize($this->gender),
        'birthday' => Carbon::createFromFormat('d/m/Y', $this->birthday, 'America/Sao_Paulo')
            ->format('Y-m-d'),
        'customer_since' => Carbon::createFromFormat('d/m/Y', $this->customer_since, 'America/Sao_Paulo')
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
        'nickname' => ['nullable', 'string', 'min:3', 'max:150'],
        'code' => ['nullable', 'string', 'min:3', 'max:150'],
        'email' => ['nullable', 'string', 'email', 'unique:customers,email'],
        'phone' => ['nullable'],
        'cell_phone' => ['nullable'],
        'birthday' => ['nullable', 'date', 'date_format:Y-m-d', 'before_or_equal:10 years ago'],
        'customer_since' => ['nullable', 'date', 'date_format:Y-m-d'],
        'gender' => ['required', new EnumValue(UserGender::class)],
        'notes' => ['nullable', 'string', 'min:3', 'max:500'],
    ];
  }
}
