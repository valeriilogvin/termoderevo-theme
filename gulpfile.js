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

// пути к файлам
let path = {

    build: {  // куда будет складывать готовые файлы после зборки
        css: "./css",
        js: "./js",
    },
    src: {
        css: "scss/*.scss",
        cssLibs: "scss/libs/**/*.css",
        jsLibs: "js/libs/**/*.js",
    },
    watch: {  //  пути к файлам, за которыми будем следить
        html: "./**/*.html",
        php: "./**/*.php",
        css: "scss/**/*.scss",
        cssLibs: "scss/libs/**/*.css",
        js: "js/*.js",
        jsLibs: "js/libs/**/*.js",
        fonts: "fonts/**/*.woff"
    }
};

// сборка css
gulp.task("css:build", function() {
    return gulp.src(path.src.css)
        .pipe(sass().on('error', sass.logError))
        .pipe(preFixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

// сборка js-библиотек
gulp.task("js.min", function() {
    return gulp.src(path.src.jsLibs)
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest(path.build.js)) // Выгружаем в папку build/js
});

gulp.task("css.min", function() {
    return gulp.src(path.src.cssLibs)
        .pipe(cssNano()) // Сжимаем
        .pipe(concat('libs.min.css')) // Собираем их в кучу в новом файле libs.min.css
        .pipe(gulp.dest(path.build.css)) // Выгружаем в папку build/css
        // .pipe(reload({stream: true})); // Обновляем css на странице при изменении
});

// таск для сборки
gulp.task("build",
    gulp.parallel(
        // "html:build",
        "css:build",
        // "css.min",
        // "js:build",
        // "fonts:build",
        // "cssLibs:build",
        // "jsLibs:build"
    )
);

// Static server
gulp.task('webserver', function() {
    browserSync.init({ // Выполняем browserSync
        proxy: 'local-koreauto4u.com.ua',
        notify: false // Отключаем уведомления
    })
});

// следим за изменениями
gulp.task('watch' , function () {
    gulp.watch([path.watch.css], { usePolling: true }, gulp.parallel('css:build'));
    gulp.watch([path.watch.cssLibs], { usePolling: true }, gulp.parallel('css.min'));
    // gulp.watch([path.watch.php], { usePolling: true }).on('change', reload);
    // gulp.watch([path.watch.fonts], { usePolling: true }, gulp.parallel('fonts:build'));
    // gulp.watch([path.watch.js], { usePolling: true }).on('change', reload);
    // gulp.watch([path.watch.jsLibs], { usePolling: true }, gulp.parallel('jsLibs:build'));
    // gulp.watch([path.watch.cssLibs], { usePolling: true }, gulp.parallel('cssLibs:build'));
    // gulp.watch('src/img/**/*', { usePolling: true }, gulp.parallel('img'));
});



// дефолтный таск
// gulp.task('default', gulp.parallel("clean","img","build", "css.min", "js.min", "webserver","watch"));
gulp.task('default', gulp.parallel("build", /*"webserver", */"watch"));