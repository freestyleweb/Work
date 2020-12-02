const { src, dest, watch, parallel, series } = require('gulp');
const scss = require('gulp-sass');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const uglify = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
const imagemin = require('gulp-imagemin');
const del = require('del');


function cleanDist() {
	return del('dist')
}

// Функция обработки (сжатия) изображений
function images() {
	return src('app/images/**/*')
		.pipe(imagemin([
			imagemin.gifsicle({ interlaced: true }),
			imagemin.mozjpeg({ quality: 75, progressive: true }),
			imagemin.optipng({ optimizationLevel: 5 }),
			imagemin.svgo({
				plugins: [
					{ removeViewBox: true },
					{ cleanupIDs: false }
				]
			})
		]))
		.pipe(dest('dist/images'))
}

// создаем функцию для обновления страницы браузера
function browsersync() {
	browserSync.init({
		server: {
			baseDir: 'app/'
		}
	});
}

// Функция для конвертации файлов js
function scripts() {
	return src([
		'node_modules/jquery/dist/jquery.js',
		'app/js/main.js'
	])
		// меняем название
		.pipe(concat('main.min.js'))

		// минифицируем
		.pipe(uglify())

		// отправляем в каталог назначения
		.pipe(dest('app/js'))

		// обновляем страницу
		.pipe(browserSync.stream())
}

// функция для конвертации файлов стилей
function styles() {

	// находим файл style.scss
	return src('app/scss/style.scss')

		// обрабатываем с помощью gulp-sass	(конвертация в css и минификация)						
		.pipe(scss({ outputStyle: 'compressed' }))

		// переименование минифицированного файла стилей
		.pipe(concat('style.min.css'))

		// испльзование autoprefixer для расстановки вендорных префиксов
		.pipe(autoprefixer({
			overrideBrowserslist: ['last 10 version'],
			grid: true
		}))

		// указываем куда поместить конечный css файл	
		.pipe(dest('app/css'))

		// обновляем страницу
		.pipe(browserSync.stream())

}

// функция для отправки конечных файлов в папку dist
function build() {
	return src([
		'app/css/style.min.css',
		'app/fonts/**/*',
		'app/js/main.min.js',
		'app/*.html'
	], { base: 'app' })
		.pipe(dest('dist'))
}

// функция слежения за проектом
function watching() {

	// указываем, что слежение будет происходить за всеми файлами js
	// вторым параметром запускаем функцию scripts
	watch(['app/js/**/*.js', '!app/js/main.min.js'], scripts)

	// указываем, что слежение будет происходить за всеми файлами scss
	// вторым параметром запускаем функцию styles
	watch(['app/scss/**/*.scss'], styles)

	// настраиваем watching для слежения за html файлами
	// и указываем, что при их изменении browserSync обновляет страницу в браузере
	watch(['app/*.html']).on('change', browserSync.reload)

}


exports.styles = styles;
exports.watching = watching;
exports.browsersync = browsersync;
exports.scripts = scripts;
exports.images = images;
exports.cleanDist = cleanDist;

exports.build = series(cleanDist, images, build);
exports.default = parallel(styles, scripts, browsersync, watching);