var elixir = require('laravel-elixir');

var assetsDir = 'resources/assets/';

elixir(function (mix) {
    mix
        .scripts([
            'bower/jquery/dist/jquery.js',
            'bower/bootstrap-material-design/dist/js/ripples.js',
            'bower/bootstrap-material-design/dist/js/material.js',
            'bower/jquery-sortable/source/js/jquery-sortable.js',
            'bower/dropdown.js/jquery.dropdown.js',
            'bower/angular/angular.js',
            'bower/angular-bootstrap/ui-bootstrap.js',
            'custom/js/main.js'
        ], 'public/js/app.js', assetsDir)

        .styles([
            'bower/bootstrap/dist/css/bootstrap.css',
            'bower/bootstrap-material-design/dist/css/ripples.css',
            'bower/bootstrap-material-design/dist/css/material.css',
            'bower/fontawesome/css/font-awesome.css',
            'bower/dropdown.js/jquery.dropdown.css',
            'custom/css/main.css'
        ], 'public/css/style.css', assetsDir)

        .copy(assetsDir + 'bower/fontawesome/fonts', 'public/fonts')
        .copy(assetsDir + 'bower/bootstrap-material-design/fonts', 'public/fonts')
        .copy(assetsDir + 'bower/bootstrap-material-design/dist/css/material.css.map', 'public/css/material.css.map');
});
