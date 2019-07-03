const conf    = require('./conf');
const path    = require('path');
const gulp    = require('gulp');
const plumber = require('gulp-plumber');
const error   = require('./error-handler');

const imagemin        = require('gulp-imagemin');
const imageminGuetzli = require('imagemin-guetzli');

gulp.task('images', function () {
    return gulp.src(path.join(conf.paths.project_root, '/graphics/*'))
               .pipe(plumber({errorHandler: error.onError}))
               .pipe(imagemin([imageminGuetzli()]))
               .pipe(gulp.dest(path.join(conf.paths.project_root, '/graphics')));
});


