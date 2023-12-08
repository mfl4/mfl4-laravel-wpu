<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-primary p-2">
    <div class="position-sticky">
        <div class="sidebar-heading">
            <h1 class="text-light">MFL4 BLOG</h1>
        </div>
        <hr class="text-light my-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-light {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="bi bi-house-door"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light {{ request()->is('dashboard/posts') ? 'active' : '' }}"
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
    </div>
</nav>
