<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{ asset('favicon.ico') }}" alt="Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">STR-LAB 後臺</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="{{ route('admin.teacher') }}" class="nav-link @yield('admin.active.teacher')">
                        <i class="nav-icon fas fa-coffee"></i>
                        <p>
                            老師介紹
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link @yield('admin.active.research_area')">
                        <i class="nav-icon fas fa-coffee"></i>
                        <p>
                            研究方向
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link @yield('admin.active.equipment')">
                        <i class="nav-icon fas fa-coffee"></i>
                        <p>
                            儀器介紹
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link @yield('admin.active.members')">
                        <i class="nav-icon fas fa-coffee"></i>
                        <p>
                            組織成員
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>