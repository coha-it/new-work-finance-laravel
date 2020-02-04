const mix = require('laravel-mix');

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

// Mix JS Files
mix.js(['resources/js/app.js', 'resources/js/main.js'], 'public/dist/js/app.js');

// LIVE
if (mix.inProduction()) {
    mix.styles(['public/assets/css/plugins.css','public/assets/css/style.css'],'public/assets/css/app.min.css');
    mix.combine(['public/assets/js/plugins.js', 'public/dist/js/app.js'], 'public/assets/js/combined.min.js');
    mix.version();
} 
// DEV / LOCAL
else {

}


