		</div>
		<footer class="footer">
			<div class="footer-line footer-top">
				<div class="container">
					<div class="footer-inner">
						<div class="footer-block flex-none">
							<a href="index.php" class="logo-block">
								<div class="logo-image">
									<img src="img/logo.png" alt="">
								</div>
							</a>
						</div>
						<div class="footer-block">
							<ul class="footer-nav">
								<li><a href="about.php">О компании</a></li>
								<li><a href="catalog.php">Продукция</a></li>
								<li><a href="where-buy.php">Где купить?</a></li>
								<li><a href="documents.php">Документация</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
						<div class="footer-block flex-none">
							<a href="tel:+74993909961" class="phone-link">
								<span class="link-icon">
									<i class="icon-phone"></i>
								</span>
								<span>+7 (499) 390-99-61</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-line footer-bottom">
				<div class="container">
					<div class="footer-inner">
						<div class="footer-block">
							<ul class="footer-contacts">
								<li>2013-<?= date("Y") ?> <br>Все права защищены</li>
								<li>Центральный офис: <br>105187, г. Москва, ул. Кирпичная, д. 48</li>
								<li>E-mail: <br><a href="mailto:info@bilux.org">info@bilux.org</a></li>
							</ul>
						</div>
						<div class="footer-block">
							<a href="https://webolution.ru" target="_blank" class="webolution">
								<img src="img/webolution.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<nav id="menu" class="panel">
		<div class="panel-inner">
			<div class="panel-close"></div>
			<ul class="panel-nav">
				<li><a href="about.php">О компании</a></li>
				<li><a href="catalog.php">Продукция</a></li>
				<li><a href="calculate.php">Калькулятор</a></li>
				<li><a href="where-buy.php">Где купить?</a></li>
				<li><a href="#">Информация</a></li>
				<li><a href="on-tv.php">СМИ о нас</a></li>
				<li><a href="contacts.php">Контакты</a></li>
				<li><a href="#">Консультация</a></li>
			</ul>
			<div class="panel-content">
				<ul class="header-links-list in-column">
					<li>
						<a href="#">
							<i class="icon-document"></i>
							<span>Документация</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-umbrella"></i>
							<span>Программа <br class="d-xl-none">страхования</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-star"></i>
							<span>Сертификат <br class="d-xl-none">соответствия</span>
						</a>
					</li>
				</ul>
				<a href="tel:+74993909961" class="phone-link">
					<span class="link-icon">
						<i class="icon-phone"></i>
					</span>
					<span>+7 (499) 390-99-61</span>
				</a>
			</div>
		</div>
	</nav>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-order-call">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<div class="modal-image">
						<img src="img/modal-order-icon.png" alt="">
					</div>
					<p class="modal-caption">Заказать звонок</p>
					<form action="#" class="modal-form form">
						<div class="form-row">
							<div class="form-field">
								<input type="text" class="input-field gray" placeholder="Ваше имя">
							</div>
						</div>
						<div class="form-row">
							<div class="form-field">
								<input type="tel" class="input-field gray" placeholder="Телефон">
							</div>
						</div>
						<div class="form-row">
							<p class="note">Нажимая на кнопку «Жду звонка», вы даете <br>согласие на обработку персональных данных</p>
						</div>
						<div class="form-row">
							<button type="submit" class="btn fullwidth">Жду звонка</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script defer src="js/bootstrap.bundle.min.js"></script>
	<script defer src="js/bigSlide.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	<script defer src="js/jcf.js"></script>
	<script defer src="js/jcf.select.js"></script>
	<script defer src="js/scripts.js"></script>
	<?php // wp_footer(); ?>
</body>
</html>