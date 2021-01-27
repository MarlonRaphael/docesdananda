@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- BEGIN Portlet -->
        <div class="portlet">
          <!-- BEGIN Widget -->
          <div class="widget10 widget10-vertical-md">
            <div class="widget10-item">
              <div class="widget10-content">
                <h2 class="widget10-title">$27,639</h2>
                <h2 class="widget10-subtitle">Total revenue</h2>
              </div>
              <div class="widget10-addon">
                <!-- BEGIN Avatar -->
                <div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
                  <div class="avatar-display">
                    <i class="fa fa-dollar-sign"></i>
                  </div>
                </div>
                <!-- END Avatar -->
              </div>
            </div>
            <div class="widget10-item">
              <div class="widget10-content">
                <h2 class="widget10-title">87,123</h2>
                <h2 class="widget10-subtitle">Order received</h2>
              </div>
              <div class="widget10-addon">
                <!-- BEGIN Avatar -->
                <div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
                  <div class="avatar-display">
                    <i class="fa fa-dolly-flatbed"></i>
                  </div>
                </div>
                <!-- END Avatar -->
              </div>
            </div>
            <div class="widget10-item">
              <div class="widget10-content">
                <h2 class="widget10-title">{{ $customers_count }}</h2>
                <h2 class="widget10-subtitle">Clientes</h2>
              </div>
              <div class="widget10-addon">
                <!-- BEGIN Avatar -->
                <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
                  <div class="avatar-display">
                    <i class="fa fa-users"></i>
                  </div>
                </div>
                <!-- END Avatar -->
              </div>
            </div>
            <div class="widget10-item">
              <div class="widget10-content">
                <h2 class="widget10-title">5,726</h2>
                <h2 class="widget10-subtitle">Unique visits</h2>
              </div>
              <div class="widget10-addon">
                <!-- BEGIN Avatar -->
                <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
                  <div class="avatar-display">
                    <i class="fa fa-link"></i>
                  </div>
                </div>
                <!-- END Avatar -->
              </div>
            </div>
          </div>
          <!-- END Widget -->
        </div>
        <!-- END Portlet -->
      </div>
    </div>
  </div>
@endsection

{{--<x-app-layout>--}}
{{--  <x-slot name="header">--}}
{{--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--      {{ __('Dashboard') }}--}}
{{--    </h2>--}}
{{--  </x-slot>--}}

{{--  <div class="py-12">--}}
{{--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--        <div class="p-6 bg-white border-b border-gray-200">--}}
{{--          You're logged in!--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</x-app-layout>--}}
