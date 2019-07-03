const conf         = require('./conf');
const path         = require('path');
const gulp         = require('gulp');
const sass         = require('gulp-sass');
const plumber      = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');
const error        = require('./error-handler');
const cleanCSS     = require('gulp-clean-css');
const concat       = require('gulp-concat');
const rename       = require('gulp-rename');

gulp.task('sass', function () {

    return gulp.src([
                   path.join(conf.paths.project_root, '/sass/import.scss')
               ])
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(sass())
               .pipe(autoprefixer())
               .pipe(cleanCSS())
               .pipe(rename('style.min.css'))
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/dist/css')));
});
