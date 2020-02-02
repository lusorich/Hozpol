
"use strict";

var gulp = require("gulp");
var plumber = require("gulp-plumber");
var sourcemap = require("gulp-sourcemaps");
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var server = require("browser-sync").create();
var imagemin = require("gulp-imagemin");
var svgstore = require("gulp-svgstore");
var rename = require("gulp-rename");
var posthtml = require("gulp-posthtml");
var include = require("posthtml-include");
var csso = require("gulp-csso");
var webp = require("gulp-webp");
var del = require("del");

gulp.task("css", function () {
  return gulp.src("source/sass/style.scss")
    .pipe(plumber())
    .pipe(sourcemap.init())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(csso())
    .pipe(rename("style.min.css"))
    .pipe(sourcemap.write("."))
    .pipe(gulp.dest("source/css"))
    .pipe(server.stream());
});

gulp.task("server", function () {
  server.init({
    server: "source/",
    notify: false,
    open: true,
    cors: true,
    ui: false
  });

  gulp.watch("source/sass/**/*.{scss,sass}", gulp.series("css"));
  gulp.watch("source/*.html").on("change", server.reload);
});

gulp.task("images", function(){
  return gulp.src("source/img/*.{png,jpg,svg}")
    .pipe(imagemin([
      imagemin.optipng({optimizationLevel: 3}),
      imagemin.jpegtran({progressive: true}),
      imagemin.svgo()
    ]))
    .pipe(gulp.dest("source/img"));
});

gulp.task("webp", function(){
  return gulp.src("source/img/*.{png,jpg}")
    .pipe(webp({quality: 90}))
    .pipe(gulp.dest("source/img"));
});

gulp.task("sprite", function(){
  return gulp.src("source/img/sprite/*.svg")
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(rename("sprite.svg"))
    .pipe(gulp.dest("source/img/sprite"));
});

gulp.task("htmlToPhp", function(){
  return gulp.src("source/*.html")
    .pipe(rename(function (path) {
      path.extname = ".php";
    }))
    .pipe(gulp.dest("source"));
});

gulp.task("htmlToPhpDP", function(){
  return gulp.src("source/doctors_page/*.html")
    .pipe(rename(function (path) {
      path.extname = ".php";
    }))
    .pipe(gulp.dest("source/doctors_page"));
});

gulp.task("htmlToPhpPP", function(){
  return gulp.src("source/price/*.html")
    .pipe(rename(function (path) {
      path.extname = ".php";
    }))
    .pipe(gulp.dest("source/price"));
});

gulp.task("build", gulp.series(
  "htmlToPhp",
  "htmlToPhpDP",
  "htmlToPhpPP",
  "css"
));

gulp.task("start", gulp.series("css", "server"));
