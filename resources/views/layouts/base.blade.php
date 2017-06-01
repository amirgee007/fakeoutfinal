<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        @section('title')
            | FakeOut App
        @show
    </title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jumbotron.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/jquery.min.js') }}" rel="script">
    <link href="{{ asset('/js/bootstrap.min.js') }}" rel="script">
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
<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="{{ Request::is('/') ? 'active' : '' }}"><a
                            href="{{ action("PagesController@base") }}">Home</a></li>
                @if (Auth::guest())
                    <li role="presentation" class="{{ Request::is('login') ? 'active' : '' }}"><a
                                href="{{ action("Auth\LoginController@login") }}">Login</a></li>
                    <li role="presentation" class="{{ Request::is('register') ? 'active' : '' }}"><a
                                href="{{ action("Auth\RegisterController@register") }}">Register</a></li>
                @else
                    <li role="presentation" class="{{ Request::is('app') ? 'active' : '' }}"><a
                                href="{{ action("AppController@appLaunch") }}">App</a></li>
                    <li role="presentation"><a
                                href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
                <li role="presentation" class="{{ Request::is('about') ? 'active' : '' }}"><a
                            href="{{ action("PagesController@about") }}">About</a></li>

            </ul>
        </nav>
        <h3 class="text-muted">FakeOut</h3>
    </div>

    @yield('content')

    <footer class="footer">
        <p>&copy; 2017 expressotur</p>
        UNIX timestamp: {{ time() }}.

    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
