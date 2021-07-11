<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center bg-primary"
        href="{{ route('admin.home') }}">
        <div>ADMIN LTE</div>
    </a>

    <div class="account-settings">
        <div class="user-profile">
            <div class="user-avatar">
                @if (get_data_user('admins', 'avatar') == null)
                    <img src="{{ asset('img/DefaultUser.png') }}" alt="{{ get_data_user('admins', 'name') }}">
                @else
                    <img src="{{ pare_url_file(get_data_user('admins', 'avatar')) }}" alt="{{ get_data_user('admins', 'name') }}">
                @endif
            </div>
            <h5 class="user-name text-white">{{ get_data_user('admins', 'name') }}</h5>
            <h6 class="user-email text-white ">{{ get_data_user('admins', 'email') }}</h6>
        </div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-center bg-dark">
        Main Navigation
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Danh Mục -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.category') }}">
            <i class="fas fa-th-list"></i>
            <span>Danh Mục</span>
        </a>
    </li>

    <!-- Nav Item - Sản Phẩm -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.product') }}">
            <i class="fas fa-database"></i>
            <span>Sản Phẩm</span>
        </a>
    </li>

    <!-- Nav Item - Đánh giá -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.rating' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.rating') }}">
            <i class="fas fa-star-half-alt"></i>
            <span>Đánh giá sản phẩm</span>
        </a>
    </li>

    <!-- Nav Item - Đơn Hàng -->

    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.transaction') }}" id="Trans">
            <i class="fas fa-scroll"></i>
            <span>Đơn Hàng</span>
        </a>
    </li>

    <!-- Nav Item - Tin Tức -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.article' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.article') }}">
            <i class="fas fa-book"></i>
            <span>Tin Tức</span>
        </a>
    </li>

    <!-- Nav Item - Liên hệ -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.contact') }}">
            <i class="fas fa-comments"></i>
            <span>Liên hệ</span>
        </a>
    </li>

    <!-- Nav Item - Thành viên -->
    <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.get.list.user') }}">
            <i class="fas fa-users"></i>
            <span>Thành viên</span>
        </a>
    </li>

    <!-- Nav Item - Banner Menu -->
    <li
        class="nav-item {{ \Request::route()->getName() == 'admin.get.list.outbanner' ? 'active' : '' }} {{ \Request::route()->getName() == 'admin.get.list.slidebanner' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-ad"></i>
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
            <i class="fas fa-user-shield"></i>
            <span>Quản trị viên</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider" style="margin-bottom: 1px">

    <div class="text-center">
        <a class="nav-link" style="color: white; font-size:11px;font-style: italic;" href="{{route('home')}}">Trang chủ</a>
    </div>
    <!-- Heading -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
