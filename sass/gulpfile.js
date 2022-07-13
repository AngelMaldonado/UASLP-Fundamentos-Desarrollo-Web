/******************************************
 *  Author : Angel Maldonado
 *  Created On : Mon Jul 11 2022
 *  File : gulpfile.js
 *******************************************/
const {src, dest, watch} = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

function css(done) {

    // Identificar el archivo de SASS
    src("src/scss/**/*.scss")
        .pipe(plumber())
        // Compilarlo
        .pipe(sass(null, null))
        // Almacenarlos
        .pipe(dest("build/css"));

    done();
}

function dev(done) {
    watch("src/scss/**/*.scss", css);
    done();
}

exports.css = css;
exports.dev = dev;
