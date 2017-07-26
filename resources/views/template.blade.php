<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gameforest - Responsive Gaming HTML Theme</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- CORE CSS -->
    {{Html::style('plugins/bootstrap/css/bootstrap.min.css')}}
    {{Html::style('plugins/font-awesome/css/font-awesome.min.css')}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    {{Html::style('plugins/animate/animate.min.css')}}
    {{Html::style('plugins/owl-carousel/owl.carousel.css')}}

    <!-- THEME CSS -->
    {{Html::style('css/theme.css')}}
    {{Html::style('css/custom.css')}}
</head>

<body class="fixed-header">

    <!-- header -->
    @include('partials.header')
    <!-- /header -->

    <div class="modal-search">
        <div class="container">
            <input type="text" class="form-control" placeholder="Type to search...">
            <i class="fa fa-times close"></i>
        </div>
    </div><!-- /.modal-search -->

    <!-- wrapper -->
    <div id="wrapper">
        @yield('content')
    </div>
    <!-- /#wrapper -->

    <!-- footer -->
    @include('partials.footer')
    <!-- /.footer -->

    <!-- Javascript -->
    {{Html::script("plugins/jquery/jquery-3.1.0.min.js")}}
    {{Html::script("plugins/bootstrap/js/bootstrap.min.js")}}
    {{Html::script("plugins/owl-carousel/owl.carousel.min.js")}}
    {{Html::script("plugins/twitter/twitter.js")}}
    {{Html::script("js/core.min.js")}}

    @yield('scripts')
</body>
</html>

