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
mix.js(['resources/js/app.js', 'resources/js/main.js', 'resources/js/custom.js'], 'public/dist/js/app.js');
mix.sass('resources/scss/custom.scss', 'public/dist/css/custom.css');

// LIVE
if (mix.inProduction()) {
    mix.styles(['public/assets/css/plugins.css','public/assets/css/style.css', 'public/dist/css/custom.css'],'public/assets/css/combined.min.css');
    mix.combine(['public/assets/js/plugins.js', 'public/assets/js/typewriter.js', 'public/dist/js/app.js'], 'public/assets/js/combined.min.js');
    mix.version();
}
// DEV / LOCAL
else {}
