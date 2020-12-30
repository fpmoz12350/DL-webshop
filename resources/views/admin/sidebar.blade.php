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
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item d-inline-flex {{ Str::startsWith(Route::currentRouteName(), 'user') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users-index') }}">
            <i class="fas fa-user-friends"></i>
            <span>Korisnici</span>
        </a>
        {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div> --}}
    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'roles') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles-index') }}">
            <i class="fas fa-user-tag"></i>
            <span>Role</span>
        </a>

    </li>

    <li class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'permissions') ? 'active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-lock"></i>
            <span>Dopuštenja</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-cubes"></i>
            <span>Proizvodi</span>
        </a>

    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> 

</ul>