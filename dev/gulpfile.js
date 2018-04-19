const gulp        = require('gulp');
const runSequence = require('run-sequence');
const pump        = require('pump');


/*------------------------------------------------------------------------------------------------*\
    CSS    
\*------------------------------------------------------------------------------------------------*/
const sass   = require('gulp-sass');
const cssmin = require('gulp-cssmin');
const rename = require('gulp-rename');

var css_src  = './';
var css_dest = './css/';


// Compile SCSS in expanded mode so it's easier to inspect the result.
gulp.task('sass', (cb) =>
    pump([
        gulp.src(['!node_modules', '!node_modules/**', css_src + '**/*.scss']),
        sass({outputStyle: 'expanded'}),
        gulp.dest(css_dest)
    ],
    cb)
);

// Then create a minified version in the output folder.
gulp.task('cssmin', (cb) =>
    pump([
        gulp.src(css_dest + '**/!(*.min)*.css'),
        cssmin(),
        rename({extname: '.min.css'}),
        gulp.dest(css_dest)
    ],
    cb)
);

// This combined task makes it convenient to run all the steps together.
gulp.task('css', () => {
    console.log('Processing (S)CSS. See gulpfile.js for details.');
    runSequence('sass', 'cssmin');
})


/*------------------------------------------------------------------------------------------------*\
    FTP
\*------------------------------------------------------------------------------------------------*/
const ftp         = require( 'vinyl-ftp' );
const ftpcrd      = require('./ftpcrd.json');

/*
var ftp_src_base = '..';
var ftp_src      = [
    ftp_src_base + '/dist/*',
    '!css'
];
*/
var ftp_src = './';


// Upload files
gulp.task('ftp', () => {
    console.log('Running FTP. See gulpfile.js for details.');

    var conn = ftp.create( {
        host:     ftpcrd.host,
        user:     ftpcrd.user,
        password: ftpcrd.pass,
        parallel: 10
    } );

    return gulp.src(['!node_modules', '!node_modules/**', '!ftpcrd.json', ftp_src + '/**/*'], { base: '.', buffer: false })
        //.pipe( conn.newer( '/public_html' ) ) // only upload newer files
        .pipe( conn.dest(ftpcrd.dest) );
    
    /*return gulp.src( ftp_src, { base: ftp_src_base, buffer: false } )
        //.pipe( conn.newer( '/public_html' ) ) // only upload newer files
        .pipe( conn.dest(ftpcrd.dest) );*/
});


/*------------------------------------------------------------------------------------------------*\
    WATCHERS
\*------------------------------------------------------------------------------------------------*/

// Watch CSS:
gulp.task('watch_css', function(){
    gulp.watch([css_src + '*.scss', css_src + '**/*.scss'], ['css']); 
});


// Watch FTP:
gulp.task('watch_ftp', function(){
    gulp.watch(ftp_src, ['ftp']);
});


// Watch all of the above:
gulp.task('watch_all', function(){
    gulp.watch(css_src + '**/*.scss', ['css']);
    gulp.watch(ftp_src, ['ftp']);
});