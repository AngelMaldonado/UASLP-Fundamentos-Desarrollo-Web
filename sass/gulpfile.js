/******************************************
 *  Author : Angel Maldonado   
 *  Created On : Mon Jul 11 2022
 *  File : gulpfile.js
 *******************************************/
const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function css(done) {

    // Identificar el archivo de SASS
    src("src/scss/app.scss")
        // Compilarlo
        .pipe(sass())
        // Almacenarlos
        .pipe(dest("build/css"));

    done();
}

function dev(done) {
    watch("src/scss/app.scss", css);
    done();
}

exports.css = css;
exports.dev = dev;
