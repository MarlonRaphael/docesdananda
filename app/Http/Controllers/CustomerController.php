<?php

namespace App\Http\Controllers;

use App\DataTables\CustomersDataTable;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(CustomersDataTable $dataTable)
  {
    return $dataTable->render('customers.index');
  }

  public function create()
  {
    return view('customers.create');
  }

  public function store(CreateCustomerRequest $request)
  {
    $validated = $request->validated();

    if ($validated) {

      if ($customer = Customer::create($validated)) {

        return redirect()->route('customers.index')->with('status', 'Cliente cadastrado com sucesso!');

      }

    }

    return back()->with('status', 'Erro ao tentar cadastrar o cliente');
  }

  public function show(Customer $customer)
  {
    return view('customers.show', ['customer' => $customer]);
  }

  public function edit(Customer $customer)
  {
    return view('customers.edit', ['customer' => $customer]);
  }

  public function update(UpdateCustomerRequest $request, Customer $customer)
  {
    $validated = $request->validated();

    if ($validated) {

      if ($customer->update($validated)) {

        return redirect()->route('customers.index')->with('status', 'Cliente atualizado com sucesso!');

      }

    }

    return back()->with('status', 'Erro ao tentar atualizar o cliente');
  }
}
