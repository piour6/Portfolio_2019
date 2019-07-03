const conf           = require('./conf');
const error          = require('./error-handler');
const path           = require('path');
const gulp           = require('gulp');
const rename         = require('gulp-rename');
const uglify         = require('gulp-uglify');
const cleanCSS       = require('gulp-clean-css');
const mainBowerFiles = require('main-bower-files');
const plumber        = require('gulp-plumber');
const concat         = require('gulp-concat');

gulp.task('bower-css', function () {
    return gulp.src(mainBowerFiles('**/*.css', {debugging: true}))
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(concat('plugin.css'))
               .pipe(rename({suffix: '.min'}))
               .pipe(cleanCSS())
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/css')));
});

gulp.task('bower-js', function () {

    return gulp.src(mainBowerFiles('**/*.js', {debugging: true}))
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(concat('plugin.js'))
               .pipe(rename({suffix: '.min'}))
               .pipe(uglify())
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/library')));
});
