<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
<div id="wrapper">
    @include('includes.menu')

    <div id="page-wrapper" class="gray-bg">
        @include('includes.top-nav')
        @yield('content')
    </div>
</div>

<!-- Mainly scripts -->
{!! HTML::Script('js/jquery-2.1.1.js') !!}
{!! HTML::Script('js/bootstrap.min.js') !!}
{!! HTML::Script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! HTML::Script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

<!-- Peity -->
{!! HTML::Script('js/plugins/peity/jquery.peity.min.js') !!}
{!! HTML::Script('js/demo/peity-demo.js') !!}

<!-- Custom and plugin javascript -->
{!! HTML::Script('js/inspinia.js') !!}
{!! HTML::Script('js/plugins/pace/pace.min.js') !!}

<!-- jQuery UI -->
{!! HTML::Script('js/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! HTML::Script('js/plugins/toastr/toastr.min.js') !!}


</body>
</html>
