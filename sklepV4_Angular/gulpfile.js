var angularFilesort = require('gulp-angular-filesort'),
    inject = require('gulp-inject');

gulp.src('./src/app/index.html')
    .pipe(inject(
        gulp.src(['./src/app/**/*.js']).pipe(angularFilesort())
    ))
    .pipe(gulp.dest('./build'));