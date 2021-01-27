<?php

namespace App\Http\Controllers;

use App\DataTables\SuppliersDataTable;
use App\Http\Requests\CreateSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(SuppliersDataTable $dataTable)
  {
    return $dataTable->render('suppliers.index');
  }

  public function create()
  {
    return view('suppliers.create');
  }

  public function store(CreateSupplierRequest $request)
  {
    $validated = $request->validated();

    if ($validated) {

      if ($supplier = Supplier::create($validated)) {

        return redirect()
            ->route('suppliers.index')
            ->with('status', 'Fornecedor cadastrado com sucesso!');
      }

    }

    return back()
        ->with('status', 'Erro ao tentar cadastrar fornecedor!');
  }

  public function show(Supplier $supplier)
  {
    return view('suppliers.show', ['supplier' => $supplier]);
  }

  public function edit(Supplier $supplier)
  {
    return view('suppliers.edit', ['supplier' => $supplier]);
  }

  public function update(UpdateSupplierRequest $request, Supplier $supplier)
  {
    $validated = $request->validated();

//    dd($validated);

    if ($validated) {

      if ($supplier->update($validated)) {

        return redirect()
            ->route('suppliers.index')
            ->with('status', 'Fornecedor atualizado com sucesso!');
      }

    }

    return back()
        ->with('status', 'Erro ao tentar atualizar fornecedor!');
  }
}
