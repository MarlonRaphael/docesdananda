<?php

namespace App\Models;

use App\Enums\ProductType;
use App\Enums\ProductionType;
use App\Enums\ProductMensurement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

  protected $guarded = ['id'];

  protected $fillable = [
      'name',
      'description',
      'status',
      'sku',
      'code',
      'unit_measurement',
      'gross_weight',
      'net_weight',
      'quantity',
      'stock',
      'stock_min',
      'stock_max',
      'cost',
      'purchase_price',
      'price',
      'brand_id',
      'type',
      'production_type',
      'validity',
      'fabricated_in',
      'valid_until',
  ];

  protected $casts = [
      'status' => 'boolean',
      'unit_measurement' => ProductMensurement::class,
      'ype' => ProductType::class,
      'production_type' => ProductionType::class,
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

}
