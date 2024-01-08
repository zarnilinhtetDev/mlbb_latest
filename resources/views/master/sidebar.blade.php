<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light ml-6">Admin Dashboard</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-list"></i>
                        <p class="pl-4">
                            Main
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                @if (auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2)
                    <li class="nav-item">
                        <a href="{{ url('/reseller') }}" class="nav-link">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <p class="pl-4">
                                Reseller
                                {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->is_admin == 2)
                    <a class="nav-link" href="{{ url('/user') }}">
                        <i class="fa-solid fa-user-plus"></i>
                        <p class="pl-3">
                            Users
                        </p>
                    </a>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
