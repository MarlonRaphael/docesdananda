<?php

use App\Enums\ProductionType;
use App\Enums\ProductMensurement;
use App\Enums\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('description')->nullable();
      $table->boolean('status')->default(false);
      $table->string('sku')->nullable();
      $table->string('code')->nullable();
      $table->enum('unit_measurement', ProductMensurement::getValues());
      $table->bigInteger('gross_weight');
      $table->bigInteger('net_weight');
      $table->bigInteger('quantity');
      $table->bigInteger('stock')->default(0);
      $table->bigInteger('stock_min')->default(0);
      $table->bigInteger('stock_max')->default(0);
      $table->bigInteger('cost')->nullable();
      $table->bigInteger('purchase_price')->default(0);
      $table->bigInteger('price')->default(0);
      $table->foreignId('brand_id')->nullable();
      $table->enum('type', ProductType::getValues());
      $table->enum('production_type', ProductionType::getValues());
      $table->integer('validity')->nullable();
      $table->timestamp('fabricated_in')->nullable();
      $table->timestamp('valid_until')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
