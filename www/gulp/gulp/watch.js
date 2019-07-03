const conf = require('./conf');
const path = require('path');
const gulp = require('gulp');
const watch = require('gulp-watch');

gulp.task('watch', function () {

	gulp.watch(path.join(conf.paths.project_root, '/sass/**/*.scss'), ['sass']);
    gulp.watch(path.join(conf.paths.project_root, '/library/**/*.js'), ['js']);

});
