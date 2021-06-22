<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}"
        style="background-color: #008B8B;">
        <div>ADMIN LTE</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Danh Mục -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.category') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Danh Mục</span>
        </a>
    </li>

    <!-- Nav Item - Sản Phẩm -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.product') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sản Phẩm</span>
        </a>
    </li>

    <!-- Nav Item - Đánh giá -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.rating' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.rating') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Đánh giá sản phẩm</span>
        </a>
    </li>

    <!-- Nav Item - Đơn Hàng -->

    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.transaction') }}" id="Trans">
            <i class="fas fa-fw fa-cog"></i>
            <span>Đơn Hàng</span>
        </a>
    </li>

    <!-- Nav Item - Tin Tức -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.article' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.article') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tin Tức</span>
        </a>
    </li>

    <!-- Nav Item - Liên hệ -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.contact') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Liên hệ</span>
        </a>
    </li>

    <!-- Nav Item - Thành viên -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.user') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thành viên</span>
        </a>
    </li>

    <!-- Nav Item - Banner Menu -->
    <li
        class="nav-item {{ \Request::route()->getName() == 'admin.get.list.outbanner' ? 'active' : '' }} {{ \Request::route()->getName() == 'admin.get.list.slidebanner' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Banner Quảng cáo</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Banner:</h6>
                <a class="collapse-item {{ \Request::route()->getName() == 'admin.get.list.outbanner' ? 'active' : '' }}"
                    href="{{ route('admin.get.list.outbanner') }}">Banner ngoài</a>
                <a class="collapse-item {{ \Request::route()->getName() == 'admin.get.list.slidebanner' ? 'active' : '' }}"
                    href="{{ route('admin.get.list.slidebanner') }}">Slide Banner</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Admin user -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.admin' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.admin') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Quản trị viên</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
