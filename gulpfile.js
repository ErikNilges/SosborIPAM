var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        //server: "./src"
        proxy: "localhost"
    });

    gulp.watch("src/scss/*.scss", ['sass']);
    gulp.watch("src/*.*").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("src/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
