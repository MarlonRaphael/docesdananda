<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(ProductsDataTable $dataTable)
  {
    return $dataTable->render('products.index');
  }

  public function create()
  {
    return view('products.create');
  }
}
