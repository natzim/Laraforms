<!DOCTYPE html>
<html lang="en" ng-app="forms">
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
<body ng-controller="TestCtrl as test">

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

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ng-show="{{ test.isSignedIn }}"><a href=""><i class="fa fa-sign-out"></i> Sign out</a></li>

                <li ng-hide="{{ test.isSignedIn }}"><a href=""><i class="fa fa-sign-in"></i> Sign in</a></li>
                <li ng-hide="{{ test.isSignedIn }}"><a href="">Sign up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div ng-hide="{{ test.isSignedIn }}">
    <div class="jumbotron container">
        <h1>Laraforms</h1>
        <p>Laraforms is a simple form and survey creator with minimalism and speed in mind.</p>
        <a href="" class="btn btn-primary btn-lg" role="button">Get started!</a>
    </div>

    <div class="container-fluid">
        <div class="col-sm-6">
            <img src="/img/index/apple-products.png" alt="" class="img-full-width">
        </div>
        <div class="col-sm-6">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid assumenda autem corporis deserunt dignissimos dolor dolore eaque error, facere laudantium molestias natus, nobis numquam possimus quaerat quisquam quo rem sed, temporibus totam unde ut veritatis vitae voluptates voluptatum. Assumenda, commodi delectus excepturi itaque laborum quibusdam quisquam similique. Earum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In non quos temporibus. At autem culpa debitis deserunt dicta dignissimos eligendi est et facilis fugit, harum ipsum laudantium libero magni minima modi necessitatibus quasi qui quibusdam quisquam suscipit ut vero. Architecto cumque deleniti facilis inventore mollitia officiis pariatur quaerat quam suscipit.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-sm-6 col-sm-push-6">
            <img src="http://placehold.it/500x250" alt="" class="img-full-width">
        </div>
        <div class="col-sm-6 col-sm-pull-6">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid assumenda autem corporis deserunt dignissimos dolor dolore eaque error, facere laudantium molestias natus, nobis numquam possimus quaerat quisquam quo rem sed, temporibus totam unde ut veritatis vitae voluptates voluptatum. Assumenda, commodi delectus excepturi itaque laborum quibusdam quisquam similique. Earum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam debitis delectus deserunt dolore dolorem ea error eveniet ex excepturi explicabo fuga fugiat inventore itaque magnam minus natus nesciunt nihil nostrum porro quam reprehenderit, suscipit tempore temporibus totam ullam velit veniam veritatis vitae voluptatem. Fugiat illo incidunt molestiae quae quisquam.</p>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>