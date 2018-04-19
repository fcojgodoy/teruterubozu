const gulp = require ( 'gulp' ),
    sassdoc = require( 'sassdoc' );


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
    fonts: './assets/fonts/'
};

const VENDORS = {
    jquery_smooth_scroll: GENERAL.node_dir + 'animated-scroll-to/animated-scroll-to.js',
    pushy: GENERAL.node_dir + '@cmyee/pushy/js/pushy.js'
};


gulp.task( 'sassdoc', function () {
  return gulp.src( SOURCE.styles )
    .pipe(sassdoc());
});
