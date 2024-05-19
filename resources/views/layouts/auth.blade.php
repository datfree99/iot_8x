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
    <meta name="robots" content="none">
    <title>Login - Iotsmart.vn</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet"/>
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
<body class="login-page">
    @yield('content')
</body>
</html>


