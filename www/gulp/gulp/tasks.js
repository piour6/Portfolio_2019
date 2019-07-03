const gulp = require('gulp');

// /gulp
gulp.task('default', ['sass', 'js', 'bower-css', 'bower-js', 'fonts']);
// /gulp watch
gulp.task('watch', ['default', 'watch']);
