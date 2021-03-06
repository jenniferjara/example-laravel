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

mix.styles('resources/assets/css/*.css', 'public/assets/css/publicvendor.css');
mix.sass('resources/assets/sass/public.scss', 'public/assets/css');
mix.scripts('resources/assets/js/vendor/*.js', 'public/assets/js/publicvendor.js');
mix.js('resources/assets/js/public.js', 'public/assets/js'); 
