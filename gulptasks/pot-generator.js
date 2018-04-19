/* -------------------------------------------------------------------------------------------------
Build Configuration
Contributors: fcojgodoy
-------------------------------------------------------------------------------------------------- */

/* -------------------------------------------------------------------------------------------------
Requires
-------------------------------------------------------------------------------------------------- */
const gulp = require ( 'gulp' ),
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
    php: [
        './*.php',
        './views/**/*.php',
        './inc/**/*.php'
    ]
};

const SOURCE_DIR = {
    scripts: './src/scripts/'
};


/* -------------------------------------------------------------------------------------------------
Create .pot file
-------------------------------------------------------------------------------------------------- */
gulp.task( 'pot', function () {
    return gulp.src( SOURCE.php )
        .pipe(wpPot( {
            domain: GENERAL.textDomain,
            package: GENERAL.themeName
        } ))
        .pipe(gulp.dest( './languages/' + GENERAL.themeName + '.pot' ));
});
