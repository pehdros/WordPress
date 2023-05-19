const { src, dest, series, watch } = require('gulp');
const autoPrefixer = require('gulp-autoprefixer');

const scss = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const GulpCleanCss = require('gulp-clean-css');
const cssMinify = require('gulp-clean-css');

// STYLES - main.css
function styles() {
    return src('./assets/src/styles/main.scss')
        .pipe(scss())
        .pipe(autoPrefixer('last 2 version'))
        .pipe(cssMinify())
        .pipe(dest('./assets/dist/styles/'))
}

//STYLES - bootstrap
function stylesBootstrap() {
    return src('./node_modules/bootstrap/scss/bootstrap.scss')
        .pipe(scss())
        .pipe(autoPrefixer('last 2 version'))
        .pipe(cssMinify())
        .pipe(dest('./assets/dist/styles/'))
}

// SCRIPTS - jsminify
const jsMinify = require('gulp-terser')

function scripts_js_M() {
    return src('./assets/src/scripts/**/*.js')
        .pipe(jsMinify())
        .pipe(dest('./assets/dist/scripts/'))
}

//SCRIPTS - bootstrap
function scriptsBootstrap() {
    return src('./node_modules/bootstrap/dist/js/*.js')
        .pipe(jsMinify())
        .pipe(dest('./assets/dist/scripts/'))
}


// WATCH
function watchTask() {
    watch(
        ['./assets/src/styles/**/*.scss', './assets/src/scripts/**/*.js'],
        series(styles, stylesBootstrap, scripts_js_M, scriptsBootstrap)
    )
}

exports.default = series(styles,stylesBootstrap, scripts_js_M, scriptsBootstrap, watchTask);

