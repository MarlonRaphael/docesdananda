<?php

namespace App\Http\Controllers;

use App\DataTables\BrandsDataTable;
use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

class BrandController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(BrandsDataTable $dataTable)
  {
    return $dataTable->render('brands.index');
  }

  public function create()
  {
    return view('brands.create');
  }

  public function store(CreateBrandRequest $request)
  {
    $validated = $request->validated();

    if ($validated) {
      if ($brand = Brand::create($validated)) {
        return redirect()
            ->route('brands.index')
            ->with('status', 'Marca cadastrada com sucesso');
      }
    }

    return back()->with('status', 'Erro ao tentar cadastrar marca');
  }

  public function show(Brand $brand)
  {
    return view('brands.show', ['brand' => $brand]);
  }

  public function edit(Brand $brand)
  {
    return view('brands.edit', ['brand' => $brand]);
  }

  public function update(UpdateBrandRequest $request, Brand $brand)
  {
    $validated = $request->validated();

    if ($validated) {
      if ($brand->update($validated)) {
        return redirect()
            ->route('brands.index')
            ->with('status', 'Marca atualizada com sucesso');
      }
    }

    return back()->with('status', 'Erro ao tentar atualizar marca');
  }

  public function destroy(Brand $brand)
  {
    if ($brand->delete()) {
      return redirect()
          ->route('brands.index')
          ->with('status', 'Marca removida com sucesso');
    }

    return back()->with('status', 'Erro ao tentar remover marca');
  }

}
