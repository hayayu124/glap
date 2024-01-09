"use strict";

// Load plugins
const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cssnano = require("cssnano");
const gulp = require("gulp");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const gulpDartSass = require("gulp-dart-sass");

// BrowserSync
function browserSync(done) {
  browsersync.init({
    proxy: "http://localhost:8888/glapentertainment/",
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}

// CSS task
function css() {
  return gulp
    .src("./sass/**/*.scss")
    .pipe(gulpDartSass.sync().on("error", gulpDartSass.logError))
    .pipe(gulpDartSass.sync({ outputStyle: "expanded" }))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest("./stylesheets/"))
    .pipe(browsersync.stream())
    .pipe(rename({ suffix: ".min" }))
    .pipe(postcss([cssnano()]))
    .pipe(gulp.dest("./cssmin/"));
}

// Watch files
function watchFiles() {
  gulp.watch("./sass/**/*", css);
  gulp.watch("./**/*.php", browserSyncReload);
  gulp.watch("./js/*", browserSyncReload);
}

const watch = gulp.parallel(watchFiles, browserSync);

exports.css = css;
exports.default = watch;
