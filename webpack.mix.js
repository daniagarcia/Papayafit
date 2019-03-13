let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/config/app.js', 'public/js/dashboard.min.js')
  .js('resources/assets/js/development/dispatchers/home.js', 'public/js/home.min.js')
  .js('resources/assets/js/development/dispatchers/access.js', 'public/js/access.min.js')
  .js('resources/assets/js/development/dispatchers/password_recovery.js', 'public/js/password_recovery.min.js')
  .sass('resources/assets/sass/administer.sass', 'public/css/dashboard.min.css')
  .sass('resources/assets/sass/home.sass', 'public/css/home.min.css')
  .sass('resources/assets/sass/password_recovery.sass', 'public/css/password_recovery.min.css')
  .sass('resources/assets/sass/access.sass', 'public/css/access.min.css');
