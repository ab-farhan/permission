<ul class="nav">
    <li class="nav-item @yield('dashboard','')">
        <a href="dashboard.html" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
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


</ul>
