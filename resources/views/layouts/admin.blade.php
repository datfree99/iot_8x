<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IOT - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset("vendor/awesome/css/all.css")}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("assets/css/sb-admin-2.min.css")}}" rel="stylesheet">
    <link href="{{asset("/css/admin_style.css")}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper" class="custom-style">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">IOT Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Quản trị web
        </div>
        <li class="nav-item @if(request()->routeIs(['admin.slider.index', 'admin.slider.create', 'admin.slider.edit'])) active @endif">
            <a class="nav-link" href="{{route('admin.slider.index')}}">
                <i class="far fa-tv-alt"></i></i>
                <span>Slider</span>
            </a>
        </li>
        <li class="nav-item @if(request()->routeIs(['admin.about-us'])) active @endif">
            <a class="nav-link" href="{{route('admin.about-us')}}">
                <i class="far fa-user-edit"></i>
                <span>About us</span>
            </a>
        </li>
        <li class="nav-item @if(request()->routeIs(['admin.category.index'])) active @endif">
            <a class="nav-link" href="{{route('admin.category.index')}}">
                <i class="far fa-bezier-curve"></i>
                <span>Categories</span>
            </a>
        </li>
{{--        <li class="nav-item @if(request()->routeIs(['admin.product.index', 'admin.product.create', 'admin.product.edit'])) active @endif">--}}
{{--            <a class="nav-link" href="{{route('admin.product.index')}}">--}}
{{--                <i class="fal fa-cart-plus"></i>--}}
{{--                <span>Products</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item @if(request()->routeIs(['admin.post.index', 'admin.post.create', 'admin.post.edit'])) active @endif">
            <a class="nav-link" href="{{route('admin.post.index')}}">
                <i class="far fa-layer-group"></i>
                <span>Posts</span>
            </a>
        </li>

{{--        <!-- Divider -->--}}
{{--        <hr class="sidebar-divider">--}}

{{--        <!-- Heading -->--}}
{{--        <div class="sidebar-heading">--}}
{{--            Quản trị viên--}}
{{--        </div>--}}


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle">
            </button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div>
                    {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
                </div>
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle"
                                 src="/assets/images/iot_logo.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="DELETE" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2024</span>
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


<!-- Bootstrap core JavaScript-->
<script src="{{asset("vendor/jquery/jquery.js")}}"></script>
<script src="{{asset("vendor/jquery/jquery_ui.js")}}"></script></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/sb-admin-2.min.js")}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')

</body>

</html>
