var elixir = require('laravel-elixir');

var assetsDir = 'resources/assets';

elixir(function (mix) {
    mix
        .scripts([
            'bower/jquery/dist/jquery.min.js',
            'bower/bootstrap/dist/js/bootstrap.min.js',
            'bower/bootstrap-material-design/dist/js/ripples.min.js',
            'bower/bootstrap-material-design/dist/js/material.min.js',
            'bower/jquery-sortable/source/js/jquery-sortable-min.js',
            'bower/dropdown.js/jquery.dropdown.js',
            'custom/js/main.js'
        ], assetsDir, 'public/js/app.min.js')

        .styles([
            'bower/bootstrap/dist/css/bootstrap.min.css',
            'bower/bootstrap-material-design/dist/css/ripples.min.css',
            'bower/bootstrap-material-design/dist/css/material.min.css',
            'bower/fontawesome/css/font-awesome.min.css',
            'bower/dropdown.js/jquery.dropdown.css',
            'custom/css/main.css'
        ], assetsDir, 'public/css/style.min.css')

        .copy('resources/assets/bower/fontawesome/fonts', 'public/fonts')
        .copy('resources/assets/bower/bootstrap-material-design/fonts', 'public/fonts')
        .copy('resources/assets/bower/bootstrap-material-design/dist/css/material.min.css.map', 'public/css/material.min.css.map')
        .copy('resources/assets/bower/bootstrap-material-design/dist/js/material.min.js.map', 'public/js/material.min.js.map');
});
