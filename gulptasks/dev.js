/* -------------------------------------------------------------------------------------------------
Build Configuration
Contributors: fcojgodoy
-------------------------------------------------------------------------------------------------- */

/* -------------------------------------------------------------------------------------------------
Requires
-------------------------------------------------------------------------------------------------- */
const gulp = require ( 'gulp' ),
    del = require( 'del' ),
    autoprefixer = require ( 'autoprefixer' ),
    browserSync = require ( 'browser-sync' ).create(),
    concat = require ( 'gulp-concat' ),
    rename = require ( 'gulp-rename' ),
    uglify = require ( 'gulp-uglify' ),
    jshint = require ( 'gulp-jshint' ),
    postcss = require ( 'gulp-postcss' ),
    sass = require ( 'gulp-sass' ),
    sourcemaps = require ( 'gulp-sourcemaps' );




/* -------------------------------------------------------------------------------------------------
Clean asset dir
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'clean-assets', function () {
    return del( [ ASSETS_DIR.root ] );
});



/* -------------------------------------------------------------------------------------------------
Copy vendors assets
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'vendors', function () {
    return gulp.src ( [
        VENDORS.jquery_smooth_scroll,
        VENDORS.pushy
    ] )
    .pipe ( gulp.dest ( SOURCE_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
script
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts', function () {
    return gulp.src ( [
        SOURCE.scripts,
        '!' + SOURCE_DIR.scripts + 'customizer.js',
    ] )
    .pipe ( jshint () )
    .pipe ( jshint.reporter ( 'default' ) )
    .pipe ( concat ( 'main.js') )
    .pipe ( rename ( { suffix: '.min'} ) )
    .pipe ( uglify() )
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
script copy
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts-copy', function () {
    return gulp.src ( [
        SOURCE_DIR.scripts + 'customizer.js',
    ] )
    .pipe ( jshint () )
    .pipe ( jshint.reporter ( 'default' ) )
    .pipe ( uglify() )
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
styles TASK: Sass - Sourcemaps - Autoprefixer
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'styles', function () {
    return gulp.src ( SOURCE.styles )
    .pipe ( sourcemaps.init () )
    .pipe ( sass ().on ( 'error', sass.logError) )
    .pipe ( postcss ( [
        autoprefixer ( 'last 2 versions', '>1%' )
    ]))
    .pipe ( sourcemaps.write ( './maps' ) )
    .pipe ( gulp.dest ( ASSETS_DIR.styles ) );
});


/* -------------------------------------------------------------------------------------------------
styles-prod TASK: Sass compressed
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'styles-prod', function () {
    return gulp.src ( SOURCE.styles )
    .pipe ( sass ( {
        outputStyle: 'compressed'
    }).on ( 'error', sass.logError) )
    .pipe ( postcss ( [
        autoprefixer ( 'last 2 versions', '>1%' )
    ]))
    .pipe ( gulp.dest ( ASSETS_DIR.styles ) );
});


/* -------------------------------------------------------------------------------------------------
Image optimization
-------------------------------------------------------------------------------------------------- */
// gulp.task ( 'images', function () {
//     return gulp.src ( img + 'RAW/**/*.{jpg, JPG, jpeg, JPEG, png}' )
//     .pipe ( newer ( img ) )
//     .pipe ( image () )
//     .pipe ( gulp.dest ( img ) );
// });


/* -------------------------------------------------------------------------------------------------
Fonts
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'fonts', function () {
    return gulp.src ( SOURCE.fonts )
    .pipe ( gulp.dest ( ASSETS_DIR.fonts ) );
});


/* -------------------------------------------------------------------------------------------------
Watcher
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'watch', function () {
    browserSync.init ( {
        proxy: GENERAL.proxy,
        port: GENERAL.port
    });
    gulp.watch ( SOURCE.styles, gulp.parallel( 'styles' ) );
    gulp.watch ( SOURCE.scripts,  gulp.parallel( 'scripts' ) );
    gulp.watch ( SOURCE.fonts,  gulp.parallel( 'fonts' ) );
    gulp.watch ( [ ASSETS.styles, ASSETS.scripts, SOURCE.php ] ).on( 'change', browserSync.reload );
});
