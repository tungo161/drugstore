const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js');
 mix.sass('resources/sass/global.scss', 'public/css');
 mix.sass('resources/sass/vendor.scss', 'public/css');
 mix.sass('resources/sass/header.scss', 'public/css');
 mix.sass('resources/sass/footer.scss', 'public/css');
 mix.sass('resources/sass/home-page.scss', 'public/css');
 mix.sass('resources/sass/404.scss', 'public/css');
 mix.sass('resources/sass/index-products.scss', 'public/css');
 mix.sass('resources/sass/cart-page.scss', 'public/css');
 mix.sass('resources/sass/confirm-cart.scss', 'public/css');
 mix.sass('resources/sass/complete-pay.scss', 'public/css');
 mix.sass('resources/sass/profile-page.scss', 'public/css');
 mix.sass('resources/sass/user-order.scss', 'public/css');
 mix.sass('resources/sass/infomation-order.scss', 'public/css');
 mix.sass('resources/sass/search-page.scss', 'public/css');
 mix.sass('resources/sass/product-detail.scss', 'public/css');
 mix.sass('resources/sass/index-medicine.scss', 'public/css');
 mix.sass('resources/sass/index-functional.scss', 'public/css');
 mix.sass('resources/sass/index-instrument.scss', 'public/css');
 mix.sass('resources/sass/introduce-page.scss', 'public/css');
 mix.sass('resources/sass/news-page.scss', 'public/css');
 mix.sass('resources/sass/contact-page.scss', 'public/css');
 mix.sass('resources/sass/news-detail.scss', 'public/css');
 mix.sass('resources/sass/login-page.scss', 'public/css');
 mix.sass('resources/sass/register-page.scss', 'public/css');
 if (mix.inProduction()) {
    mix.version();
 }
 
