const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const purgecss = require('gulp-css-purge');
const browsersync = require('browser-sync').create();

// Sass Task
function scssTask() {
  return (
    src('./assets/scss/**/*.scss', { sourcemaps: true })
      .pipe(sass().on('error', sass.logError))
      // .pipe(purgecss({ content: ['./**/*.php'] }))
      .pipe(postcss([autoprefixer(), cssnano()]))
      .pipe(dest('./assets/css', { sourcemaps: '.' }))
  );
}

// Browser Sync
function browsersyncServe(cb) {
  browsersync.init({
    proxy: 'http://prowell.local' // change to your local server site url
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
exports.default = series(scssTask, browsersyncServe, watchTask);
