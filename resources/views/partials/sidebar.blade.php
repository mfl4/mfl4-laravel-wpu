<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-primary p-2">
    <div class="position-sticky">
        <div class="sidebar-heading">
            <h1 class="text-light">MFL4 BLOG</h1>
        </div>
        <hr class="text-light my-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-light {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="bi bi-house-door"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                    href="/dashboard/posts">
                    <i class="bi bi-file-earmark-text"></i> Post Management
                </a>
            </li>
            <hr class="text-light my-3">
            <li class="nav-item">
                <a class="nav-link text-light" href="/posts">
                    <i class="bi bi-file-earmark"></i> Back to All Posts
                </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link text-light fw-semibold"><i class="bi bi-box-arrow-left"></i>
                        Logout</button>
                </form>
            </li>
        </ul>

        @can('admin')
            <hr class="text-light my-3">
            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-light text-uppercase">
                <span>Admnistration</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                        href="/dashboard/categories">
                        <i class="bi bi-tag"></i> Category Management
                    </a>
                </li>
            </ul>
        @endcan

    </div>
</nav>
