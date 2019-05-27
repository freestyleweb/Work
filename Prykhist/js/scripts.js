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



		// 	<section class="home__section" id="home__section">

					
		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-lg-3 col-md-4">
		// 				<div class="rubric__wrap">
		// 					<a href="#" class="rubric rubric__link rubric__link-warn">Терміново</a>
		// 				</div>
		// 			</div>
		// 		</div>
				
						
		// 			</div>
		// 			<div class="col-lg-6 col-md-12">
		// 				<a href="#" class="card__news card__news-big card__news-warn">
		// 					<div class="card__news_text">
		// 						<h3 class="card__news_header">
		// 							Визит Народного депутата Украины  
		// 							А. Шипко в 4 городскую больницу
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>
		// 		</div> <!-- /.row -->
		// 	</div> <!-- /.container -->

		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-lg-3 col-md-4">
		// 				<div class="rubric__wrap">
		// 					<a href="#" class="rubric rubric__link">Резонанс</a>
		// 				</div>
		// 			</div>
		// 		</div>
		// 		<div class="row">

		// 			<div class="col-lg-6 col-md-6">
		// 				<a href="#" class="card__news card__news-mini">
		// 					<div class="card__news_text card__news-mini">
		// 						<img src="img/Police.jpg" class="news__image" alt="Photo">
		// 						<h3 class="card__news_header">
		// 							Нещодавно ГО "Прихист" побувала в Старій частині міста
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>

		// 			<div class="col-lg-6 col-md-6">
		// 				<a href="#" class="card__news card__news-mini">
		// 					<div class="card__news_text card__news-mini">
		// 						<img src="img/Police.jpg" class="news__image" alt="Photo">
		// 						<h3 class="card__news_header">
		// 							Нещодавно ГО "Прихист" побувала в Старій частині міста
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>

		// 		</div> <!-- /.row -->
		// 	</div> <!-- /.container -->

		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-lg-3 col-md-4">
		// 				<div class="rubric__wrap">
		// 					<a href="#" class="rubric rubric__link">Інтерв’ю</a>
		// 				</div>
		// 			</div>
		// 		</div>
		// 		<div class="row">
		// 			<div class="col-md-6">
		// 				<a href="#" class="card__news card__news-big">
		// 					<img src="img/shibko.jpg" alt="Photo">
		// 					<div class="card__news_text">
		// 						<h3 class="card__news_header">
		// 							Визит Народного депутата Украины  
		// 							А. Шипко в 4 городскую больницу
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>
		// 			<div class="col-md-6">
		// 				<a href="#" class="card__news card__news-big">
		// 					<img src="img/shibko.jpg" alt="Photo">
		// 					<div class="card__news_text">
		// 						<h3 class="card__news_header">
		// 							Визит Народного депутата Украины  
		// 							А. Шипко в 4 городскую больницу
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>
		// 		</div> <!-- /.row -->				
		// 	</div> <!-- /.container -->

		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-lg-3 col-md-4">
		// 				<div class="rubric__wrap">
		// 					<a href="#" class="rubric rubric__link">Афіша</a>
		// 				</div>
		// 			</div>
		// 		</div> <!-- /.row -->

		// 		<div class="row">

		// 			<div class="col-lg-6 col-md-6">
		// 				<a href="#" class="card__news card__news-mini">
		// 					<div class="card__news_text card__news-mini">
		// 						<img src="img/Police.png" alt="Photo">
		// 						<h3 class="card__news_header">
		// 							Нещодавно ГО "Прихист" побувала в Старій частині міста
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>

		// 			<div class="col-lg-6 col-md-6">
		// 				<a href="#" class="card__news card__news-mini">
		// 					<div class="card__news_text card__news-mini">
		// 						<img src="img/Police.png" alt="Photo">
		// 						<h3 class="card__news_header">
		// 							Нещодавно ГО "Прихист" побувала в Старій частині міста
		// 						</h3>
		// 						<p class="card__news_description">
		// 							Сегодня в город с традиционным визитом прибыл народный 
		// 							депутат Украины Андрей Шипко. Традиционно первыми 
		// 							слушателями Андрея Федоровича стали медики.
		// 						</p>								
		// 					</div>
		// 				</a>
		// 			</div>

		// 		</div> <!-- /.row -->
		// 	</div> <!-- /.container -->

		// </section> 