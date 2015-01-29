var elixir = require('laravel-elixir');

var assetsDir = 'resources/assets';

elixir(function (mix) {
    mix.scripts([
        'bower/jquery/dist/jquery.min.js',
        'bower/bootstrap/dist/js/bootstrap.min.js',
        'custom/js/main.js'
    ], assetsDir, 'public/js/app.min.js');

    mix.styles([
        'bower/bootstrap/dist/css/bootstrap.min.css',
        'bower/fontawesome/css/font-awesome.min.css',
        'custom/css/main.css'
    ], assetsDir, 'public/css/style.min.css');

    mix.copy('resources/assets/bower/fontawesome/fonts', 'public/fonts');
});
