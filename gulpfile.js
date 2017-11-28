var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-ruby-sass'),
    livereload = require('gulp-livereload'),
    imagemin = require('gulp-imagemin'),
    prefix = require('gulp-autoprefixer')
;


/*
|--------------------------------------------------------------------------
| CUSTOM TASKS
|--------------------------------------------------------------------------
|
*/


//Image Task
gulp.task('image',function(){
     gulp.src('public/gfx/**/*')
         .pipe(imagemin())
         .pipe(gulp.dest('public/gfx'))


});

//Script task
gulp.task('scripts', function () {
    gulp.src('public/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/build/js'))
});

//Styles
gulp.task('styles', function () {

    return sass('public/bootstrap4/theme/sass/*.scss')
        .pipe(prefix('last 2 versions')) //add browser support
        .pipe(gulp.dest('public/build/css/'))
        .pipe(livereload());
});

/*
|--------------------------------------------------------------------------
| MAIN TASKS
|--------------------------------------------------------------------------
|
*/

//DEFAULT GULP TASK
gulp.task('default', ['scripts', 'styles', 'watch', 'image']);


//Watch task
//Run a task every single time a js is saved
gulp.task('watch', function () {

    /*
    *Add this to your html
    * <!--Live reload-->
    <script src="http://localhost:35729/livereload.js?snipver=1"></script>﻿
    *
    * */

   livereload.listen();


    gulp.watch('public/js/*.js', ['scripts'])//files that we are going to watch
    gulp.watch('public/bootstrap4/theme/sass/**/*.scss', ['styles'])//files that we are going to watch
});
