let gulp         = require("gulp"),
    sass         = require("gulp-sass"),
    watch        = require("gulp-watch"),
    rigger       = require("gulp-rigger"),
    preFixer     = require("gulp-autoprefixer"),
    browserSync  = require('browser-sync'),
    del          = require('del'),
    cssnano      = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglifyjs'),
    imagemin     = require('gulp-imagemin'),
    pngquant     = require('imagemin-pngquant'),
    cache        = require('gulp-cache'),
    reload       = browserSync.reload;


let path = {

    build: {
        css: "./css",
        js: "./js",
    },
    src: {
        css: "./scss/main.scss",
        cssLibs: "./libs/css/**/*.css",
        jsLibs: "./libs/js/**/*.js",
    },
    watch: {
        css: "./scss/**/*.scss",
        cssLibs: "./libs/css/**/*.css",
        jsLibs: "./libs/js/**/*.js",
    }
};

gulp.task("css:build", function() {
    return gulp.src(path.src.css)
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(preFixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

gulp.task("js-libs:min", function() {
    return gulp.src(path.src.jsLibs)
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest(path.build.js)) // Выгружаем в папку build/js
});

gulp.task("css-libs:min", function() {
    return gulp.src(path.src.cssLibs)
        .pipe(cssnano()) // Сжимаем
        .pipe(concat('libs.min.css')) // Собираем их в кучу в новом файле libs.min.css
        .pipe(gulp.dest(path.build.css)) // Выгружаем в папку build/css
        .pipe(reload({stream: true})); // Обновляем css на странице при изменении
});

gulp.task("build",
    gulp.parallel(
        "css:build",
        "css-libs:min",
        "js-libs:min",
    )
);

// следим за изменениями
gulp.task('watch' , function () {
    gulp.watch([path.watch.css], { usePolling: true }, gulp.parallel('css:build'));
    gulp.watch([path.watch.cssLibs], { usePolling: true }, gulp.parallel('css-libs:min'));
    gulp.watch([path.watch.jsLibs], { usePolling: true }, gulp.parallel('js-libs:min'));
    // gulp.watch([path.watch.js], { usePolling: true }).on('change', reload);
});



// дефолтный таск
// gulp.task('default', gulp.parallel("clean","img","build", "css.min", "js.min", "webserver","watch"));
gulp.task('default', gulp.parallel("build", "watch"));