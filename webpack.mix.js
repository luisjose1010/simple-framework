
let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public_html/js').sass('resources/assets/sass/app.scss', 'public_html/css');
