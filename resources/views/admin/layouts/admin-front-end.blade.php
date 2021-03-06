<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{HTML::style('public/css/bootstrap.min.css')}}
    {{HTML::style('public/font-awesome/css/font-awesome.css')}}
    {{HTML::style('public/css/animate.css')}}
    {{HTML::style('public/css/style.css')}}
</head>
<body class="gray-bg">
    @yield('content')

<!-- Scripts -->
{!! HTML::Script('public/js/jquery-2.1.1.js')!!}
{!! HTML::Script('public/js/bootstrap.min.js')!!}
</body>
</html>
