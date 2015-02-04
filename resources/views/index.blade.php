@extends('layouts.basic')

@section('main')
    <div class="jumbotron container">
        <h1>Laraforms</h1>
        <p>Laraforms is a simple form and survey creator with minimalism and speed in mind.</p>
        @if (Auth::check())
            <a href="{{ route('form.create') }}" class="btn btn-primary btn-lg" role="button">Get started!</a>
        @else
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-lg" role="button">Get started!</a>
        @endif
    </div>

    <div class="container-fluid">
        <div class="col-md-6">
            <img src="/img/index/apple-products.png" alt="" class="img-full-width">
        </div>
        <div class="col-md-6">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid assumenda autem corporis deserunt dignissimos dolor dolore eaque error, facere laudantium molestias natus, nobis numquam possimus quaerat quisquam quo rem sed, temporibus totam unde ut veritatis vitae voluptates voluptatum. Assumenda, commodi delectus excepturi itaque laborum quibusdam quisquam similique. Earum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In non quos temporibus. At autem culpa debitis deserunt dicta dignissimos eligendi est et facilis fugit, harum ipsum laudantium libero magni minima modi necessitatibus quasi qui quibusdam quisquam suscipit ut vero. Architecto cumque deleniti facilis inventore mollitia officiis pariatur quaerat quam suscipit.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid assumenda autem corporis deserunt dignissimos dolor dolore eaque error, facere laudantium molestias natus, nobis numquam possimus quaerat quisquam quo rem sed, temporibus totam unde ut veritatis vitae voluptates voluptatum. Assumenda, commodi delectus excepturi itaque laborum quibusdam quisquam similique. Earum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam debitis delectus deserunt dolore dolorem ea error eveniet ex excepturi explicabo fuga fugiat inventore itaque magnam minus natus nesciunt nihil nostrum porro quam reprehenderit, suscipit tempore temporibus totam ullam velit veniam veritatis vitae voluptatem. Fugiat illo incidunt molestiae quae quisquam.</p>
        </div>
        <div class="col-md-6">
            <img src="http://placehold.it/500x250" alt="" class="img-full-width">
        </div>
    </div>
@stop