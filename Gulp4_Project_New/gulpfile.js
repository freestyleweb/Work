const { src, dest, watch, parallel } = require('gulp');
const scss = require('gulp-sass');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();


// создаем функцию для обновления страницы браузера

function browsersync() {
	browserSync.init({
		server: {
			baseDir: '/app'
		}
	});
}


// функция для конвертации файлов стилей

function styles() {

	// находим файл style.scss
	return src('app/scss/style.scss')

		// обрабатываем с помощью gulp-sass	(конвертация в css и минификация)						
		.pipe(scss({ outputStyle: 'compressed' }))

		// переименование минифицированного файла стилей
		.pipe(concat('style.min.css'))

		// указываем куда поместить конечный css файл	
		.pipe(dest('app/css'))

		// обновляем страницу
		.pipe(browserSync.stream())

}


// функция слежения за проектом

function watching() {

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