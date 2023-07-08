<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" aria-expanded="true">
                <i class="fas fa-shopping-bag"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::routeIs('interests.index') ? 'active' : '' }}"
                href="{{ route('interests.index') }}" aria-expanded="true">
                <i class="fas fa-shopping-bag"></i>
                <span>Interests</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::routeIs('users.index') ? 'active' : '' }}"
                href="{{ route('interests.index') }}" aria-expanded="true">
                <i class="fas fa-shopping-bag"></i>
                <span>Users</span>
            </a>
        </li>

        {{-- <li class="nav-item menu-open">
            <a href="{{ route('interests.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Interests
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('interests.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('interests.index') }}" data-toggle="collapse"
                data-target="#collapseJobs" aria-expanded="true" aria-controls="collapseJobs">
                <i class="fas fa-shopping-bag"></i>
                <span>Users</span>
            </a>
        </li> --}}
        {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Starter Pages
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Simple Link
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li> --}}
    </ul>
</nav>
<!-- /.sidebar-menu -->
