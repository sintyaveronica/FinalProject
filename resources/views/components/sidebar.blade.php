<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
  
 
        <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>Category
                    <span class="badge badge-warning right">{{$CategoryCount}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.collection.index') }}" class="nav-link {{ Route::is('admin.collection.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>Product
                    <span class="badge badge-primary right">{{$CollectionCount}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>Pesanan
                    <span class="badge badge-warning right">{{$ProductCount}}</span>
                </p>
            </a>
        </li>
        </ul>
</nav>
