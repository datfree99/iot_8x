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
    <title>Iot smart - Dashboard</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/deskapp/css/core.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/deskapp/css/style.min.css')}}"/>
    <link rel="stylesheet" href="{{asset("vendor/awesome/css/all.css")}}" type="text/css">
    <link href="{{asset("/css/admin_style.css")}}" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-512x512.png" sizes="512x512">
    <link rel="apple-touch-icon" type="image/png" href="images/favicon/apple-touch-icon.png">

</head>
{{--class="header-white sidebar-light"--}}
<body class="body-dark">

<div class="header custom-dark-app">
    <div class="header-left">
        <div class="menu-icon fal fa-bars pl-md-3 p-md-2 ml-md-4">
        </div>

    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >
                    <span class="user-icon">
                        <img src="/assets/images/iot_logo.png" alt="{{ Auth::user()->name }}"/>
                    </span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                    <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fal fa-sign-out"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('admin.dashboard')}}">
            <img src="/assets/images/deskapp-logo.svg" alt="" class="dark-logo"/>
            <img
                src="/assets/images/deskapp-logo-white.svg"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu icon-style-1 icon-list-style-1">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('admin.dashboard')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('admin.dashboard')) active @endif">
                        <i class="micon far fa-home"></i>
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.category.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('admin.category.index')) active @endif">
                        <i class="micon far fa-bezier-curve"></i>
                        <span class="mtext">Categories us</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.slider.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs(['admin.slider.index', 'admin.slider.create', 'admin.slider.edit'])) active @endif">
                        <i class="micon far fa-tv-alt"></i>
                        <span class="mtext">Slider</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.post.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs(['admin.post.index', 'admin.post.create', 'admin.post.edit'])) active @endif">
                        <i class="micon far fa-layer-group"></i>
                        <span class="mtext">Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.about-us')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('admin.about-us')) active @endif">
                        <i class="micon far fa-user-edit"></i>
                        <span class="mtext">About us</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10 d-flex flex-column @yield('add-container') justify-content-between" style="height: 100%">
        <div class="mb-20">
            @yield('content')
        </div>
        <div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                Iot smart - Copyright © Your Website 2024
            </div>
        </div>
    </div>
</div>

<!-- js -->
<script src="{{asset('vendor/deskapp/js/core.min.js')}}"></script>
<script src="{{asset('vendor/deskapp/js/script.min.js')}}"></script>
<!-- Bootstrap core JavaScript-->
{{--<script src="{{asset("vendor/jquery/jquery.js")}}"></script>--}}
{{--<script src="{{asset("vendor/jquery/jquery_ui.js")}}"></script></script>--}}
{{--<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
