<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Link -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/user.auth.style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/navigation.style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/profile.style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/home.style.css')}}" rel="stylesheet" type="text/css">

    <!-- JS Link -->
    <link href="{{ asset('js/bootstrap.js')}}" type="text/javascript" rel="script">
    <link href="{{ asset('js/bootstrap.min.js')}}" type="text/javascript" rel="script">

    <title>@yield('title')</title>
</head>
<body>
        @yield('content')
</body>
</html>