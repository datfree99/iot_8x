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

<body class="bg-gradient-primary">

<div class="container auth">

    @yield('content')
</div>

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
