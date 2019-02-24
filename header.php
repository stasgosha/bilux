<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - BiLUX</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-inner">
							<div class="header-block">
								<a href="index.php" class="logo-block">
									<div class="logo-image">
										<img src="img/logo.png" alt="">
									</div>
									<div class="logo-text">Радиаторы <br>класса люкс</div>
								</a>
							</div>
							<div class="header-block d-none d-lg-block">
								<ul class="header-links-list">
									<li>
										<a href="documents.php">
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
							</div>
							<div class="header-block">
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
				<div class="top-nav-wrapper d-none d-lg-block">
					<div class="container">
						<ul class="top-nav">
							<li><a href="about.php">О компании</a></li>
							<li><a href="catalog.php">Продукция</a></li>
							<li><a href="calculate.php">Калькулятор</a></li>
							<li><a href="where-buy.php">Где купить?</a></li>
							<li><a href="#">Информация</a></li>
							<li><a href="on-tv.php">СМИ о нас</a></li>
							<li><a href="contacts.php">Контакты</a></li>
							<li><a href="#">Консультация</a></li>
						</ul>
					</div>
				</div>
				<div class="top-nav-mobile-wrapper d-lg-none">
					<div class="container">
						<div class="top-nav-mobile">
							<div class="item">
								<div class="menu-opener">
									<div class="bars">
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>
									<span>Меню</span>
								</div>
							</div>
							<div class="item">
								<ul class="mobile-nav-links">
									<li><a href="#"><i class="icon-calculate-small"></i></a></li>
									<li><a href="#"><i class="icon-question"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>