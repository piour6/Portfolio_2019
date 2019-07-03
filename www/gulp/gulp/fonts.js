const conf    = require('./conf');
const path    = require('path');
const gulp    = require('gulp');
const sass    = require('gulp-sass');
const plumber = require('gulp-plumber');
const error   = require('./error-handler');
const flatten = require('gulp-flatten');

gulp.task('bower-fonts', function () {
    return gulp.src('./bower_components/**/*.{eot,svg,ttf,woff,woff2}')
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(flatten())
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/fonts')))
               .pipe(plumber({errorHandler: error.onError}));
});

gulp.task('fonts', function () {
    return gulp.src([path.join(conf.paths.project_root, '/fonts/**/*.*')])
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/fonts')));
});