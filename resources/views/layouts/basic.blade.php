<!DOCTYPE html>
<html lang="en" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laraforms</title>

    <link href="/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laraforms</a>
            </div>

            {{ "Hello world" }}

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href=""><i class="fa fa-sign-out"></i> Sign out</a></li>
                    @else
                        <li><a href=""><i class="fa fa-sign-in"></i> Sign in</a></li>
                        <li><a href="">Sign up</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')

    <script src="/js/app.js"></script>
</body>
</html>