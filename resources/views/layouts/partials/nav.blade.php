<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('interests*') ? 'active' : '' }}"
                href="{{ route('interests.index') }}">
                <i class="fas fa-heart nav-icon"></i>
                <p>Interests</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('specialties*') ? 'active' : '' }}"
                href="{{ route('specialties.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>Specialties</p>
            </a>
        </li>
        <li
            class="nav-item  {{ Request::routeIs('therapists*') || Request::routeIs('feedbacks*') ? 'menu-open' : '' }}">
            <a class="nav-link collapsed {{ Request::routeIs('therapists*') || Request::routeIs('feedbacks*') ? 'active' : '' }}"
                href="{{ route('therapists.index') }}">
                <i class="fas fa-user nav-icon"></i>
                <p>Therapists <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('therapists.index') }}"
                        class="nav-link {{ Request::routeIs('therapists*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Therapists</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('feedbacks*') ? 'active' : '' }}"
                        href="{{ route('feedbacks.index') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Feedback</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('feedbacks*') ? 'active' : '' }}"
                href="{{ route('feedbacks.index') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Feedback</p>
            </a>
        </li>

    </ul>
</nav>
