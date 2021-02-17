<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3 sm-1">"D&L" webshop</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Nadzorna ploča</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (Auth::user()->hasRole(['administrator', 'moderator']))

    <li class="nav-item d-inline-flex {{ Str::startsWith(Route::currentRouteName(), 'user') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users-index') }}">
            <i class="fas fa-user-friends"></i>
            <span>Korisnici</span>
        </a>
    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'roles') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles-index') }}">
            <i class="fas fa-user-tag"></i>
            <span>Role</span>
        </a>
    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'permissions') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('permissions-index') }}">
            <i class="fas fa-lock"></i>
            <span>Dopuštenja</span>
        </a>
    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'products') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('products-index') }}">
            <i class="fas fa-cubes"></i>
            <span>Proizvodi</span>
        </a>
    </li>
    
    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'categories') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories-index') }}">
            <i class="fas fa-layer-group"></i>
            <span>Kategorije</span>
        </a>
    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'comments') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('comments-index') }}">
            <i class="fas fa-comments"></i>
            <span>Komentari</span>
        </a>
    </li>
    @endif
    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'orders') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('orders-index') }}">
            <i class="fas fa-file-invoice"></i>
            <span>Narudžbe</span>
        </a>
    </li>
    
    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> 

</ul>