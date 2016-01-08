var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix
    .sass('app.scss')
    .scripts([

        /* libs */
        'libs/jquery/dist/jquery.min.js',
        'libs/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'libs/angular/angular.min.js',
        'libs/angular-route/angular-route.min.js',

        /* AngularJS start */
        'app.module.js',

        /* dashboard */
        'dashboard/dashboard.module.js',
        'dashboard/config.routes.js',
        'dashboard/dashboard.js'
        /* AngularJS start */
    ]);
});
