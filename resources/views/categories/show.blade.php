@extends('layouts.app')

@section('title', 'Detalhes da categoria')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- BEGIN Portlet -->
        <div class="portlet">
          <form>
            <div class="portlet-header portlet-header-bordered">
              <h3 class="portlet-title">Detalhes da categoria</h3>
            </div>
            <div class="portlet-body">
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputName">Nome</label>
                    <input type="text" id="inputName" class="form-control" value="{{ $category->name }}" readonly>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputDescription">Descrição <span class="text-danger">*</span></label>
                    <input type="text" id="inputDescription" class="form-control"
                           value="{{ $category->description }}" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-footer portlet-footer-bordered text-right">
              <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
              <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            </div>
            <!-- END Form -->
          </form>
          <!-- END Portlet -->
        </div>
      </div>
    </div>
  </div>
@endsection