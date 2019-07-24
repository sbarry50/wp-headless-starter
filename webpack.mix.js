const mix = require("laravel-mix");

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

mix.sass("resources/css/settings-admin.scss", "dist/css/");

mix
  .js("resources/js/main.js", "dist/js/")
  .js("resources/js/input-mask.js", "dist/js/")
  .js("resources/js/media-uploader.js", "dist/js/");
