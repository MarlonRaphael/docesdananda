<?php

use App\Enums\UserGender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('customers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('nickname')->nullable();
      $table->string('email')->nullable();
      $table->string('code')->nullable();
      $table->date('birthday')->nullable();
      $table->enum('gender', UserGender::getValues());
      $table->date('customer_since')->useCurrent();
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
    Schema::dropIfExists('customers');
  }
}
