<?php $page_title = 'Калькулятор расчета секций радиатора отопления'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-title-section">
			<div class="container">
				<ul class="breadcrumbs light">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="section-caption">
					<h1 class="sc-title">Калькулятор <span class="d-none d-md-inline"> расчета секций радиатора отопления</span></h1>
				</div>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="calculate-section section-default-paddings">
				<div class="container">
					<div class="calculate-component">
						<div class="component-fields">
							<div class="cards-list fields-list columns-3 lg-columns-2 md-columns-1 sm-columns-2 xs-columns-1">
								<div class="item">
									<div class="form-field">
										<p>Тип помещения</p>
										<div class="select-field small">
											<select>
												<option class="hideme">Выберите тип помещения</option>
												<option value="1">Тип 1</option>
												<option value="2">Тип 2</option>
											</select>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="form-field">
										<p>Площадь помещения, m<sup>2</sup></p>
										<input class="input-field" type="tel" placeholder="Укажите площадь помещения">
									</div>
								</div>
								<div class="item">
									<div class="form-field">
										<p>Высота потолка, m</p>
										<input class="input-field" type="tel" placeholder="Укажите высоту потолка">
									</div>
								</div>
								<div class="item">
									<div class="form-field">
										<p>Высота подоконника</p>
										<div class="select-field small">
											<select>
												<option class="hideme">Выберите высоту подоконника</option>
												<option value="1">Выше 0,7 m</option>
											</select>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="form-field">
										<p>Количество окон в комнате</p>
										<input class="input-field" type="tel" placeholder="Укажите количество">
									</div>
								</div>
								<div class="item">
									<div class="form-field">
										<p>Комната угловая?</p>
										<div class="select-field small">
											<select>
												<option value="1">Да</option>
												<option value="2">Нет</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="component-footer">
								<button class="btn">Рассчитать</button>
								<div class="btn-reset">
									<i class="icon-reset"></i>
									<span>Сбросить</span>
								</div>
							</div>
						</div>
						<div class="component-result">
							<h4 class="result-caption">Результат расчета</h4>
							<p>Вам подойдет радиатор:</p>
							<a href="product-page.php" class="result-image">
								<img src="img/result-image.png" alt="">
								<span>plus R 500</span>
							</a>
							<p>Рекомендуемое количество секций:</p>
							<p class="bigger">9 штук</p>
							<a href="where-buy.php" class="btn btn-light small fullwidth">Где купить?</a>
						</div>
					</div>
				</div>
			</section>
			<?php include('page-parts/have-a-questions.inc.php'); ?>
		</div>
	</div>
<?php include('footer.php'); ?>