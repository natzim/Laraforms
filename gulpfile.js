var elixir = require('laravel-elixir');

var assetsDir = 'resources/assets';

elixir(function (mix) {
    mix.scripts([
        'jquery/dist/jquery.min.js',
        'bootstrap/dist/js/bootstrap.min.js'
    ], assetsDir, 'public/js/app.min.js');

    mix.styles([
        'bootstrap/dist/css/bootstrap.min.css',
        'fontawesome/css/font-awesome.min.css'
    ], assetsDir, 'public/css/style.min.css');

    mix.copy('resources/assets/fontawesome/fonts', 'public/fonts');
});
