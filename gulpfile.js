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
	newer    = require('gulp-newer'),
	rsync    = require('rsyncwrapper').rsync,
	uncss    = require('gulp-uncss'),
	concat   = require('gulp-concat');

gulp.task('clean', function() {
	//this task cleans out the dist folder
	//should run this before running on production
	del(['dist/**/*','!dist/sftp-config.json']);
});

gulp.task('copy', function () {
	//copies all the files that i'm not running through any other task
	return gulp.src(['src/*.php','src/library/*.php','src/favicon.ico','src/style.css'])
		.pipe(newer('dist/'))
		.pipe(copy('dist',{'prefix':1}));
});

gulp.task('js', function (){
	//jshint's the code, concats all scripts into one file
	//then runs uglify on it
	return gulp.src(['src/library/js/*.js'])
		.pipe(newer('dist/library/js/scripts.min.js'))
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
		//.pipe(newer('dist/library/css'))
		.pipe(gulp.dest('dist/library/css/'))
		.pipe(minify({keepSpecialComments: 0}))
		.pipe(rename({extname: '.min.css'}))
		.pipe(gulp.dest('dist/library/css/'));
});

gulp.task('uncss', function (){
	return gulp.src('src/library/scss/style.scss')
		.pipe(sass())
		.pipe(uncss({
			html: require('./sitemap.json')
		}))
		.pipe(gulp.dest('./out'));
});

gulp.task('ie-css', function (){
	//broken, but low priority
	return gulp.src('src/library/scss/ie.scss')
		.pipe(sass())
		.pipe(gulp.dest('dist/library/css/'))
		.pipe(minify({keepSpecialComments: 0}))
		.pipe(rename({extname: '.min.css'}))
		.pipe(gulp.dest('dist/library/css/'));
	});

gulp.task('dependencies', function () {
	//moves other dependencies that i'm not doing other things with
	gulp.src('bower_components/flexslider/flexslider.css')
		.pipe(newer('dist/library/css/'))
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
		.pipe(newer('/dist/library/js'))
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
		.pipe(newer('dist/library/images/'))
		.pipe(imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true
		}))
		.pipe(gulp.dest('dist/library/images/'));
	gulp.src(['src/favicon.png','src/screenshot.png'])
		.pipe(newer('dist/'))
		.pipe(imagemin())
		.pipe(gulp.dest('dist/'));
});

gulp.task('rsync', function (){
	rsync({
		ssh: true,
		src: 'dist/',
		dest: 'kyle@apollo.kmcnally.net:/var/www/beta.constellationco.com/wp-content/themes/constellation-site',
		recursive: true,
		compareMode: 'checksum',
		args: ['-vP']
	}, function(error,stdout,stderr,cmd){
		process.stdout.write(stdout+'\nDone!\n');
	});
});

gulp.task('watch', function(){
	gulp.watch('src/**',['default']);
});

//this is the default task runner
gulp.task('default', ['css','imagemin','dependencies','copy','js'], function(){
	//gulp.start is deprecated and will be removed in gulp v4
	gulp.start('rsync');
});

gulp.task('hintGulp', function (){
	//this is to hint the gulpfile to check for errors
	return gulp.src('gulpfile.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'));
});