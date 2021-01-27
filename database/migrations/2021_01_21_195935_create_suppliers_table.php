<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('suppliers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('nickname')->nullable();
      $table->string('description')->nullable();
      $table->string('email');
      $table->string('code')->nullable();
      $table->string('cnpj', 18)->nullable();
      $table->text('notes')->nullable();
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
    Schema::dropIfExists('suppliers');
  }
}
