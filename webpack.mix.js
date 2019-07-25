/*
 * GenerateWP uses Laravel Mix
 *
 * Check the documentation at
 * https://laravel.com/docs/5.6/mix
 */

let mix = require( 'laravel-mix' );

mix.browserSync({
	proxy: 'http://simplepressdev.co.za',
	files: [
		'**/*.php',
		'**/*.css',
		'**/*.js'
	],
	injectChanges: true,
	open: false
});

// Compile assets
mix.sass( 'scss/style.scss', 'style.css' );

// Add versioning to assets in production environment
if ( mix.inProduction() ) {
	mix.version();
}
