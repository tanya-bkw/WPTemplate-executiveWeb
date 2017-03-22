var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

//    browserSync.init({
//        server: "http://localhost/CodersLab/LOD_FRO_S_02/Wordpress/"
//    });

    gulp.watch("sass/*.scss", ['sass']);
    gulp.watch("*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("sass/*.scss")
        .pipe(sass())
        .pipe(sourcemaps.init())
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
