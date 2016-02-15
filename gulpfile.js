// gulp
var gulp = require('gulp');

// plugins
var connect = require('gulp-connect');
// var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var clean = require('gulp-clean');
var browserify = require('gulp-browserify');
var concat = require('gulp-concat');
var runSequence = require('run-sequence');
var less = require('gulp-less');
var browserSync = require('browser-sync').create();
var bg = require("gulp-bg");

var rename = require('gulp-rename');
var loopbackAngular = require('gulp-loopback-sdk-angular');

//#############################################################################
var loopback = require('loopback');
var boot = require('loopback-boot');

gulp.task("api", bg("node", "."));

gulp.task('slc-loopback', function () {
    return gulp.src('./server/server.js')
    .pipe(loopbackAngular())
    .pipe(rename('lb-services.js'))
    .pipe(gulp.dest('./app/client/js'));
});

// Default task !
gulp.task('default', function() {
  runSequence(['clean'], ['serve', 'slc-loopback'], ['api'], function() {
  });
});

// Build task
gulp.task('build', ['clean'], function() {
  setTimeout(function() {
    runSequence(['clean'], ['copy-bower-components', 'copy-html-files', 'minify-css', 'browserifyDist', 'connectDist'], function () {

    });
  },2000);
});

// clean task
gulp.task('clean', function() {
    gulp.src('./dist/*')
      .pipe(clean({force: true}))
    gulp.src('./app/js/bundled.js')
      .pipe(clean({force: true}))
});

// create a task that ensures the `js` task is complete before reloading browsers, delay by 1sec
gulp.task('js-watch', ['browserify'], function() {
  setTimeout(browserSync.reload, 1000);
});

gulp.task('html-watch', function() {
  setTimeout(browserSync.reload, 1000);
});


// Refreshing page after change, starting browser for dev
gulp.task('serve', ['browserify', 'compile-less'], function() {
  browserSync.init({
    server: "./app"
  });
  gulp.watch(['./app/js/**/*.js', '!./app/bower_components/**', '!./app/js/bundled.js'], ['js-watch']);
  gulp.watch('./app/less/**/*.less' , ['compile-less', browserSync.reload]);
  gulp.watch('./app/**/*.html' , ['html-watch']);
});

/* Task to compile less */
gulp.task('compile-less', function() {
  gulp.src('./app/less/**/*.less')
    .pipe(less())
    .pipe(gulp.dest('./app/css/'));
});


// gulp.task('lint', function() {
//   gulp.src(['./app/**/*.js', '!./app/bower_components/**', '!./app/js/bundled.js'])
//     .pipe(jshint())
//     .pipe(jshint.reporter('default'))
//     .pipe(jshint.reporter('fail'));
// });

gulp.task('minify-css', function() {
  var opts = {comments:true,spare:true};
  gulp.src(['./app/**/*.css', '!./app/bower_components/**'])
    .pipe(minifyCSS(opts))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('minify-js', function() {
  gulp.src(['./app/**/*.js', '!./app/bower_components/**'])
    .pipe(uglify({
      // inSourceMap:
      // outSourceMap: "app.js.map"
    }))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('copy-bower-components', function () {
  gulp.src('./app/bower_components/**')
    .pipe(gulp.dest('dist/bower_components'));
});

gulp.task('copy-html-files', function () {
  gulp.src('./app/**/*.html')
    .pipe(gulp.dest('dist/'));
});


gulp.task('browserify', function() {
  gulp.src(['app/js/main.js'])
  .pipe(browserify({
    insertGlobals: true,
    debug: true
  }))
  .pipe(concat('bundled.js'))
  .pipe(gulp.dest('./app/js'))
});

gulp.task('browserifyDist', function() {
  gulp.src(['app/js/main.js'])
  .pipe(browserify({
    insertGlobals: true,
    debug: true
  }))
  .pipe(concat('bundled.js'))
  .pipe(gulp.dest('./dist/js'))
});

gulp.task('connectDist', function () {
  connect.server({
    root: 'dist/',
    port: 9999
  });
});
