<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
        'name' => 'Marlon Raphael',
        'email' => 'marlon.raphaael@hotmail.com',
        'password' => '123321123' //$2y$10$gmxHuzHhUwfEn/aFd89bCeMa1WFJi3t/k5e26OICJOn6L8X2dRiqS
    ]);
  }
}
