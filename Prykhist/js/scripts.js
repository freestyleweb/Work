			$(function(){
				var link = $('.hamburger');
				var close = $('.close-menu');
				var menu = $('.mobile-menu, .hamburger');
				var linkSearch = $('.mobile-search__wrap');
				var closeSearch = $('.close-search');
				var search = $('.mobile-search');
				link.on('click', function(event) {
					event.preventDefault();
					menu.toggleClass('is-active');
				});
				close.on('click', function(event) {
					event.preventDefault();
					menu.removeClass('is-active');
				});
				linkSearch.on('click', function(event) {
					event.preventDefault();
					search.toggleClass('is-active');
				});
				closeSearch.on('click', function(event) {
					event.preventDefault();
					search.removeClass('is-active');
				});
			});