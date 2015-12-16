var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');
var watch = require('gulp-watch');

var input  = {
  'less': '**/*.less',
  'javascript': 'js/*.js',
  'vendorjs': 'js/*.js'
};

var output = {
  'stylesheets': '',
  'javascript': 'js'
};

gulp.task('less', function () {
  return gulp.src('*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'theme_less', 'includes') ]
    }))
    .pipe(gulp.dest(''));
});


/* Watch these files for changes and run the task on update */
gulp.task('watch', function() {
  gulp.watch(input.less, ['less']);
});


gulp.task('default', ['watch']);
