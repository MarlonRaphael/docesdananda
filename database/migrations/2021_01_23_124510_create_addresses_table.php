<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->id();
      $table->morphs('addressable');
      $table->foreignId('city_id')->constrained();
      $table->string('label')->nullable();
      $table->string('post_code', 20);
      $table->string('street', 60);
      $table->integer('number');
      $table->string('complement', 60)->nullable();
      $table->string('neighborhood', 60)->nullable();
      $table->string('note')->nullable();
      $table->decimal('lat', 10, 6)->nullable();
      $table->decimal('lng', 10, 6)->nullable();
      $table->boolean('is_public')->nullable();
      $table->boolean('is_primary')->nullable();
      $table->boolean('is_billing')->nullable();
      $table->boolean('is_shipping')->nullable();
      $table->index('label');
      $table->index('post_code');
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
    Schema::dropIfExists('addresses');
  }
}
