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
<body class="">

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
                    <form id="logout-form" action="{{ route('logout') }}" method="DELETE" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
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
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Basic Tables</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Basic Tables
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-primary dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Basic Table</h4>
                        <p>Add class <code>.table</code></p>
                    </div>
                    <div class="pull-right">
                        <a
                            href="#basic-table"
                            class="btn btn-primary btn-sm scroll-click"
                            rel="content-y"
                            data-toggle="collapse"
                            role="button"
                        ><i class="fa fa-code"></i> Source Code</a
                        >
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Tag</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><span class="badge badge-primary">Primary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class="badge badge-secondary">Secondary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><span class="badge badge-success">Success</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="collapse collapse-box" id="basic-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#basic-table-code"
                            ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#basic-table"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                            ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
                        </div>
                        <pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
                    </div>
                </div>
            </div>
            <!-- basic table  End -->
            <!-- Bordered table  start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Bordered table</h4>
                        <p>
                            Add <code>.table .table-bordered</code> for borders on all
                            sides of the table and cells.
                        </p>
                    </div>
                    <div class="pull-right">
                        <a
                            href="#border-table"
                            class="btn btn-primary btn-sm scroll-click"
                            rel="content-y"
                            data-toggle="collapse"
                            role="button"
                        ><i class="fa fa-code"></i> Source Code</a
                        >
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Tag</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><span class="badge badge-primary">Primary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class="badge badge-secondary">Secondary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><span class="badge badge-success">Success</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="collapse collapse-box" id="border-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#border-table-code"
                            ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#border-table"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                            ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
                        </div>
                        <pre><code class="xml copy-pre" id="border-table-code">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
                    </div>
                </div>
            </div>
            <!-- Bordered table End -->
            <!-- Striped table start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Striped table</h4>
                        <p>
                            Add <code>.table .table-striped</code> to add zebra-striping
                            to any table row within the <code>&lt;tbody&gt;</code>.
                        </p>
                    </div>
                    <div class="pull-right">
                        <a
                            href="#striped-table"
                            class="btn btn-primary btn-sm scroll-click"
                            rel="content-y"
                            data-toggle="collapse"
                            role="button"
                        ><i class="fa fa-code"></i> Source Code</a
                        >
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Tag</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><span class="badge badge-primary">Primary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class="badge badge-secondary">Secondary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><span class="badge badge-success">Success</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class="badge badge-secondary">Secondary</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><span class="badge badge-success">Success</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="collapse collapse-box" id="striped-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#striped-table-code"
                            ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#striped-table"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                            ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
                        </div>
                        <pre><code class="xml copy-pre" id="striped-table-code">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
                    </div>
                </div>
            </div>
            <!-- Striped table End -->
            <!-- Responsive tables Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Responsive table</h4>
                        <p>
                            Responsive tables allow tables to be scrolled horizontally
                            with ease. Make any table responsive across all viewports by
                            wrapping a <code>.table .table-responsive</code> Or, pick a
                            maximum breakpoint with which to have a responsive table up to
                            by using<code>.table-responsive{-sm|-md|-lg|-xl}</code>.
                        </p>
                    </div>
                    <div class="pull-right">
                        <a
                            href="#responsive-table"
                            class="btn btn-primary btn-sm scroll-click"
                            rel="content-y"
                            data-toggle="collapse"
                            role="button"
                        ><i class="fa fa-code"></i> Source Code</a
                        >
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Tag</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><span class="badge badge-primary">Primary</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <span class="badge badge-secondary">Secondary</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <span class="badge badge-secondary">Secondary</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="collapse collapse-box" id="responsive-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#responsive-table-code"
                            ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#responsive-table"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                            ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
                        </div>
                        <pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							</code></pre>
                    </div>
                </div>
            </div>
            <!-- Responsive tables End -->
            <!-- Contextual classes Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Contextual classes</h4>
                        <p>
                            Use classes
                            <code
                            >( .table-active, .table-success, .table-info,
                                .table-warning, .table-danger )</code
                            >
                            to color table rows or individual cells
                        </p>
                    </div>
                    <div class="pull-right">
                        <a
                            href="#contextual-table"
                            class="btn btn-primary btn-sm scroll-click"
                            rel="content-y"
                            data-toggle="collapse"
                            role="button"
                        ><i class="fa fa-code"></i> Source Code</a
                        >
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Tag</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-active">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><span class="badge badge-primary">Primary</span></td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <span class="badge badge-secondary">Secondary</span>
                            </td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <span class="badge badge-secondary">Secondary</span>
                            </td>
                        </tr>
                        <tr class="table-danger">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><span class="badge badge-success">Success</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="collapse collapse-box" id="contextual-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a
                                href="javascript:;"
                                class="btn btn-primary btn-sm code-copy pull-left"
                                data-clipboard-target="#contextual-table-code"
                            ><i class="fa fa-clipboard"></i> Copy Code</a
                            >
                            <a
                                href="#contextual-table"
                                class="btn btn-primary btn-sm pull-right"
                                rel="content-y"
                                data-toggle="collapse"
                                role="button"
                            ><i class="fa fa-eye-slash"></i> Hide Code</a
                            >
                        </div>
                        <pre><code class="xml copy-pre" id="contextual-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <tbody>
	    <tr class="table-active"><td></td></tr>
		<tr class="table-primary"><td></td></tr>
		<tr class="table-secondary"><td></td></tr>
		<tr class="table-success"><td></td></tr>
		<tr class="table-danger"><td></td></tr>
		<tr class="table-warning"><td></td></tr>
		<tr class="table-info"><td></td></tr>
		<tr class="table-light"><td></td></tr>
		<tr class="table-dark"><td></td></tr>
	  </tbody>
	</table>
</div>
							</code></pre>
                    </div>
                </div>
            </div>
            <!-- Contextual classes End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank"
            >Ankit Hingarajiya</a
            >
        </div>
    </div>
</div>

<!-- js -->
<script src="{{asset('vendor/deskapp/js/core.min.js')}}"></script>
<script src="{{asset('vendor/deskapp/js/script.min.js')}}"></script>

<!-- End Google Tag Manager (noscript) -->
</body>
</html>
