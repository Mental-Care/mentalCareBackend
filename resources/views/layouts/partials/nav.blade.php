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
            class="nav-item  {{ Request::routeIs('therapists*') || Request::routeIs('feedbacks*') || Request::routeIs('experiences*') || Request::routeIs('educations*') || Request::routeIs('schedules*') ? 'menu-open' : '' }}">
            <a class="nav-link collapsed {{ Request::routeIs('therapists*') || Request::routeIs('feedbacks*') || Request::routeIs('experiences*') || Request::routeIs('educations*') || Request::routeIs('schedules*') ? 'active' : '' }}"
                href="{{ route('therapists.index') }}">
                <i class="fas fa-user nav-icon"></i>
                <p>Therapists <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('therapists.index') }}"
                        class="nav-link {{ Request::routeIs('therapists*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>All Therapists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('feedbacks*') ? 'active' : '' }}"
                        href="{{ route('feedbacks.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Feedbacks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('experiences*') ? 'active' : '' }}"
                        href="{{ route('experiences.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Experiences</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('educations*') ? 'active' : '' }}"
                        href="{{ route('educations.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Educations</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('schedules*') ? 'active' : '' }}"
                        href="{{ route('schedules.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Schedules</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                <i class="fas fa-user nav-icon"></i>
                <p>Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('res*') && !Request::routeIs('res_*') ? 'active' : '' }}"
                href="{{ route('res.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>RES</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('res_questions*') ? 'active' : '' }}"
                href="{{ route('res_questions.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>Res_Questions</p>
            </a>
        </li>

        <li class="nav-item  {{ Request::routeIs('quizzes*') ? 'menu-open' : '' }}">
            <a class="nav-link collapsed {{ Request::routeIs('quizzes*') ? 'active' : '' }}"
                href="{{ route('quizzes.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>Quizzes <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('quizzes*') && !Request::routeIs('quizzes_*') ? 'active' : '' }}"
                        href="{{ route('quizzes.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Quizzes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('quizzes_questions*') ? 'active' : '' }}"
                        href="{{ route('quizzes_questions.index') }}">
                        <i class="far fa-circle nav-icon" style="margin-left: 15px;"></i>
                        <p>Quizzes_Quistions</p>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="nav-item
                                    {{ Request::routeIs('category_blogs*') || Request::routeIs('blogs*') ? 'menu-open' : '' }}">
            <a class="nav-link collapsed {{ Request::routeIs('category_blogs*') || Request::routeIs('blogs*') ? 'active' : '' }}"
                href="{{ route('category_blogs.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>Category Blogs <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('category_blogs*') ? 'active' : '' }}"
                        href="{{ route('category_blogs.index') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('blogs*') ? 'active' : '' }}"
                        href="{{ route('blogs.index') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blogs</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('faqs*') ? 'active' : '' }}" href="{{ route('faqs.index') }}">
                <i class="fas fa-star nav-icon"></i>
                <p>FAQs</p>
            </a>
        </li>

    </ul>
</nav>
