var gulp     = require('gulp'),
	del      = require('del'),
	copy     = require('gulp-copy'),
	jshint   = require('gulp-jshint'),
	uglify   = require('gulp-uglify'),
	sass     = require('gulp-ruby-sass'),
	sq       = require('streamqueue'),
	minify   = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	rename   = require('gulp-rename'),
	concat   = require('gulp-concat');

gulp.task('clean', function() {
	//this task cleans out the dist folder
	//should run this before running on production
	del(['dist/**/*','!dist/sftp-config.json']);
});

gulp.task('copy', function () {
	//copies all the files that i'm not running through any other task
	return gulp.src(['src/*.php','src/library/*.php','src/favicon.ico','src/style.css'])
		.pipe(copy('dist',{'prefix':1}));
});

gulp.task('js', function (){
	//jshint's the code, concats all scripts into one file
	//then runs uglify on it
	return gulp.src(['src/library/js/*.js'])
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('dist/library/js/'))
		.pipe(uglify())
		.pipe(rename({extname: '.min.js'}))
		.pipe(gulp.dest('dist/library/js/'));
});

gulp.task('css', function (){
	//concats normalize.css with a compiled sass style, then minifies
	return sq({objectMode: true},
		gulp.src('bower_components/normalize.css/normalize.css'),
		gulp.src(['src/library/scss/style.scss'])
			.pipe(sass())
		)
		.pipe(concat('style.css'))
		.pipe(gulp.dest('dist/library/css/'))
		.pipe(minify({keepSpecialComments: 0}))
		.pipe(rename({extname: '.min.css'}))
		.pipe(gulp.dest('dist/library/css/'));
});

gulp.task('ie-css', function (){
	//broken, but low priority
	gulp.src('src/library/scss/ie.scss')
		.pipe(sass())
		.pipe(gulp.dest('dist/library/css/'))
		.pipe(minify({keepSpecialComments: 0}))
		.pipe(rename({extname: '.min.css'}))
		.pipe(gulp.dest('dist/library/css/'));
	});

gulp.task('dependencies', function () {
	//moves other dependencies that i'm not doing other things with
	gulp.src('bower_components/flexslider/flexslider.css')
		.pipe(gulp.dest('dist/library/css/'))
		.pipe(minify({keepSpecialComments: 0}))
		.pipe(rename({extname: '.min.css'}))
		.pipe(gulp.dest('dist/library/css/'));
	gulp.src([
			'bower_components/flexslider/jquery.flexslider.js',
			'bower_components/stickem/jquery.stickem.js',
			'bower_components/widgets/pinit.js',
			'bower_components/widgets/pinit_main.js'
		])
		//.pipe(jshint())
		//.pipe(jshint.reporter('default'))
		.pipe(gulp.dest('dist/library/js/'))
		.pipe(uglify())
		.pipe(rename({extname: '.min.js'}))
		.pipe(gulp.dest('dist/library/js/'));
});

gulp.task('imagemin', function (){
	//minifies all images found in the template
	//this does not include images that were uploaded via wordpress!!!
	gulp.src('src/library/images/*')
		.pipe(imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true
		}))
		.pipe(gulp.dest('dist/library/images/'));
	gulp.src(['src/favicon.png','src/screenshot.png'])
		.pipe(imagemin())
		.pipe(gulp.dest('dist/'));
});

//this is the default task runner
gulp.task('default', ['css','imagemin','dependencies','copy','js']);

gulp.task('hintGulp', function (){
	//this is to hint the gulpfile to check for errors
	gulp.src('gulpfile.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'));
});