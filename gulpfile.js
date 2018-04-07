var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
var lib = 'public/lib/';
var css = 'public/css/';
var fonts = 'public/fonts/';
var images = 'public/images/';
var js = 'public/js/';

elixir.config.sourcemaps = false;

// libs
// 1. jquery
elixir(function(mix) {
    mix
        .copy('node_modules/jquery/dist/jquery.min.js', lib + 'jquery/')
        .copy('node_modules/jquery/dist/jquery.min.map', lib + 'jquery/');
});


// 3. bootstrap
elixir(function(mix) {
    mix
        .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', lib + 'bootstrap/css/')
        .copy('node_modules/bootstrap/dist/fonts/*.*', lib + 'bootstrap/fonts/')
        .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', lib + 'bootstrap/js/');
});


// custom settings.
// 2.1 copy images
elixir(function(mix) {
    mix.copy('resources/assets/images/', images);
});


elixir(function(mix) {
    mix.copy('resources/assets/js/', 'public/js/');
});


// 3. version
elixir(function(mix) {
    mix.version([
        'css/font-awesome.css',
        'css/dataTables.bootstrap.css',

        'public/js/common/admin-lte/js/app.min.js',
        'public/js/common/bootstrap.autocomplete.js',

    ]);
});
