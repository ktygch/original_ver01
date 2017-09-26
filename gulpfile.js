var gulp = require("gulp");
var compass = require("gulp-compass");
var autoprefixer = require("gulp-autoprefixer");
var frontnote = require("gulp-frontnote");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");

gulp.task("js", function(){
	gulp.src(["js/**/*.js","!js/min/**/*.js"])
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest("./js/min"))
        .pipe(browser.reload({stream:true}));
});

gulp.task("compass", function(){
    gulp.src("sass/**/*.scss")
		.pipe(plumber())
		.pipe(frontnote({
			css: '../css/design.css'
		}))
        .pipe(compass({
            config_file: 'config.rb',
            sass: 'sass',
            css: 'css'
        }));
});

gulp.task("default",/* ['server'],*/ function(){
	gulp.watch(	["js/**/*.js","!js/min/**/.js"], ["js"]);
	//gulp.watch("sass/**/*.scss", ["sass"]);
    gulp.watch("sass/**/*.scss", ["compass"]);
});