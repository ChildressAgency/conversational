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
    //index:'demo-home.html'
    //index:'demo-meet-team.html'
    //index:'demo-after-signup.html'
    //index:'demo-testimonials.html'
    //index:'demo-faqs.html'
    //index:'demo-work-at-home.html'
    //index:'demo-small-business.html'
    //index:'demo-medical.html'
    //index:'demo-salon.html'
    //index:'demo-franchise.html'
    //index:'demo-vrplans.html'
    //index:'demo-blog.html'
    //index:'demo-single.html'
    //index:'demo-contact.html'
    //index:'demo-apply-now.html'
    //index:'demo-vr-services.html'
    index:'demo-compare.html'
  });

  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/**/*.scss'], gulp.series('sass'));
  gulp.watch("*.html").on('change', browserSync.reload);
  gulp.watch('js/src/*.js', gulp.series('js'));
}));

gulp.task('default', gulp.parallel(['js', 'serve']));