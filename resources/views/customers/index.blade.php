@extends('layouts.app')

@section('title', 'Customers')

@section('content')
  <div class="container-fluid">
    <!-- BEGIN Portlet -->
    <div class="portlet">
      <div class="portlet-header portlet-header-bordered">
        <h3 class="portlet-title">Listagem de clientes</h3>
        <div class="portlet-addon">
          <a href="{{ route('customers.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i> Adicionar
          </a>
        </div>
      </div>
      <div class="portlet-body">
        <p><strong>Datatables</strong> has most features enabled by default, so all you need to do to use it with
          your own tables is to call the construction function: <code>$().DataTable()</code>. Searching, ordering
          and paging goodness will be immediately added to the table, as shown in this example.</p>
        <hr>
        <div class="table-responsive">
          <!-- BEGIN Datatable -->
        {!! $dataTable->table(['class' => 'table table-bordered table-striped table-hover'], true) !!}
        <!-- END Datatable -->
        </div>
      </div>
    </div>
    <!-- END Portlet -->
  </div>
@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/app/dashboard1/datatable/basic/base.js') }}"></script>
  {!! $dataTable->scripts() !!}
@endpush