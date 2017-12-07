const gulp = require('gulp');
const sass = require('gulp-sass');
const runSequence = require('run-sequence');
const concatCss = require('gulp-concat-css');

gulp.task('copyAllFiles', function() {
	//PHP files
	gulp.src('src/*.php')
	.pipe(gulp.dest('dist'));
	//inc files
	gulp.src('src/inc/*.php')
	.pipe(gulp.dest('dist/inc'));
	//functions
	gulp.src('src/inc/functions/*.php')
	.pipe(gulp.dest('dist/inc/functions'));
	//childtheme screenshot
	gulp.src('src/screenshot.png')
	.pipe(gulp.dest('dist'));
});

gulp.task('sass2css', function() {
	return gulp.src('src/sass/**/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('src'))
});

gulp.task('processCSS', function() {
	return gulp.src('src/**/*.scss')
	.pipe(concatCss('style.css'))
	.pipe(gulp.dest('dist'));
})

gulp.task('build', function(callback) {
    runSequence('sass2css', ['copyAllFiles', 'processCSS'], callback);
});