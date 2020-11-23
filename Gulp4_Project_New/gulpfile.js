const { src, dest, watch } = require('gulp');
const scss = require('gulp-sass');
const concat = require('gulp-concat');


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

}


// функция слежения за проектом

function watching() {

	// указываем, что слежение будет происходить за всеми файлами scss
	// вторым параметром запускаем функцию styles
	watch(['app/scss/**/*.scss'], styles)

}

exports.styles = styles;
exports.watching = watching;