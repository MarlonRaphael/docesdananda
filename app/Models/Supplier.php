<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  protected $fillable = [
      'name',
      'nickname',
      'description',
      'email',
      'code',
      'cnpj',
      'notes',
  ];

  protected $casts = [
      'created_at' => 'datetime',
      'updated_at' => 'datetime',
  ];

  /**
   * @var string[]
   */
  protected $dates = [
      'created_at',
      'updated_at',
  ];

  public function contacts()
  {
    return $this->morphMany(Contact::class, 'contactable');
  }

  public function setCnpjAttribute(string $value)
  {
    $this->attributes['cnpj'] = sanitize($value);
  }

  public function setCodeAttribute(string $value)
  {
    $this->attributes['code'] = sanitize($value);
  }
}
