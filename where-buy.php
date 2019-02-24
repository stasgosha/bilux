<?php $page_title = 'Где купить?'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption">
					<h1 class="sc-title">Где купить?</h1>
				</div>
				<div class="items-list where-buy-select-fields reset-margin">
					<div class="item xs-fullwidth">
						<div class="select-field white">
							<select>
								<option value="1">Все города</option>
								<option value="1">Все города</option>
								<option value="1">Все города</option>
							</select>
						</div>
					</div>
					<div class="item xs-fullwidth">
						<div class="select-field white">
							<select>
								<option value="1">Все типы дилеров</option>
								<option value="1">Все типы дилеров</option>
								<option value="1">Все типы дилеров</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="where-buy-section">
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
		</div>
	</div>
<?php include('footer.php'); ?>