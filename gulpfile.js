/* -------------------------------------------------------------------------------------------------
Build Configuration
Contributors: fcojgodoy
-------------------------------------------------------------------------------------------------- */
// TODO: gulpfile lint

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
    imagemin = require( 'gulp-imagemin' ),
    sourcemaps = require ( 'gulp-sourcemaps' ),
    sassdoc = require( 'sassdoc' ),
    wpPot = require('gulp-wp-pot');


/* -------------------------------------------------------------------------------------------------
Theme and working theme folders names
-------------------------------------------------------------------------------------------------- */
const GENERAL = {
    themeName: 'teruterubozu',
    textDomain: 'teruterubozu',
    proxy: 'teruterubozu.test',
    port: 8080,
    node_dir: './node_modules/'
}

const SOURCE = {
    styles: './src/styles/**/*.scss',
    scripts: './src/scripts/**/*.js',
    fonts: './src/fonts/**/*',
    imgs: './src/imgs/**/*',
    php: [
        './*.php',
        './views/**/*.php',
        './inc/**/*.php'
    ]
};

const SOURCE_DIR = {
    scripts: './src/scripts/'
};

const ASSETS = {
    styles: './assets/styles/**/*.css',
    scripts: './assets/scripts/**/*.js',
    fonts: './assets/fonts/**/*'
};

const ASSETS_DIR = {
    root: './assets/',
    styles: './assets/styles/',
    scripts: './assets/scripts/',
    fonts: './assets/fonts/',
    imgs: './assets/imgs/'
};

const VENDORS = {
    jquery_smooth_scroll: GENERAL.node_dir + 'animated-scroll-to/animated-scroll-to.js',
    pushy: GENERAL.node_dir + '@cmyee/pushy/js/pushy.js'
};


/* -------------------------------------------------------------------------------------------------
Create .pot file
-------------------------------------------------------------------------------------------------- */
gulp.task('pot', function () {
    return gulp.src( SOURCE.php )
        .pipe(wpPot( {
            domain: GENERAL.textDomain,
            package: GENERAL.themeName
        } ))
        .pipe(gulp.dest( './languages/' + GENERAL.themeName + '.pot' ));
});


/* -------------------------------------------------------------------------------------------------
SassDoc task
-------------------------------------------------------------------------------------------------- */
gulp.task( 'sassdoc', function () {
    return gulp.src( SOURCE.styles )
    .pipe(sassdoc());
});





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
Images
-------------------------------------------------------------------------------------------------- */
gulp.task( 'images', function () {
    return gulp.src( SOURCE.imgs )
        .pipe( imagemin( {
            progressive: true

        } ) )
        .pipe( gulp.dest( ASSETS_DIR.imgs ) );
} );


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
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
script prod minified
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts-prod', function () {
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
script prod not minified
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts-prod-not-minified', function () {
    return gulp.src ( [
        SOURCE.scripts,
        '!' + SOURCE_DIR.scripts + 'customizer.js',
    ] )
    .pipe ( jshint () )
    .pipe ( jshint.reporter ( 'default' ) )
    .pipe ( concat ( 'main.js') )
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
script copy prod
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts-copy-prod', function () {
    return gulp.src ( [
        SOURCE_DIR.scripts + 'customizer.js',
    ] )
    .pipe ( jshint () )
    .pipe ( jshint.reporter ( 'default' ) )
    .pipe ( uglify() )
    .pipe ( rename ( { suffix: '.min'} ) )
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
script copy prod not minified
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'scripts-copy-prod-not-minified', function () {
    return gulp.src ( [
        SOURCE_DIR.scripts + 'customizer.js',
    ] )
    .pipe ( jshint () )
    .pipe ( jshint.reporter ( 'default' ) )
    .pipe ( gulp.dest ( ASSETS_DIR.scripts ) );
});


/* -------------------------------------------------------------------------------------------------
styles TASK: Sass - Sourcemaps - Autoprefixer
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'styles', function () {
    return gulp.src ( SOURCE.styles )
    .pipe ( sourcemaps.init () )
    .pipe ( sass( {outputStyle: 'nested'} ).on ( 'error', sass.logError) )
    .pipe ( postcss( [
        autoprefixer ( 'last 2 versions', '>1%' )
    ]))
    .pipe ( rename ( { suffix: '.min'} ) )
    .pipe ( sourcemaps.write ( './maps' ) )
    .pipe ( gulp.dest ( ASSETS_DIR.styles ) );
});


/* -------------------------------------------------------------------------------------------------
styles-prod TASK: Sass compressed - Autoprefixer
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'styles-prod', function () {
    return gulp.src ( SOURCE.styles )
    .pipe ( sass ( {
        outputStyle: 'compressed'
    }).on ( 'error', sass.logError) )
    .pipe ( postcss ( [
        autoprefixer ( 'last 2 versions', '>1%' )
    ]))
    .pipe ( rename ( { suffix: '.min'} ) )
    .pipe ( gulp.dest ( ASSETS_DIR.styles ) );
});


/* -------------------------------------------------------------------------------------------------
styles-prod TASK: Sass - Autoprefixer
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'styles-prod-not-minified', function () {
    return gulp.src ( SOURCE.styles )
    .pipe ( sass ().on ( 'error', sass.logError) )
    .pipe ( postcss ( [
        autoprefixer ( 'last 2 versions', '>1%' )
    ]))
    .pipe ( gulp.dest ( ASSETS_DIR.styles ) );
});


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


/* -------------------------------------------------------------------------------------------------
Production task
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'production', gulp.series( 'clean-assets', 'vendors', 'images', 'styles-prod', 'styles-prod-not-minified', 'scripts-prod', 'scripts-prod-not-minified', 'scripts-copy-prod', 'scripts-copy-prod-not-minified', 'fonts', 'pot' ) );


/* -------------------------------------------------------------------------------------------------
Default task
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'default', gulp.series( [ 'clean-assets', 'vendors', 'images', 'styles', 'scripts', 'scripts-copy', 'fonts' ], 'watch' ) );
