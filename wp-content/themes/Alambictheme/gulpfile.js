// Requis
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('src/scss/app.scss')
    .pipe(sass())
    .pipe(gulp.dest('dist/styles'));
});

gulp.task('run', function(){
   gulp.watch('src/**/*.scss', gulp.series('sass'));
});
