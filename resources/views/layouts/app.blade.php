<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap"
      rel="stylesheet">
  <link href="{{ asset('assets/build/styles/ltr-core.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/build/styles/ltr-vendor.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/build/styles/ltr-dashboard1.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

  <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Dashboard')</title>

  @stack('styles')

</head>
<body class="theme-light preload-active aside-active aside-mobile-minimized aside-desktop-maximized" id="fullscreen">

@include('partials.preload')

<!-- BEGIN Page Holder -->
<div class="holder">

@include('partials.sidebar')

<!-- BEGIN Page Wrapper -->
  <div class="wrapper">

  @include('partials.header')

  <!-- BEGIN Page Content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- END Page Content -->

    @include('partials.footer')

  </div>
  <!-- END Page Wrapper -->
</div>
<!-- END Page Holder -->

<!-- BEGIN Scroll To Top -->
<div class="scrolltop">
  <button class="btn btn-info btn-icon btn-lg">
    <i class="fa fa-angle-up"></i>
  </button>
</div>
<!-- END Scroll To Top -->

<script type="text/javascript" src="{{ asset('assets/build/scripts/mandatory.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/core.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/build/scripts/dashboard1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/app/dashboard1/form/bs-maxlength.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('assets/app/dashboard1/home.js') }}"></script>--}}

<script type="text/javascript">
  "use strict";

  $(function () {

    $(".date").inputmask({mask: "99/99/9999", placeholder: "dd/mm/yyyy"});

    $(".phone").inputmask({mask: "(99) 9999-9999"});

    $(".cellphone").inputmask({mask: "(99) 99999-9999"});

    $(".cpf").inputmask({mask: "999.999.999-99"});

    $(".cnpj").inputmask({mask: "99.999.999/9999-99", placeholder: "00.000.000/0000-00"});

    $(".currency").inputmask({mask: "$ 999.999.999,99", numericInput: true});

    $(".emailmask").inputmask({
      mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
      greedy: false,
      onBeforePaste: function onBeforePaste(val) {
        return val.toLowerCase().replace("mailto:", "")
      },
      definitions: {"*": {validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]", cardinality: 1, casing: "lower"}}
    })
  });

</script>

@stack('scripts')

</body>
</html>
