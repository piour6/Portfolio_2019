const gulp    = require('gulp');
const plumber = require('gulp-plumber');
const gutil   = require('gulp-util');

exports.onError = function(err) {
	console.log('An error occurred:', gutil.colors.magenta(err.message));
	gutil.beep();
	this.emit('end');
};