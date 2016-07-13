var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var frontnote = require("gulp-frontnote");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");
//var browser = require("browser-sync");

/*gulp.task("server", function(){
    browser({
        server: {
            baseDir: "./"
        }
    });
});*/

gulp.task("js", function(){
	gulp.src(["js/**/*.js","!js/min/**/*.js"])
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest("./js/min"))
        .pipe(browser.reload({stream:true}));
});

gulp.task("sass", function(){
	gulp.src("sass/**/*.scss")
		.pipe(plumber())
		.pipe(frontnote({
			css: '../css/design.css'
		}))
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(gulp.dest("./css"))
        .pipe(browser.reload({stream:true}));
});

gulp.task("default",/* ['server'],*/ function(){
	gulp.watch(	["js/**/*.js","!js/min/**/.js"], ["js"]);
	gulp.watch("sass/**/*.scss", ["sass"]);
});