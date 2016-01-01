var gulp = require('gulp');
var path = require('path');
var less = require('gulp-less');
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');

var input  = {
  'less': '**/*.less',
  'javascript': 'js/*.js',
  'vendorjs': 'js/*.js'
};

var output = {
  'stylesheets': '',
  'javascript': 'js/dist'
};

gulp.task('less', function () {
  return gulp.src('*.less')
    .pipe(less())
    .pipe(minifyCSS())
    .pipe(gulp.dest(output.stylesheets));
});


gulp.task('uglifyjs', function() {
  return gulp.src(input.javascript)
    .pipe(uglify())
    .pipe(gulp.dest(output.javascript));
});

/* Watch these files for changes and run the task on update */
gulp.task('watch', function() {
  gulp.watch(input.less, ['less']);
  gulp.watch(input.javascript, ['uglifyjs']);
});


gulp.task('default', ['watch']);
