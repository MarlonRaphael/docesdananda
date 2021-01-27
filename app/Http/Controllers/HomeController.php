<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('dashboard', [
        'customers_count' => Customer::count()
    ]);
  }
}
