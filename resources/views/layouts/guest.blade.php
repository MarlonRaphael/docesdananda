<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap" rel="stylesheet">

  <link href="{{ asset('assets/build/styles/ltr-core.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/build/styles/ltr-vendor.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/build/styles/ltr-dashboard1.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

  <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Auth')</title>

  @stack('styles')

</head>

<body class="theme-light preload-active" id="fullscreen">

<!-- BEGIN Preload -->
<div class="preload">
  <div class="preload-dialog">
    <!-- BEGIN Spinner -->
    <div class="spinner-border text-primary preload-spinner"></div>
    <!-- END Spinner -->
  </div>
</div>
<!-- END Preload -->

<!-- BEGIN Page Holder -->
<div class="holder">
  <!-- BEGIN Page Wrapper -->
  <div class="wrapper">
    <!-- BEGIN Page Content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- END Page Content -->
  </div>
  <!-- END Page Wrapper -->
</div>
<!-- END Page Holder -->

<script type="text/javascript" src="{{ asset('assets/build/scripts/mandatory.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/core.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/dashboard1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/app/dashboard1/pages/login.js') }}"></script>

</body>
</html>