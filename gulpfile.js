const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// Compile .scss -> .css
function style() {
    return gulp.src('./src/scss/*.scss')
        .pipe(sass().on('error', sass.logError()))
        .pipe(gulp.dest('./dist/style.css'))
        .pipe(browserSync.stream());
}

// Watches for changes and update things automatically
function watch() {
    browserSync.init({
        server: {
            baseDir: './view/'
        }
    });

    // Watching files
    gulp.watch('./src/scss/*.scss', style);
    gulp.watch('./src/js/*.js').on('change', browserSync.reload);
    gulp.watch('./view/*.php').on('change', browserSync.reload);
}

exports.style = style;
exports.browserSync = watch;
