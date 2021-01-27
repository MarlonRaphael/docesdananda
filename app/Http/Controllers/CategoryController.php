<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriesDataTable;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(CategoriesDataTable $dataTable)
  {
    return $dataTable->render('categories.index');
  }

  public function create()
  {
    return view('categories.create');
  }

  public function store(CreateCategoryRequest $request)
  {
    $validated = $request->validated();

    if ($validated) {

      if ($category = Category::create($validated)) {

        return redirect()
            ->route('categories.index')
            ->with('status', 'Categoria cadastrada com sucesso!');

      }

    }

    return back()->with('status', 'Erro ao tentar adicionar categoria');
  }

  public function show(Category $category)
  {
    return view('categories.show', ['category' => $category]);
  }

  public function edit(Category $category)
  {
    return view('categories.edit', ['category' => $category]);
  }

  public function update(UpdateCategoryRequest $request, Category $category)
  {
    $validated = $request->validated();

    if ($validated) {

      if ($category->update($validated)) {

        return redirect()
            ->route('categories.index')
            ->with('status', 'Categoria atualizada com sucesso!');

      }

    }

    return back()->with('status', 'Erro ao tentar atualizar categoria');
  }

}
