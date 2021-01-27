@extends('layouts.app')

@section('title', 'Vendo cliente')

@section('content')
  <div class="container-fluid">
    <!-- BEGIN Portlet -->
    <div class="portlet">
      <form>
        <div class="portlet-header portlet-header-bordered">
          <h3 class="portlet-title">Visualizando cliente</h3>
        </div>
        <div class="portlet-body">
          <div class="form-row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="inputName">Nome</label>
                <input type="text" id="inputName" class="form-control" value="{{ $customer->name }}" readonly>
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
                  <input type="email" id="inputEmail" class="form-control emailmask"
                         value="{{ $customer->email }}" readonly>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="selectGender">Gênero</label>
                <select name="gender" id="selectGender" class="custom-select" readonly="" disabled>
                  <option value="0" {{ old('gender', $customer->gender) === '0' ? 'selected' : '' }}>
                    Masculino
                  </option>
                  <option value="1" {{ old('gender', $customer->gender) === '1' ? 'selected' : '' }}>
                    Feminino
                  </option>
                  <option value="2" {{ old('gender', $customer->gender) === '2' ? 'selected' : '' }}>
                    Outros
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="inputPhone">Telefone</label>
                <input type="tel" id="inputPhone"
                       class="form-control phone" value="{{ $customer->phone ?? '' }}" readonly>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="inputCellphone">Celular</label>
                <input type="tel" id="inputCellphone" class="form-control cellphone"
                       value="{{ $customer->cell_phone ?? '' }}" readonly>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="inputBirthday">Data de nascimento</label>
                <div class="input-group">
                  <input type="text" id="inputBirthday" class="form-control date"
                         value="{{ formatDate($customer->birthday) }}" readonly>
                  <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-calendar-alt"></i>
                        </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet-footer portlet-footer-bordered text-right">
          <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">Voltar</a>
        </div>
        <!-- END Form -->
      </form>
      <!-- END Portlet -->
    </div>
    <!-- END Portlet -->
  </div>
@endsection