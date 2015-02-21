var gulp = require('gulp');
var jade = require('gulp-jade');

// Compile JADE templates
gulp.task('jade', function() {
	gulp.src('./jade/**/[^_]*.jade')
		.pipe(jade({
			pretty: true
		}))
		.pipe(gulp.dest('./'))
});

// Watch files for changes
gulp.task('watch', function() {
	gulp.watch('./jade/**/*.jade', ['jade']);
});

// Default task
gulp.task('default', ['jade', 'watch']);