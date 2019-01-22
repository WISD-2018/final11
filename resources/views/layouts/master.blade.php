<!doctype html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('page-title') | 購物平台示範</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@yield('page-style')

    <!-- Custom CSS -->
    @if(Auth::user()->previlege_id==3)
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
    @endif
    <!-- Morris Charts CSS -->
    <link href="{{ asset('css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="{{ (request()->is('cart'))? 'bg-light' : '' }}">

    <div id="wrapper">


        <div id="page-wrapper">
            @yield('page-content')
            <div class="container-fluid">

                @yield('content')

                <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
                <script src="{{ asset('js/popper.min.js') }}"></script>
                <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                @yield('page-script')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('js/plugins/morris/morris-data.js') }}"></script>

</body>

</html>
