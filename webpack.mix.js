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
mix.options({
    processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});

mix
    .sass('resources/assets/sass/app.scss', 'public/css/build')
    .sass('resources/assets/sass/landing.scss', 'public/css/build')
    .sass('resources/assets/sass/whoweare.scss', 'public/css/build')
    .sass('node_modules/bulma/bulma.sass', 'public/css')
    .styles([
        'public/css/build/app.css',
        'public/css/build/landing.css',
        'public/css/build/whoweare.css'
    ], 'public/css/app.css')

    
