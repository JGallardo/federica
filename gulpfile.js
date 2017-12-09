const gulp = require('gulp');
const sass = require('gulp-sass');
const runSequence = require('run-sequence');
const concatCss = require('gulp-concat-css');

gulp.task('copyAllFiles', function() {
	//PHP files
	gulp.src('src/*.php')
	.pipe(gulp.dest('dist'));
	//template-parts files
	gulp.src('src/template-parts/*.php')
	.pipe(gulp.dest('dist/template-parts'));
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