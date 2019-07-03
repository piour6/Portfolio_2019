'use strict';

/**
 * Some Gulp tasks like gulp-autoprefixer require ES6-style Promises
 */

require('es6-promise').polyfill();

var gulp   = require('gulp');
var wrench = require('wrench');

/**
 *  This will load all js or coffee files in the gulp directory
 *  in order to load all gulp tasks
 */

wrench.readdirSyncRecursive('./gulp').filter(function(file) {
	return (/\.(js|coffee)$/i).test(file);
}).map(function(file) {
	require('./gulp/' + file);
});