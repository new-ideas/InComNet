<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | International Communication Network</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('public/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('public/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/plugins/select2/select2.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('public/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet">



</head>

<body>
<div id="wrapper">
    @include('admin.includes.menu')

    <div id="page-wrapper" class="gray-bg">
        @include('admin.includes.top-nav')
        @yield('content')

        @include('admin.includes.footer')
    </div>

</div>

@include('admin.modal.common-modal')

<script>
    var base_url= "{{url()->to('/')}}";
    var csrf_token= "{{csrf_token()}}";
</script>

<!-- Mainly scripts -->
{!! HTML::Script('public/js/jquery-2.1.1.js') !!}
{!! HTML::Script('public/js/bootstrap.min.js') !!}
{!! HTML::Script('public/js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! HTML::Script('public/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

<!-- Peity -->
{!! HTML::Script('public/js/plugins/peity/jquery.peity.min.js') !!}
{!! HTML::Script('public/js/demo/peity-demo.js') !!}

<!-- Custom and plugin javascript -->
{!! HTML::Script('public/js/inspinia.js') !!}
{!! HTML::Script('public/js/plugins/pace/pace.min.js') !!}

<!-- jQuery UI -->
{!! HTML::Script('public/js/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! HTML::Script('public/js/plugins/toastr/toastr.min.js') !!}

{!! HTML::Script('public/js/plugins/select2/select2.full.min.js') !!}

{!! HTML::Script('public/js/custom.js') !!}


</body>
</html>
