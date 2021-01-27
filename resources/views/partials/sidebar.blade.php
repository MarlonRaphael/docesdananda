<!-- BEGIN Aside -->
<div class="aside">
  <div class="aside-header">
    <h3 class="aside-title">
      {{ config('app.name', 'Laravel') }}
    </h3>
    <div class="aside-addon">
      <button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside">
        <i class="fa fa-times aside-icon-minimize"></i>
        <i class="fa fa-thumbtack aside-icon-maximize"></i>
      </button>
    </div>
  </div>
  <div class="aside-body" data-simplebar>
    <!-- BEGIN Menu -->
    <div class="menu">
      <div class="menu-section">
        <div class="menu-section-icon">
          <i class="fa fa-ellipsis-h"></i>
        </div>
        <h2 class="menu-section-text">Menu principal</h2>
      </div>
      <div class="menu-item">
        <a href="{{ route('dashboard') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fa fa-desktop"></i>
          </div>
          <span class="menu-item-text">{{ __('Dashboard') }}</span>
        </a>
      </div>
      <div class="menu-section">
        <div class="menu-section-icon">
          <i class="fa fa-ellipsis-h"></i>
        </div>
        <h2 class="menu-section-text">Gerenciar</h2>
      </div>
      <div class="menu-item">
        <a href="{{ route('customers.index') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fas fa-users"></i>
          </div>
          <span class="menu-item-text">Clientes</span>
        </a>
      </div>
      <div class="menu-item">
        <a href="{{ route('suppliers.index') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fas fa-user-friends"></i>
          </div>
          <span class="menu-item-text">Fornecedores</span>
        </a>
      </div>
      <div class="menu-item">
        <a href="{{ route('categories.index') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fas fa-th-list"></i>
          </div>
          <span class="menu-item-text">Categorias</span>
        </a>
      </div>
      <div class="menu-item">
        <a href="{{ route('brands.index') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fas fa-tags"></i>
          </div>
          <span class="menu-item-text">Marcas</span>
        </a>
      </div>
      <div class="menu-item">
        <a href="{{ route('products.index') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fas fa-box-open"></i>
          </div>
          <span class="menu-item-text">Produtos</span>
        </a>
      </div>
    </div>
    <!-- END Menu -->
  </div>
</div>
<!-- END Aside -->