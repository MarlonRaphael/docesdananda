@extends('layouts.guest')

@section('title', 'Entrar')

@push('styles')
  <style>
      body {
        background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%) !important;
      }
  </style>
@endpush

@section('content')
  <div class="container-fluid">
    <div class="row no-gutters align-items-center justify-content-center h-100">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <!-- BEGIN Portlet -->
        <div class="portlet shadow-lg">
          <div class="portlet-body">
            <div class="text-center mb-4">
              <!-- BEGIN Avatar -->

              <div class="avatar avatar-label-primary avatar-circle widget12">
                <div class="avatar-display">
                  <i class="fa fa-user-alt"></i>
                </div>
              </div>
              <!-- END Avatar -->
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <!-- BEGIN Form -->
            <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
            <!-- BEGIN Form Group -->
              <div class="form-group">
                <div class="float-label float-label-lg">
                  <input type="email" id="email" name="email"
                         class="form-control form-control-lg @error('email') is-invalid @enderror"
                         placeholder="Por favor insira seu e-mail" value="{{ old('email', '') }}" required autofocus>
                  <label for="email">{{ __('Email Address') }}</label>
                </div>
              </div>
              <!-- END Form Group -->
              <!-- BEGIN Form Group -->
              <div class="form-group">
                <div class="float-label float-label-lg">
                  <input type="password" id="password" name="password"
                         class="form-control form-control-lg @error('password') is-invalid @enderror"
                         placeholder="Por favor, forneça sua senha"
                         required autocomplete="current-password">
                  <label for="password">{{ __('Password') }}</label>
                </div>
              </div>
              <!-- END Form Group -->
              <div class="d-flex align-items-center justify-content-between mb-3">
                <!-- BEGIN Form Group -->
                <div class="form-group mb-0">
                  <div class="custom-control custom-control-lg custom-switch">
                    <input type="checkbox" class="custom-control-input @error('remember') is-invalid @enderror"
                           id="remember_me" name="remember" {{ old('remember') !== 'on' ?: 'checked' }}>
                    <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                    @error('remember')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <!-- END Form Group -->
              </div>
              <div class="d-flex align-items-center justify-content-end">
                @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                  </a>
                @endif
                <button type="submit" class="btn btn-label-primary btn-lg btn-widest">{{ __('Login') }}</button>
              </div>
            </form>
            <!-- END Form -->
          </div>
        </div>
        <!-- END Portlet -->
      </div>
    </div>
  </div>
@endsection