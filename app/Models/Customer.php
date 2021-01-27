<?php

namespace App\Models;

use App\Enums\UserGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  protected $fillable = [
      'name',
      'nickname',
      'email',
      'code',
      'birthday',
      'customer_since',
      'gender',
      'notes',
  ];

  protected $casts = [
      'birthday' => 'date',
      'customer_since' => 'date',
      'gender' => UserGender::class,
      'created_at' => 'datetime',
      'updated_at' => 'datetime',
  ];

  /**
   * @var string[]
   */
  protected $dates = [
      'birthday',
      'customer_since',
      'created_at',
      'updated_at',
  ];

  protected $appends = [
      'gender_view'
  ];

  public function contacts()
  {
    return $this->morphMany(Contact::class, 'contactable');
  }

  public function getGenderViewAttribute()
  {
    return $this->gender->description;
  }
}
