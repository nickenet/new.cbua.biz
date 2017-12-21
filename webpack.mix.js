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

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/app.rtl.scss', 'public/css');

mix.options({ processCssUrls: false });

/* Combine CSS */
mix.combine([
	'public/css/app.css',
	'public/assets/bootstrap/css/bootstrap.min.css',
	'public/assets/plugins/select2/css/select2.min.css',
	'public/assets/plugins/tag-it/css/jquery.tagit.css',
	'public/assets/plugins/tag-it/css/tagit.ui-zendesk.css',
	'public/assets/css/style.css',
	'public/assets/css/style-main.css',
	'public/assets/css/skins/skin-blue.css',
	'public/assets/css/skins/skin-green.css',
	'public/assets/css/skins/skin-red.css',
	'public/assets/css/skins/skin-yellow.css',
	'public/assets/plugins/owlcarousel/assets/owl.carousel.min.css',
	'public/assets/plugins/owlcarousel/assets/owl.theme.default.min.css',
	'public/assets/css/flags/flags.min.css'
], 'public/css/app.css');

/* Combine RTL CSS */
mix.combine([
	'public/css/app.rtl.css',
	'public/assets/bootstrap/css/bootstrap.rtl.css',
	'public/assets/plugins/select2/css/select2.min.css',
	'public/assets/plugins/tag-it/css/jquery.tagit.css',
	'public/assets/plugins/tag-it/css/tagit.ui-zendesk.css',
	'public/assets/css/rtl/style.css',
	'public/assets/css/rtl/style-main.css',
	'public/assets/css/skins/skin-blue.css',
	'public/assets/css/skins/skin-green.css',
	'public/assets/css/skins/skin-red.css',
	'public/assets/css/skins/skin-yellow.css',
	'public/assets/plugins/owlcarousel/assets/owl.carousel.min.css',
	'public/assets/plugins/owlcarousel/assets/owl.theme.default.min.css',
	'public/assets/css/flags/flags.min.css'
], 'public/css/app.rtl.css');

/* Combine JS */
mix.combine([
	'public/assets/js/jquery/1.10.2/jquery-1.10.2.js',
	'public/assets/plugins/jqueryui/1.9.2/jquery-ui.min.js',
	'public/assets/bootstrap/js/bootstrap.min.js',
	'public/assets/js/jquery.matchHeight-min.js',
	'public/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.min.js',
	'public/assets/plugins/select2/js/select2.full.min.js',
	'public/assets/plugins/SocialShare/SocialShare.min.js',
	'public/assets/plugins/owlcarousel/owl.carousel.js',
	'public/assets/js/hideMaxListItem-min.js',
	'public/assets/js/script.js',
	'public/assets/plugins/autocomplete/jquery.mockjax.js',
	'public/assets/plugins/autocomplete/jquery.autocomplete.min.js',
	'public/assets/js/app/autocomplete.cities.js',
	'public/assets/plugins/tag-it/js/tag-it.min.js',
	'public/assets/plugins/bootstrap-waitingfor/bootstrap-waitingfor.min.js',
	
	'public/assets/js/form-validation.js',
	'public/assets/js/app/show.phone.js',
	'public/assets/js/app/make.favorite.js'
], 'public/js/app.js');

/* Minify assets */
// mix.minify('public/css/app.css');
// mix.minify('public/css/app.rtl.css');
// mix.minify('public/js/app.js');

/* Cache busting */
mix.version();
