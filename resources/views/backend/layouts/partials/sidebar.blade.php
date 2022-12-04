<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="sidebar-body">

        {{-- @if(auth()->user()->type == 'admin' || Auth::user()->type == 'crm')

            @include('backend.layouts.partials.adminSidebar')

        @elseif(auth()->user()->type == 'teacher')

            @include('backend.layouts.partials.teacherSidebar')

        @elseif(auth()->user()->type == 'superAdmin')

            @include('backend.layouts.partials.superAdminSidebar')

        @endif --}}

        <ul class="nav">
            <li class="nav-item @yield('dashboard','')">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @yield('crm','')">
                <a href="{{route('admin.crm.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">CRM</span>
                </a>
            </li>
            <li class="nav-item @yield('role','')">
                <a href="{{route('admin.role.index')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Role</span>
                </a>
            </li>
            <li class="nav-item  @yield('test','') ">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button"
                    aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  @yield('test','') " id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link @yield('test','')">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item  @yield('test','') ">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails1" role="button"
                    aria-expanded="false" aria-controls="emails1">
                    <i class="link-icon" data-feather="plus"></i>
                    <span class="link-title">Featre 0</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  @yield('test','') " id="emails1">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link @yield('test','')">all</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">add</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">other</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item  @yield('test','') ">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails2" role="button"
                    aria-expanded="false" aria-controls="emails2">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Featre 1</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  @yield('test','') " id="emails2">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link @yield('test','')">all</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">add</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">other</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item  @yield('test','') ">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails3" role="button"
                    aria-expanded="false" aria-controls="emails3">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Featre 2</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  @yield('test','') " id="emails3">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link @yield('test','')">all</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">add</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">other</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item  @yield('test','') ">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails4" role="button"
                    aria-expanded="false" aria-controls="emails4">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Featre 3</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  @yield('test','') " id="emails4">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link @yield('test','')">all</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">add</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">other</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>

    </div>
</nav>


<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                    value="sidebar-light" checked="">
                <label class="form-check-label" for="sidebarLight">
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                    value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item active" href="../demo1/dashboard.html">
                <img src="../assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item" href="../demo2/dashboard.html">
                <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
