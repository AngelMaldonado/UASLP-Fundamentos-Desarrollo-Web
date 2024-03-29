/******************************************
 *  Author : Angel Maldonado
 *  Created On : Mon Jul 11 2022
 *  File : gulpfile.js
 *******************************************/
const {src, dest, watch, parallel} = require("gulp");

// CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const autoprefixer = require("autoprefixer"); // funcionamiento en navegadores especificos
const cssnano = require("cssnano"); // comprimir codigo css
const postcss = require("gulp-postcss"); // transformaciones utilizando los 2 anteriores
const sourcemaps = require("gulp-sourcemaps");

// Javascript
const terser = require("gulp-terser-js");

// Imagenes
const imagemin = require("gulp-imagemin");
const cache = require("gulp-cache");
const avif = require("gulp-avif");
const webp = require("gulp-webp");

function css(done) {

    // Identificar el archivo de SASS
    src("src/scss/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(plumber())
        // Compilarlo
        .pipe(sass(null, null))
        .pipe(postcss([autoprefixer(), cssnano()]))
        // Almacenarlos
        .pipe(sourcemaps.write("."))
        .pipe(dest("build/css"));

    done();
}

function imagenes(done) {
    const opciones = {
        optimizationLevel: 3
    };

    src("src/img/**/*.{png,jpg}")
        .pipe(cache(imagemin(opciones)))
        .pipe(dest("build/img"));

    done();
}

function javascript(done) {
    src("src/js/**/*.js")
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write("."))
        .pipe(dest("build/js"));

    done();
}

function versionWebp(done) {
    const opciones = {
        quality: 50
    };

    src("src/img/**/*.{png,jpg}")
        .pipe(webp(opciones))
        .pipe(dest("build/img"));

    done();
}

function versionAvif(done) {
    const opciones = {
        quality: 50
    };

    src("src/img/**/*.{png,jpg}")
        .pipe(avif(opciones))
        .pipe(dest("build/img"));

    done();
}

function dev(done) {
    watch("src/scss/**/*.scss", css);
    watch("src/js/**/*.js", javascript);
    done();
}

exports.css = css;
exports.js = javascript;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.imagenes = imagenes;
exports.dev = parallel(imagenes, versionWebp, versionAvif, javascript, dev);
