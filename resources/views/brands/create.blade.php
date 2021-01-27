@extends('layouts.app')

@section('title', 'Nova marca')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- BEGIN Portlet -->
        <div class="portlet">
          <form action="{{ route('brands.store') }}" method="post">
            @csrf
            <div class="portlet-header portlet-header-bordered">
              <h3 class="portlet-title">Cadastro de marca</h3>
            </div>
            <div class="portlet-body">
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputName">Nome <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="inputName"
                           class="form-control @error('name') is-invalid @enderror" maxlength="150"
                           value="{{ old('name', '') }}" placeholder="Informe o nome" autofocus required>
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputDescription">Descrição <span class="text-danger">*</span></label>
                    <input type="text" name="description" id="inputDescription"
                           class="form-control @error('description') is-invalid @enderror"
                           value="{{ old('description', '') }}" placeholder="Informe uma descrição" required>
                    @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-footer portlet-footer-bordered text-right">
              <button type="submit" class="btn btn-primary">Adicionar</button>
              <a href="{{ route('brands.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            </div>
            <!-- END Form -->
          </form>
          <!-- END Portlet -->
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script type="text/javascript">
    "use strict";

    $(function () {

      $("#inputName").maxlength({
        threshold: 150,
        alwaysShow: true,
        validate: true,
      });

      $("#inputDescription").maxlength({
        threshold: 150,
        alwaysShow: true,
        validate: true,
      });

    });
  </script>
@endpush