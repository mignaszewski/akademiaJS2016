

// gulp
var gulp = require('gulp');

// plugins
var connect = require('gulp-connect');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var clean = require('gulp-clean');
var runSequence = require('run-sequence');
var imageop = require('gulp-image-optimization');

// tasks
gulp.task('lint', function() { //checks if js files are all correct
  gulp.src(['./Shop/**/*.js', '!./Shop/bower_components/**']) 
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(jshint.reporter('fail'));
});
gulp.task('clean', function () {  //removes everything from /dist folder
  return gulp.src('./dist/*', {read: false})
    .pipe(clean());
});
gulp.task('minify-css', function() {  //minifies css files
  var opts = {comments:true,spare:true};
  gulp.src(['./Shop/**/*.css', '!./Shop/bower_components/**'])
    .pipe(minifyCSS(opts))
    .pipe(gulp.dest('./dist/'))
});
gulp.task('minify-js', function() {   //minifies js giles 
  gulp.src(['./Shop/**/*.js', '!./Shop/bower_components/**'])
    .pipe(uglify({
      // inSourceMap:
      // outSourceMap: "app.js.map"
    }))
    .pipe(gulp.dest('./dist/'))
});
gulp.task('copy', function(){

  gulp.src("*.json")
      .pipe(gulp.dest("./dist"));
});
gulp.task('copy-bower-components', function () {  //copies front end depedencies
  gulp.src('./Shop/bower_components/**')
    .pipe(gulp.dest('dist/bower_components/'));
});
gulp.task('copy-html-files', function () {   // copies html files
  gulp.src('./Shop/**/*.html')
    .pipe(gulp.dest('dist/'));
});
gulp.task('connect', function () {  //conects to localhost on port 8888
  connect.server({
    root: 'Shop/',
    port: 8888
  });
});
gulp.task('connectDist', function () {  //connects to localhost on port 9999
  connect.server({
    root: 'dist/',
    port: 9999
  });
});

gulp.task('images', function(cb) {   //compresses images
    gulp.src(['Shop/**/*.png','Shop/**/*.jpg','Shop/**/*.gif','Shop/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('dist/')).on('end', cb).on('error', cb);
});


// default task
gulp.task('default',
  ['lint', 'connect']    //cmd: gulp, connect on localhost
);
gulp.task('build', function() { //cmd: gulp build, creates a final build meant to be pushed to server
  runSequence(
    ['clean'],
    ['clean' , 'lint', 'minify-css', 'minify-js', 'copy-html-files','copy' , 'copy-bower-components', 'connectDist', 'images']
  );
});
