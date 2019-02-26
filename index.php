<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="first-screen-section">
			<div class="container">
				<div class="section-caption with-line">
					<h1 class="sc-title">Радиаторы отопления BiLUX Plus R</h1>
				</div>
				<div class="big-product-features">
					<div class="pruduct-features left">
						<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
							<div class="item-icon">
								<i class="icon-diamond"></i>
							</div>
							<div class="item-text">Изысканный <br>дизайн</div>
						</div>
						<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
							<div class="item-icon">
								<i class="icon-shield"></i>
							</div>
							<div class="item-text">Гарантия 10 лет на <br>все изделия Bilux</div>
						</div>
					</div>
					<div class="product-image wow fadeInUp" data-wow-delay="0.3s">
						<img src="img/tmp/first-screen-radiator.png" class="d-none d-md-block" alt="">
						<img src="img/tmp/first-screen-radiator-mobile.png" class="d-md-none" alt="">
					</div>
					<div class="pruduct-features right">
						<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
							<div class="item-icon">
								<i class="icon-bimetal"></i>
							</div>
							<div class="item-text">100% <br>биметалл</div>
						</div>
						<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
							<div class="item-icon">
								<i class="icon-params"></i>
							</div>
							<div class="item-text">Высокие <span class="d-none d-sm-inline">эксплуатационные</span> <br>характеристики</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about-section section-default-paddings">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 d-none d-lg-block">
						<div class="img-responsive">
							<img src="img/tmp/about-image.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="section-caption with-dot">
							<h3 class="sc-title">Компания BiLUX</h3>
						</div>
						<div class="section-text tpg-typography">
							<div class="img-responsive d-lg-none">
								<img src="img/tmp/about-image.jpg" alt="">
							</div>
							<p>Компания BiLUX предлагает долговечную, надёжную продукцию уникальной конструкции и оригинального дизайна — выполненные из биметалла и алюминия радиаторы водяного отопления. Если вы решили создать эффективную и экономичную систему отопления в квартире, офисе или загородном доме, обратите внимание на качественную и надёжную продукцию BiLUX.</p>
							<p>Перепады температур, повышенная влажность, низкое качество теплоносителя — всё это оказывает негативное влияние даже на самые прочные металлы. Изделия бренда BiLUX изготавливают по уникальной технологии, позволяющей гарантировать прочность, надёжность и долговечность. Каждая деталь радиаторов водяного отопления абсолютно герметична. Благодаря этому они представляют собой единую систему, где все части работают слаженно и бесперебойно. Вы можете не думать о возникновении протечек, трещин и других повреждений.</p>
							<ul class="links-list">
								<li><a href="about.php">О Компании</a></li>
								<li><a href="#">Задать вопрос</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="categories-section section-default-bottom-padding">
			<div class="container">
				<div class="cards-list columns-2 xs-columns-1">
					<div class="item">
						<a href="#" class="category-card white-card">
							<div class="card-image xl-flex-end">
								<img src="img/tmp/cat-bimetal.png" alt="">
							</div>
							<div class="card-content">Биметаллический радиатор Bilux plus R</div>
							<div class="card-icon"></div>
						</a>
					</div>
					<div class="item">
						<a href="#" class="category-card white-card">
							<div class="card-image">
								<img src="img/tmp/cat-accessories.png" alt="">
							</div>
							<div class="card-content">Комплектующие для радиаторов Bilux</div>
							<div class="card-icon"></div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- OLD LAYOUT -->
		<!-- <section class="subpages-section section-default-paddings d-none d-lg-block">
			<div class="container">
				<div class="cards-list columns-3">
					<div class="item">
						<div class="subpage-card white-card">
							<div class="card-icon">
								<i class="icon-certificate"></i>
							</div>
							<div class="card-content">
								<h4 class="tpg-h4 card-caption">Сертификат соответствия</h4>
							</div>
							<div class="card-link">
								<a href="#">Посмотреть</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="subpage-card white-card">
							<div class="card-icon">
								<i class="icon-insurance"></i>
							</div>
							<div class="card-content">
								<h4 class="tpg-h4 card-caption">Страховая программа</h4>
								<p>Общая сумма страхового покрытия <br>15 000 000 руб</p>
							</div>
							<div class="card-link">
								<a href="#">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="subpage-card white-card">
							<div class="card-icon">
								<i class="icon-calculate"></i>
							</div>
							<div class="card-content">
								<h4 class="tpg-h4 card-caption">Онлайн-калькулятор</h4>
							</div>
							<div class="card-link">
								<a href="#">Рассчитать</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<?php include('page-parts/product-advantages.inc.php') ?>
		<section class="subpages-section-mobile section-default-top-padding">
			<div class="container">
				<div class="cards-list columns-3 xs-columns-1">
					<div class="item">
						<div class="subpage-card-mobile white-card">
							<div class="card-icon">
								<i class="icon-certificate"></i>
							</div>
							<div class="card-content">
								<h4 class="card-caption">
									<a href="#">Сертификат <br>соответствия</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="subpage-card-mobile white-card">
							<div class="card-icon">
								<i class="icon-insurance"></i>
							</div>
							<div class="card-content">
								<h4 class="card-caption">
									<a href="#">Страховая <br>программа</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="subpage-card-mobile white-card">
							<div class="card-icon">
								<i class="icon-calculate"></i>
							</div>
							<div class="card-content">
								<h4 class="card-caption">
									<a href="#">Онлайн <br>калькулятор</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="on-tv-section section-default-paddings">
			<div class="container">
				<div class="on-tv-block">
					<div class="block-text">
						<div class="section-caption with-dot">
							<h3 class="sc-title">BiLUX на TV <i class="icon-tv"></i></h3>
						</div>
						<p>Радиаторы Bilux Plus R – участники телепередач «Квартирный вопрос» и «Дачный ответ» на телеканале НТВ. Данное оборудование полюбилось не только дизайнерам, но и монтажным организациям...</p>
						<a href="#" class="more-link d-none d-lg-inline">Подробнее</a>
					</div>
					<div class="block-partners">
						<p>Постоянные партнеры</p>
						<ul class="partners-list">
							<li><img src="img/tmp/partner-1.png" alt=""></li>
							<li><img src="img/tmp/partner-2.png" alt=""></li>
						</ul>
						<a href="#" class="more-link d-lg-none">Подробнее</a>
					</div>
				</div>
			</div>
		</section>
		<?php include('page-parts/have-a-questions.inc.php') ?>
		<section class="where-buy-section section-default-top-padding">
			<div class="container">
				<div class="section-caption with-dot">
					<h3 class="sc-title">Где купить?</h3>
				</div>
				<div class="items-list where-buy-select-fields">
					<div class="item xs-fullwidth">
						<div class="select-field">
							<select>
								<option value="1">Все города</option>
							</select>
						</div>
					</div>
					<div class="item xs-fullwidth">
						<div class="select-field">
							<select>
								<option value="1">Все типы дилеров</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="where-buy-map-wrapper">
				<div class="map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afded416c7fc1e1f6f4aca94603f3f722dd40ac36ef14713ac0c33e28558972e8&amp;width=100%25&amp;height=560&amp;lang=ru_UA&amp;scroll=false"></script>
				</div>
				<div class="container map-block-wrapper">
					<div class="map-block white-card mCustomScrollbar" data-mcs-theme="dark">
						<div class="where-buy-list">
							<div class="item">
								<div class="item-number">1</div>
								<div class="item-content">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
							<div class="item">
								<div class="item-number">2</div>
								<div class="item-content">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
							<div class="item">
								<div class="item-number">3</div>
								<div class="item-content">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
							<div class="item">
								<div class="item-number">4</div>
								<div class="item-content">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
							<div class="item">
								<div class="item-number">5</div>
								<div class="item-content">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-map-block-wrapper d-lg-none">
					<div class="container">
						<div class="mobile-map-block white-card">
							<div class="addresses-slider">
								<div class="slide">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
								<div class="slide">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
								<div class="slide">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
								<div class="slide">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
								<div class="slide">
									<div class="item-name">Нибко-Юг</div>
									<p>Краснодар, им. Вишняковой, 1/19 <br>(861) 211-20-30, 211-20-29 <br><a href="mailto:info@nibco-ug.ru">info@nibco-ug.ru</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('page-parts/dealers-section.inc.php') ?>
		<section class="news-section section-default-paddings">
			<div class="container">
				<div class="items-list justify-between align-baseline">
					<div class="item">
						<div class="section-caption with-dot">
							<h3 class="sc-title">Новости</h3>
						</div>
					</div>
					<div class="item">
						<a href="news.php" class="more-link inverted">Все новости</a>
					</div>
				</div>
				<div class="cards-list news-list columns-3 sm-columns-1">
					<div class="item">
						<div class="news-card white-card">
							<div class="date">25.12.18</div>
							<h5 class="card-caption">
								<a href="#">Заголовок новости</a>
							</h5>
							<div class="card-excerpt">
								<p>Cостояние Вселенной в определённый момент времени в прошлом, когда плотность энергии... </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card white-card">
							<div class="date">25.12.18</div>
							<h5 class="card-caption">
								<a href="#">Заголовок новости в несколько строк</a>
							</h5>
							<div class="card-excerpt">
								<p>Cостояние Вселенной в определённый момент времени в прошлом, когда плотность энергии... А эта карточка длиннее остальных</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card white-card">
							<div class="date">25.12.18</div>
							<h5 class="card-caption">
								<a href="#">Заголовок новости</a>
							</h5>
							<div class="card-excerpt">
								<p>Cостояние Вселенной в определённый момент времени в прошлом, когда плотность энергии... </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>