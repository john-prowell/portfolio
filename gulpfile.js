const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const purgecss = require('gulp-purgecss');
const browsersync = require('browser-sync').create();
const decomment = require('gulp-decomment');

// Sass Task
function scssTask() {
  return src('./assets/scss/**/*.scss', { sourcemaps: true })
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(dest('./assets/css', { sourcemaps: '.' }));
}

// function jsTask() {
//   return src('./assets/js/**/*.js')
//     .pipe(decomment({ trim: true }))
//     .pipe(dest('./assets/js'));
// }

function purgecssTask() {
  return src('./assets/css/main.css')
    .pipe(
      purgecss({ content: ['./**/*.php'], safelist: ['scrolled', 'active'] })
    )
    .pipe(dest('./assets/css'));
}

// Browser Sync
function browsersyncServe(cb) {
  browsersync.init({
    proxy: 'http://prowelldigital.local' // change to your local server site url
  });
  cb();
}

function browsersyncReload(cb) {
  browsersync.reload();
  cb();
}

// Watch Task
function watchTask() {
  watch('./**/*.php', browsersyncReload);
  watch(['./assets/scss/**/*.scss'], series(scssTask, browsersyncReload));
}

// Default Gulp Task
exports.default = series(scssTask, purgecssTask, browsersyncServe, watchTask);
