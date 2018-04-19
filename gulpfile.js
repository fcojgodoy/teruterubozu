'use strict';

var gulp = require('gulp');
var HubRegistry = require('gulp-hub');

/* load some files into the registry */
var hub = new HubRegistry(['gulptasks/*.js']);

/* tell gulp to use the tasks just loaded */
gulp.registry(hub);


/* -------------------------------------------------------------------------------------------------
Default task
-------------------------------------------------------------------------------------------------- */
gulp.task ( 'default', gulp.series( [ 'clean-assets', 'vendors', 'styles', 'scripts-copy', 'scripts', 'fonts' ], 'watch' ) );
