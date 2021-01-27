@extends('layouts.app')

@section('title', 'Editar fornecedor')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- BEGIN Portlet -->
        <div class="portlet">
          <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
            @csrf
            @method('put')
            <div class="portlet-header portlet-header-bordered">
              <h3 class="portlet-title">Editar fornecedor</h3>
            </div>
            <div class="portlet-body">
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputName">Nome <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="inputName"
                           class="form-control @error('name') is-invalid @enderror" maxlength="150"
                           value="{{ old('name', $supplier->name) }}"
                           placeholder="Informe o nome" autofocus required>
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputNickname">Nome fantasia</label>
                    <input type="text" name="nickname" id="inputNickname"
                           class="form-control @error('nickname') is-invalid @enderror" maxlength="150"
                           value="{{ old('nickname', $supplier->nickname) }}" placeholder="Informe o nome fantasia">
                    @error('nickname')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputDescription">Descrição</label>
                    <input type="text" name="description" id="inputDescription"
                           class="form-control @error('description') is-invalid @enderror" maxlength="150"
                           value="{{ old('description', $supplier->description) }}" placeholder="Informe uma descrição">
                    @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputEmail">E-mail <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-envelope"></i>
                        </div>
                      </div>
                      <input type="email" name="email" id="inputEmail"
                             class="form-control emailmask @error('email') is-invalid @enderror"
                             value="{{ old('email', $supplier->email) }}" placeholder="Informe o e-mail">
                      @error('email')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputPhone">Telefone</label>
                    <input type="tel" name="phone" id="inputPhone"
                           class="form-control phone @error('phone') is-invalid @enderror"
                           value="{{ old('phone', '') }}" placeholder="Informe um número de telefone">
                    @error('phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputCellphone">Celular</label>
                    <input type="tel" name="cell_phone" id="inputCellphone"
                           class="form-control cellphone @error('cell_phone') is-invalid @enderror"
                           value="{{ old('cell_phone', '') }}" placeholder="Informe um número de celular">
                    @error('cell_phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputCode">Código</label>
                    <input type="tel" name="code" id="inputCode"
                           class="form-control @error('code') is-invalid @enderror"
                           value="{{ old('code', $supplier->code) }}" placeholder="Informe um código" maxlength="8">
                    @error('code')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputCnpj">CNPJ</label>
                    <input type="text" name="cnpj" id="inputCnpj"
                           class="form-control cnpj @error('cnpj') is-invalid @enderror"
                           value="{{ old('cnpj', $supplier->cnpj) }}">
                    @error('cnpj')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputNotes">Notas adicionais</label>
                    <textarea name="notes" id="inputNotes" class="form-control" cols="30" rows="10"
                              placeholder="Notas adicionais...">{{ old('notes', $supplier->notes) }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-footer portlet-footer-bordered text-right">
              <button type="submit" class="btn btn-primary">Atualizar</button>
              <a href="{{ route('suppliers.index') }}" class="btn btn-outline-secondary">Cancelar</a>
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

          var isRtl = $("html").attr("dir") === "rtl";

          var direction = isRtl ? "right" : "left";

          $("#inputName").maxlength({
              threshold: 150,
              alwaysShow: true,
              validate: true,
          });

          $("#inputNickname").maxlength({
              threshold: 150,
              alwaysShow: true,
              validate: true,
          });

          $("#inputDescription").maxlength({
              threshold: 150,
              alwaysShow: true,
              validate: true,
          });

          $("#inputCode").maxlength({
              threshold: 150,
              alwaysShow: true,
              validate: true,
          });
      });
  </script>
@endpush