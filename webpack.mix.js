const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/main.js', 'public/assets/js')
   .sass('resources/assets/sass/main.scss', 'public/assets/css')
   .styles('resources/assets/css/*.css', 'public/assets/css/others.css')
   .scripts('resources/assets/js/vendor/*.js', 'public/assets/js/others.js');
