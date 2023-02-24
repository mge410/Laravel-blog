<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src=" {{ asset('dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Database</li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Blogdb
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href=" {{ route('admin.user.index') }} " class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.post.index') }} " class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.category.index') }} " class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.tag.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>tags</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
