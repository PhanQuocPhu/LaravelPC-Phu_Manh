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
    <script src=" {{ asset('theme_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<style>
    .account-settings {
        margin-top: 20px ;
        padding-bottom: 1rem;
        text-align: center;
    }
    .account-settings .user-profile {
        margin: 0 0 1rem 0;
        padding-bottom: 1rem;
        text-align: center;
    }

    .account-settings .user-profile .user-avatar {
        margin: 0 0 1rem 0;
    }

    .account-settings .user-profile .user-avatar img {
        width: 90px;
        height: 90px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
    }

    .account-settings .user-profile h5.user-name {
        margin: 0 0 0.5rem 0;
    }

    .account-settings .user-profile h6.user-email {
        margin: 0;
        font-size: 0.8rem;
        font-weight: 400;
        color: #9fa8b9;
    }

    .account-settings .about {
        margin: 2rem 0 0 0;
        text-align: center;
    }

    .account-settings .about h5 {
        margin: 0 0 15px 0;
        color: #007ae1;
    }

    .account-settings .about p {
        font-size: 0.825rem;
    }

</style>
@yield('style')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-light text-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <div class="account-settings">
                <div class="user-profile">
                    <div class="user-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                    </div>
                    <h5 class="user-name ">{{ get_data_user('web', 'name') }}</h5>
                    <h6 class="user-email ">{{ get_data_user('web', 'email') }}</h6>
                </div>
            </div>

            <!-- Nav Item - Thông tin cá nhân -->
            <li class="nav-item {{ \Request::route()->getName() == 'user.info' ? 'active' : '' }} ">
                <a class="nav-link text-secondary" href="{{ route('user.info') }}">
                    <i class="fas fa-fw fa-tachometer-alt text-secondary "></i>
                    <span>Thông tin cá nhân</span></a>
            </li>

            <li class="nav-item {{ \Request::route()->getName() == 'user.update.password' ? 'active' : '' }} ">
                <a class="nav-link text-secondary" href="{{ route('user.update.password') }}">
                    <i class="fas fa-fw fa-tachometer-alt text-secondary "></i>
                    <span>Đổi mật khẩu</span></a>
            </li>

            <!-- Nav Item - Đơn hàng -->
            <li class="nav-item {{ \Request::route()->getName() == 'user.transaction' ? 'active' : '' }}">
                <a class="nav-link text-secondary" href="{{ route('user.transaction') }}">
                    <i class="fas fa-fw fa-cog text-secondary"></i>
                    <span>Đơn hàng của bạn</span>
                </a>
            </li>

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

                <br>
                <!-- Begin Page Content -->
                <div class="col-sm-9 col-sm-offset-3 col-md-11 col-md-offset-2 mx-auto" id="HomeContent" >
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
                    <a class="btn btn-primary" href="{{-- {{route(get.login)}} --}}" title="logout">Logout</a>
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

    <!-- Page level custom scripts -->
    <script src=" {{ asset('theme_admin/js/demo/chart-area-demo.js') }}"></script>
    <script src=" {{ asset('theme_admin/js/demo/chart-pie-demo.js') }}"></script>
    @yield('script')


</footer>

</html>
