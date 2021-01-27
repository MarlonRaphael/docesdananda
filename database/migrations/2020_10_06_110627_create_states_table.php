<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('states', function (Blueprint $table) {
      $table->id();
      $table->string('name', 75)->default(null);
      $table->char('uf', 2)->default(null);
      $table->integer('ibge')->default(null);
      $table->foreignId('country_id')->nullable()->constrained();
      $table->string('ddd', 50)->nullable()->default(null);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('states');
  }
}
