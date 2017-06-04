<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @section('title')
            | Fakeout Ticket Solutions app
        @show
    </title>

    <!-- template skin -->
    <link id="t-colors" href="" rel="stylesheet">

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nivo-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/color/default.css') }}" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom" role="navigation">
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ action("PagesController@base") }}">
                    <img src="/img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><div id="cart"></div></li>
                    <li class="{{ \Route::is('index') || Request::is('app') ? 'active' : '' }}"><a href="{{ action("PagesController@base") }}">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ action("PagesController@about") }}">About</a></li>
                    <li class="{{ Request::is('features') ? 'active' : '' }}"><a href="#">Features <span class="label label-danger"></span></a> </li>
                    <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{ action("Auth\RegisterController@register") }}">Register <span class="label label-danger"></span></a> </li>
                    <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ action("Auth\LoginController@login") }}">Login <span class="label label-danger"></span></a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>

@yield('content')

    <footer>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>

                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p>&copy;2017Copyright - Fakeout. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="text-right margintop-30">
                                <div class="credits">
                                    <!--
                                        All the links in the footer should remain intact.
                                        You can delete the links only if you purchased the pro version.
                                        Licensing information: https://bootstrapmade.com/license/
                                        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=Appland
                                    -->
                                    Developed By: <a href="https://seersol.com/">Seer Solutions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<link href="{{ asset('/js/jquery.min.js') }}" rel="script">
<link href="{{ asset('/js/bootstrap.min.js') }}" rel="script">
<link href="{{ asset('/js/jquery.easing.min.js') }}" rel="script">
<link href="{{ asset('/js/wow.min.js') }}" rel="script">
<link href="{{ asset('/js/jquery.scrollTo.js') }}" rel="script">
<link href="{{ asset('/js/nivo-lightbox.min.js') }}" rel="script">
<link href="{{ asset('/js/custom.js') }}" rel="script">
{{--<script type="text/javascript">jssor_1_slider_init();</script>--}}
@yield('footer_script')
</body>

</html>

