//this is from https://coursetro.com/posts/code/130/Learn-Bootstrap-4-Final-in-2018-with-our-Free-Crash-Course
//another example with gulp: https://github.com/bassjobsen/jbst-4-sass

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function(){
  return gulp.src('scss/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

// Move the javascript files into our /src/js folder
gulp.task('js', function () {
  return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
    .pipe(gulp.dest("js"))
    .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function () {

  browserSync.init({
    server: "./",
    index: "demo-home.html"
  });

  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/**/*.scss'], gulp.series('sass'));
  gulp.watch("*.html").on('change', browserSync.reload);
  gulp.watch('js/*.js').on('change', browserSync.reload);
}));

gulp.task('default', gulp.parallel(['js','serve']));