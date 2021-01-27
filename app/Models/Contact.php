<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  protected $fillable = [
      'value',
      'contactable_type',
      'contactable_id',
      'contact_type_id',
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

  public function type()
  {
    return $this->belongsTo(ContactType::class);
  }

  public function contactable()
  {
    return $this->morphTo();
  }

}
