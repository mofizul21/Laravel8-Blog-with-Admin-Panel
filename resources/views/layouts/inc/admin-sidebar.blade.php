<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    {{-- Category --}}
    <li class="nav-item {{ Request::is('admin/add-category') || Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'active' : '' }}">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#category" aria-expanded="true"
            aria-controls="category">
            <i class="fas fa-fw fa-cog"></i>
            <span>Categories</span>
        </a>
        <div id="category" class="collapse {{ Request::is('admin/add-category') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/add-category') ? 'active' : '' }}" href="{{ url('admin/add-category') }}">Add Category</a>
                <a class="collapse-item {{ Request::is('admin/category') ? 'active' : '' }}" href="{{ url('admin/category') }}">View Categories</a>
            </div>
        </div>
    </li>

    {{-- Post --}}
    <li class="nav-item {{ Request::is('admin/posts/create') || Request::is('admin/posts') || Request::is('admin/posts/*/edit') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#post" aria-expanded="true"
            aria-controls="post">
            <i class="fas fa-fw fa-pen"></i>
            <span>Posts</span>
        </a>
        <div id="post" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item  {{ Request::is('admin/posts/create') ? 'active' : '' }}" href="{{ url('admin/posts/create') }}">Add Post</a>
                <a class="collapse-item  {{ Request::is('admin/posts') || Request::is('admin/posts/*/edit') ? 'active' : '' }}" href="{{ url('admin/posts') }}">View Posts</a>
            </div>
        </div>
    </li>

    {{-- Users --}}
    <li class="nav-item {{ Request::is('admin/users') || Request::is('admin/users/*/edit') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/users') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>

    {{-- Site Settings --}}
    <li class="nav-item {{ Request::is('admin/settings') || Request::is('admin/settings/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin/settings') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img src="" alt="" srcset="">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="{{ url('/') }}" target="_blank">View Site</a>
    </div>
    
</ul>
<!-- End of Sidebar -->