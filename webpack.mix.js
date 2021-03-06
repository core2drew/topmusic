let mix = require("laravel-mix");

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
  .sass("resources/assets/sass/app.scss", "public/css/build")
  .sass("resources/assets/sass/navbar.scss", "public/css/build")
  .sass("resources/assets/sass/footer.scss", "public/css/build")
  .sass("resources/assets/sass/landing.scss", "public/css/build")
  .sass("resources/assets/sass/whoweare.scss", "public/css/build")
  .sass("resources/assets/sass/whatwedo.scss", "public/css/build")
  .sass("resources/assets/sass/clients.scss", "public/css/build")
  .sass("resources/assets/sass/contactus.scss", "public/css/build")
  .sass("node_modules/bulma/bulma.sass", "public/css")
  .styles(
    [
      "public/css/build/app.css",
      "public/css/build/navbar.css",
      "public/css/build/footer.css",
      "public/css/build/landing.css",
      "public/css/build/whoweare.css",
      "public/css/build/whatwedo.css",
      "public/css/build/clients.css",
      "public/css/build/contactus.css"
    ],
    "public/css/app.css"
  )
  .babel(
    ["node_modules/jquery/dist/jquery.min.js", "resources/assets/js/main.js"],
    "public/js/main.js"
  );

if (mix.inProduction()) {
  mix.version();
}
