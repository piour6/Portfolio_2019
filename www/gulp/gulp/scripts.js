const conf    = require('./conf');
const path    = require('path');
const gulp    = require('gulp');
const rename  = require('gulp-rename');
const concat  = require('gulp-concat');
const jshint  = require('gulp-jshint');
const uglify  = require('gulp-uglify');
const plumber = require('gulp-plumber');
const error   = require('./error-handler');
const babel   = require('gulp-babel');

gulp.task('js', function () {
    return gulp.src([
                   path.join(conf.paths.project_root, '/library/**/*.js')
               ])
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(concat('app.js'))
               .pipe(rename({suffix: '.min'}))
               .pipe(uglify({
                   mangle: true,
                   compress: true
               }))
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/library')));
});
