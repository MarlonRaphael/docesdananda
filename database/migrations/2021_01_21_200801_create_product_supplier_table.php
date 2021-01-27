<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSupplierTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('product_supplier', function (Blueprint $table) {
      $table->foreignId('supplier_id')->constrained();
      $table->foreignId('product_id')->constrained();
      $table->index(['supplier_id', 'product_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('product_supplier');
  }
}
