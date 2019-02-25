<?php $page_title = 'Контакты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption">
					<h1 class="sc-title d-block">Контакты</h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="contacts-section">
				<div class="contacts-map-wrapper">
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afded416c7fc1e1f6f4aca94603f3f722dd40ac36ef14713ac0c33e28558972e8&amp;width=100%25&amp;height=500&amp;lang=ru_UA&amp;scroll=false"></script>
					</div>
					<div class="container map-block-wrapper">
						<div class="map-block white-card">
							<h4 class="block-title">Компания Bilux</h4>
							<div class="contacts-list">
								<div class="item">
									<div class="item-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="item-text">
										<a href="tel:+74993909961">+7 (499) 390-99-61</a>
									</div>
								</div>
								<div class="item">
									<div class="item-icon">
										<i class="icon-location"></i>
									</div>
									<div class="item-text">105187, г. Москва, ул. Кирпичная 48</div>
								</div>
								<div class="item">
									<div class="item-icon">
										<i class="icon-clock"></i>
									</div>
									<div class="item-text">Пн-Пт с 9:00 до 18:00</div>
								</div>
								<div class="item">
									<div class="item-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="item-text">
										<a href="mailto:info@bilux.org">info@bilux.org</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="requisites-section section-default-paddings">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="section-caption with-dot">
								<h3 class="sc-title">Реквизиты</h3>
							</div>
							<div class="tpg-typography">
								<p>В компании BiLUX можно купить биметаллические секционные радиаторы отопления по выгодным ценам. Это радиаторы нового поколения, обладающие высокой эффективностью. По вопросам их приобретения обращайтесь к официальным представителям. Общую стоимость заказа вы можете определить, воспользовавшись онлайн-калькулятором.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>