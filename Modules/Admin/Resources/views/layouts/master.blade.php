<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin PcOnline</title>

    <!-- Custom fonts for this template-->
    <link href=" {{ asset('theme_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{ asset('theme_admin/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('theme_admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('theme_admin/css/chart.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this page -->
    <link href="{{ asset('theme_admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    {{-- Jquery confirm --}}
    <link href=" {{ asset('js/jquery-confirm-v3.3.4/dist/jquery-confirm.min.css') }}" rel="stylesheet"
        type="text/css">

    <script src=" {{ asset('theme_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>


</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ get_data_user('admins', 'name') }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ pare_url_file(get_data_user('admins', 'avatar')) }}{{-- {{ asset('img/DefaultUser.png') }} --}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin alert -->
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert"
                        style="position: fixed; right:20px; z-index: 99999999999999;">
                        <strong>Success!</strong> {{ \Session::get('success') }}
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger" role="alert"
                        style="position: fixed; right:20px; z-index: 99999999999999;">
                        <strong>Error</strong> {{ \Session::get('error') }}
                    </div>
                @endif

                <!-- End alert -->
                <!-- Begin Page Content -->
                <div class="col-sm-9 col-sm-offset-3 col-md-11 col-md-offset-2 mx-auto" id="HomeContent">
                    @yield('content')
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('admin.logout') }}" title="Logout">Logout</a>
                </div>
            </div>
        </div>
    </div>



</body>

<footer>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#output_img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#input_img").change(function() {
            readURL(this);
        });

    </script>



    {{-- Ck-editor --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- Jquery confirm --}}
    <script src="  {{ asset('js/jquery-confirm-v3.3.4/dist/jquery-confirm.min.js') }}"></script>


    {{-- Chart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src=" {{ asset('theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{ asset('theme_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{ asset('theme_admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src=" {{ asset('theme_admin/vendor/chart.js/Chart.min.js') }}"></script>
    {{-- Tabble --}}
    <script src="{{ asset('theme_admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme_admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>


    <!-- Page level custom scripts -->
    <script src=" {{ asset('theme_admin/js/demo/chart-area-demo.js') }}"></script>
    <script src=" {{ asset('theme_admin/js/demo/chart-pie-demo.js') }}"></script>
    {{-- Table --}}
    <script src=" {{ asset('theme_admin/js/demo/datatables-demo.js') }}"></script>
    @yield('script')


</footer>

</html>
