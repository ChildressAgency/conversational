var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');

// Compile sass into CSS, minify & auto-inject into browsers
gulp.task('sass', function () {
  return gulp.src('scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cssnano())
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream())
});

//concat js, uglify and inject into browser
gulp.task('js', function () {
  return gulp.src('js/src/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('custom-scripts.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest("./js"))
    .pipe(browserSync.stream())
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function () {

  browserSync.init({
    server: "./",
    index:'demo-home.html'
  });

  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/**/*.scss'], gulp.series('sass'));
  gulp.watch("*.html").on('change', browserSync.reload);
  gulp.watch('js/src/*.js', gulp.series('js'));
}));

gulp.task('default', gulp.parallel(['js', 'serve']));