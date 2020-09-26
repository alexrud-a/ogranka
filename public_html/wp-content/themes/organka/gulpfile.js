const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sourcemap = require("gulp-sourcemaps");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssmin = require('gulp-cssmin');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const debug = require('gulp-debug');
const gulpif = require('gulp-if');
const argv = require('argv');
const jsmin = require('gulp-jsmin');

// Styles

var src_dir = "source/";
var build_dir = "build/";

const styles = () => {
    return gulp.src(src_dir+"sass/style.scss")
        .pipe(plumber())
        .pipe(sourcemap.init())
        .pipe(sass())
        .pipe(postcss([
            autoprefixer()
        ]))
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemap.write('.'))
        .pipe(gulp.dest(build_dir+"css"));
}

exports.styles = styles;

const scripts = () => {
    return gulp.src(['node_modules/slick-carousel/slick/slick.min.js',
        src_dir+"js/script.js"])
        .pipe(plumber())
        .pipe(sourcemap.init())
        .pipe(debug({title: 'js:'}))
        .pipe(concat('script.min.js'))
        .pipe(debug({title: 'jsconcat:'}))
        .pipe(gulpif(argv.prod, uglify()))
        .pipe(jsmin())
        .pipe(sourcemap.write('.'))
        .pipe(gulp.dest(build_dir+"js"));
}

exports.scripts = scripts;

// Watcher

const watcher = () => {
    gulp.watch(src_dir+"sass/**/*.scss", gulp.series("styles"));
    gulp.watch(src_dir+"js/**/*.js", gulp.series("scripts"));
}

exports.default = gulp.series(
    styles, scripts, watcher
);
