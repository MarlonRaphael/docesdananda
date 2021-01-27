@if (Route::has(resource_route($model, 'edit')))
  <a href="{{ resource_url($model, 'edit') }}" class="btn btn-label-primary btn-icon mr-1">
    <i class="fa fa-edit"></i>
  </a>
@endif
<div class="dropdown d-inline">
  <button class="btn btn-label-primary btn-icon" data-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-ellipsis-v"></i>
  </button>
  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
       style="position: absolute; will-change: transform; top: 0; left: 0; transform: translate3d(28px, 23px, 0px);">
    @if (Route::has(resource_route($model, 'destroy')))
      <a class="dropdown-item"
         onclick="event.preventDefault(); document.getElementById('delete-{{ $model->id }}').submit();"
         href="{{ resource_url($model, 'destroy') }}">
        <div class="dropdown-icon">
          <i class="fa fa-trash"></i>
        </div>
        <span class="dropdown-content">{{ __('Delete') }}</span>
        <form action="{{ resource_url($model, 'destroy') }}" class="d-none"
              method="post" id="delete-{{ $model->id }}">
          @csrf
          @method('delete')
        </form>
      </a>
    @endif
    @if (Route::has(resource_route($model, 'show')))
      <a href="{{ resource_url($model, 'show') }}" class="dropdown-item">
        <div class="dropdown-icon">
          <i class="fa fa-eye"></i>
        </div>
        <span class="dropdown-content">{{ __('View') }}</span>
      </a>
    @endif
{{--    <button class="dropdown-item">--}}
{{--      <div class="dropdown-icon">--}}
{{--        <i class="fa fa-pen"></i>--}}
{{--      </div>--}}
{{--      <span class="dropdown-content">Update status</span>--}}
{{--    </button>--}}
{{--    <button class="dropdown-item">--}}
{{--      <div class="dropdown-icon">--}}
{{--        <i class="fa fa-print"></i>--}}
{{--      </div>--}}
{{--      <span class="dropdown-content">Generate report</span>--}}
{{--    </button>--}}
  </div>
</div>