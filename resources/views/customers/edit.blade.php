@extends('layouts.app')

@section('title', 'Editar cliente')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- BEGIN Portlet -->
        <div class="portlet">
          <form action="{{ resource_url($customer, 'update') }}" method="post">
            @csrf
            @method('put')
            <div class="portlet-header portlet-header-bordered">
              <h3 class="portlet-title">Novo cliente</h3>
            </div>
            <div class="portlet-body">
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputName">Nome <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="inputName"
                           class="form-control @error('name') is-invalid @enderror" minlength="3" maxlength="150"
                           value="{{ old('name', $customer->name) }}" placeholder="Informe o nome" autofocus required>
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputNickname">Apelido</label>
                    <input type="text" name="nickname" id="inputNickname"
                           class="form-control @error('nickname') is-invalid @enderror" maxlength="150"
                           value="{{ old('nickname', $customer->nickname) }}" placeholder="Informe o apelido">
                    @error('nickname')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-envelope"></i>
                        </div>
                      </div>
                      <input type="email" name="email" id="inputEmail"
                             class="form-control emailmask @error('email') is-invalid @enderror"
                             value="{{ old('email', $customer->email) }}" placeholder="Informe o e-mail">
                      @error('email')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="selectGender">Gênero <span class="text-danger">*</span></label>
                    <select name="gender" id="selectGender"
                            class="custom-select @error('gender') is-invalid @enderror">
                      <option disabled>Selecione...</option>
                      <option value="0" {{ old('gender', $customer->gender) === 0 ? 'selected' : '' }}>
                        Masculino
                      </option>
                      <option value="1" {{ old('gender', $customer->gender) === 1 ? 'selected' : '' }}>
                        Feminino
                      </option>
                      <option value="2" {{ old('gender', $customer->gender) === 2 ? 'selected' : '' }}>
                        Outros
                      </option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputPhone">Telefone</label>
                    <input type="tel" name="phone" id="inputPhone"
                           class="form-control phone @error('phone') is-invalid @enderror"
                           value="{{ old('phone', $customer->phone ?? '') }}"
                           placeholder="Informe um número de telefone">
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
                           value="{{ old('cell_phone', $customer->cell_phone ?? '') }}"
                           placeholder="Informe um número de celular">
                    @error('cell_phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputBirthday">Data de nascimento</label>
                    <div class="input-group">
                      <input type="text" name="birthday" id="inputBirthday"
                             class="form-control date @error('birthday') is-invalid @enderror"
                             value="{{ old('birthday', formatDate($customer->birthday) ?? '') }}"
                             placeholder="00/00/0000">
                      <div class="input-group-append">
													<span class="input-group-text">
														<i class="fa fa-calendar-alt"></i>
													</span>
                      </div>
                      @error('birthday')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="inputSince">Cliente desde</label>
                    <div class="input-group">
                      <input type="text" name="customer_since" id="inputSince"
                             class="form-control date @error('customer_since') is-invalid @enderror"
                             value="{{ old('customer_since', formatDate($customer->customer_since)) }}"
                             placeholder="00/00/0000">
                      <div class="input-group-append">
													<span class="input-group-text">
														<i class="fa fa-calendar-alt"></i>
													</span>
                      </div>
                      @error('customer_since')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputNotes">Notas adicionais</label>
                    <textarea name="notes" id="inputNotes" class="form-control" cols="30" rows="10"
                              placeholder="Notas adicionais...">{{ old('notes', $customer->notes) }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-footer portlet-footer-bordered text-right">
              <button type="submit" class="btn btn-primary">Atualizar</button>
              <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">Cancelar</a>
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

          $.fn.datepicker.defaults.format = "dd/mm/yyyy";

          $("#inputBirthday").datepicker({
              orientation: "bottom",
              format: 'dd/mm/yyyy',
              autoclose: true
          });

          $("#inputSince").datepicker({
              orientation: "bottom",
              format: 'dd/mm/yyyy',
              autoclose: true
          });

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

      });
  </script>
@endpush