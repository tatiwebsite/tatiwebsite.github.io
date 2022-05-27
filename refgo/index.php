<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta charset="UTF-8">


	<title>Хранение и доставка заказов в температурном режиме для вашего интернет-магазина</title>

	<link rel="stylesheet" href="css/main.css"> 


	<meta property="og:url" content="https://refgo.ru/">
	<link rel="icon" href="https://refgo.ru/favicon.png" type="image/png">

	<?php include 'header.php'; ?>

</head>
<body>

<div class="topbar">
		<div class="wrapper">
			<div class="topbar__row">
			<a href="index.php" class="topbar__logo">
					<img data-src="svg/logo.svg" alt="REFGO">
				</a>
				<p class="topbar__descriptor">
					Доставка и хранение заказов в температурном режиме в&nbsp;Москве, Санкт-Петербурге и Нижнем Новгороде
				</p>
				<div class="topbar__contacts">
					<div class="topbar__messengers messengers">
						<h4>Задайте ваш вопрос в&nbsp;мессенджере</h4>
						<div class="row">
							<a href="https://wapp.click/79779652515" class="messenger" style="background-image: url(svg/whatsapp.svg);" target="_blank"></a>
							<!-- <a href="https://viber.click/79779652515" class="messenger" style="background-image: url(svg/viber.svg);" target="_blank"></a> -->
							<a href="https://tlgg.ru/@vb_refgo" class="messenger" style="background-image: url(svg/telegram.svg);" target="_blank"></a>
						</div>
					</div>
					<div class="topbar__contacts-links">
						<a href="tel:+7 (495) 532 44 47" class="topbar__phone">+7 (495) 532 44 47</a>
						<a href="mailto:hello@refgo.ru">hello@refgo.ru</a>
					</div>
					<a href="#freeDelivery" class="topbar__btn btn js-get-modal --light">Получить бесплатную доставку</a>
				</div>
			</div>
		</div>
		<nav class="topbar__nav">
			<div class="wrapper">
				<div class="topbar__nav-row">
					<div class="topbar__nav-col">
						<a href="uslugi.php" class="topbar__nav-item">Услуги</a>
						<a href="partners.php" class="topbar__nav-item">С кем работаем </a>
						<a href="dostavka.php" class="topbar__nav-item">Зоны доставки</a>
						<a href="vidy-gryzov.php" class="topbar__nav-item">Виды грузов</a>
						<a href="index.php" class="topbar__nav-item">О компании</a>
						<a href="sborka.php" class="topbar__nav-item">Исследования</a>
						<a href="sborka.php" class="topbar__nav-item">Контакты</a>
					</div>
					<button class="topbar__login"></button>
					<button class="topbar__burger">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</nav>
	</div>


	<header class="header" id="header">
		<div class="wrapper">
			<h1 class="header__title">
				Курьерская доставка продуктов в&nbsp;температурном режиме 
			</h1>
			<div class="header__temperature --big">
				от -18 C° до +4 C°
			</div>
			<div class="header__bullets">
				<div class="header__bullet">
					<div class="img-wrap">
						<img data-src="svg/icons/warehouse.svg" alt="">
					</div>
					<span>Комплексный фулфилмент для интернет-магазинов с&nbsp;поддержанием температуры</span>
				</div>
				<div class="header__bullet">
					<div class="img-wrap">
						<img data-src="svg/icons/route.svg" alt="">
					</div>
					<span>Адаптируем логистику под ваши бизнес-процессы и&nbsp;доставим продукцию точно в&nbsp;срок</span>
				</div>
				<div class="header__cta">
					<div class="cta">
						<a href="#getTheCost" class="header__btn btn js-get-modal --dark">Рассчитать стоимость доставки</a>
						<span class="header__hint">Рассчитайте точную стоимость и&nbsp;сроки доставки продукции до&nbsp;ваших клиентов</span>
					</div>
					<div class="video">
						<a href="https://www.youtube.com/watch?v=JRetpR0iAuo" class="header__video js-open-video">
							Посмотрите короткое видео о&nbsp;компании и&nbsp;узнайте, почему 97%&nbsp;клиентов оценивают нашу доставку на&nbsp;10&nbsp;из&nbsp;10
						</a>
					</div>
				</div>
			</div>
			<div class="header__cards">
				<div class="header__card">
					<picture>
						<source srcset="img/header-1.webp" type="image/webp">
						<img data-src="img/header-1.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Широкий спектр услуг:</h3>
					<span class="header__card-text">Ответственное хранение, комплектовка и&nbsp;сортировка заказов, забор товара со&nbsp;склада или производства, курьерская доставка, прием оплат, документооборот, возвраты</span>
				</div>
				<div class="header__card">
					<picture>
						<source srcset="img/header-2.webp" type="image/webp">
						<img data-src="img/header-2.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Прозрачная работа:</h3>
					<span class="header__card-text">Эквайринг с фискальными чеками, отчеты, интеграция с&nbsp;вашим сайтом и&nbsp;CRM</span>
				</div>
				<div class="header__card">
					<picture>
						<source srcset="img/header-3.webp" type="image/webp">
						<img data-src="img/header-3.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Инфраструктура:</h3>
					<span class="header__card-text">Холодильное и морозильное оборудование на&nbsp;складе в&nbsp;Москве и&nbsp;Санкт-Петербурге, штатные обученные водители в&nbsp;масках и&nbsp;перчатках. 230+&nbsp;машин в&nbsp;парке, 350+&nbsp;сотрудников в&nbsp;компании</span>
				</div>
			</div>
		</div>
		<picture>
			<source srcset="img/header--main.webp" type="image/webp">
			<img data-src="img/header--main.jpg" alt="" class="header__bg">
		</picture>
	</header>



	<section class="quiz" id="quiz">
		<div class="js-quiz">
			<form action="form.php" method="POST" class="js-form" onsubmit="ym(58303420,'reachGoal','submit'); return true;">

				<!-- Форма -->
				<input type="hidden" name="Форма" value="Квиз">

				<div class="quiz__start js-quiz-start">
					<div class="wrapper">
						<div class="quiz__heading">
							<h2 class="quiz__title g-title">
								Получите индивидуальное коммерческое предложение
							</h2>
							<div class="quiz__subtitle">
								<div class="img-wrap">
									<picture>
										<source srcset="img/quiz-helper.webp" type="image/webp">
										<img src="img/quiz-helper.jpg" alt="">
									</picture>
								</div>
								<span class="text">Ответьте на несколько простых вопросов и&nbsp;получите точный расчет стоимости и&nbsp;сроков доставки вашей продукции</span>
							</div>
						</div>
						<div class="quiz__body js-quiz-body">
							<div class="quiz__progress">
								<span class="quiz__progress-current js-quiz-progress"></span>
							</div>
							<div class="quiz__steps">
								<div class="quiz__step js-quiz-step --active">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Укажите вашу сферу деятельности</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">1</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Интернет-магазин" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Интернет-магазин</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-1-1.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Ресторан, кафе или бар" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Ресторан, кафе или бар</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-1-2.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Производство продуктов питания" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Производство продуктов питания</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-1-3.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Дистрибьютор " class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Дистрибьютор </span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-1-4.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Оффлайн магазин" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Оффлайн магазин</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-1-5.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Сфера деятельности" value="Свой вариант" class="q-answer__checkbox js-quiz-checkbox --another" data-another="false">
												<span class="q-answer__text">Другое</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="quiz__step js-quiz-step">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Укажите ваше среднее количество заказов в&nbsp;день</span>
											<span class="small">В зависимости от количества заказов формируется индивидуальная цена доставки до&nbsp;ваших клиентов</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">2</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="radio" hidden name="Заказов в день" value="от  до 50" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">от 1 до 50</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="radio" hidden name="Заказов в день" value="от 50 до 100" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">от 50 до 100</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="radio" hidden name="Заказов в день" value="от 100 до 500" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">от 100 до 500</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="radio" hidden name="Заказов в день" value="от 500 до 1000" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">от 500 до 1000</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="radio" hidden name="Заказов в день" value="от 500 до 1000" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">от 1000</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<!-- <div class="quiz__range q-range">
											<input type="range" name="Заказов в день" min="0" max="1000" value="120" step="10" class="q-range__input">
											<div class="q-range__row">
												<span class="q-range__hint --first">5 заказов</span>
												<span class="q-range__hint --second">500 заказов</span>
												<span class="q-range__hint --third">Более 1000 заказов</span>
											</div>
										</div> -->
									</div>
								</div>
								<div class="quiz__step js-quiz-step">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Какой тип продукции вы продаете?</span>
											<span class="small">У нас разработаны готовые оптимизированные решения для каждого вида продукции, при доставке которых требуется температурный режим</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">3</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Мясо" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Мясо</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-1.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Молочная продукция" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Молочная продукция</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-2.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Рыба и морепродукты" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Рыба и морепродукты</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-3.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Полуфабрикаты" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Полуфабрикаты</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-4.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Напитки" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Напитки</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-5.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Овощи и фрукты" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Овощи и фрукты</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-6.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Кондитерские изделия" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Кондитерские изделия</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-7.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Готовые блюда" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Готовые блюда</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-9.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<!-- <div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Заморозка" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Заморозка</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-3-8.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div> -->
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Тип продукции" value="Свой вариант" class="q-answer__checkbox js-quiz-checkbox --another" data-another="false">
												<span class="q-answer__text">Другое</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="quiz__step js-quiz-step">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Укажите, кто является вашими клиентами</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">4</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Физ. лица" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Физ. лица</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-4-1.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Маркетплейсы" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Маркетплейсы</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-4-2.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Торговые сети" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Торговые сети</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-4-3.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Дарксторы" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Дарксторы</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-4-4.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Кафе и рестораны" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Кафе и рестораны</span>
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-4-5.svg" alt=""></span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --small-icons">
											<label class="q-answer__label">
												<input type="radio" hidden name="Кто клиенты" value="Свой вариант" class="q-answer__checkbox js-quiz-checkbox --another" data-another="false">
												<span class="q-answer__text">Другое</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="quiz__step js-quiz-step">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Выберите регион доставки</span>
											<span class="small">Выбранный регион влияет на&nbsp;стоимость и&nbsp;сроки доставки</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">5</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="checkbox" hidden name="Регион" value="Москва и область" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Москва и область</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="checkbox" hidden name="Регион" value="Санкт-Петербург и область" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Санкт-Петербург и область</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="checkbox" hidden name="Регион" value="Нижний Новгород" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Нижний Новгород</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
										<div class="quiz__answer q-answer --text-center">
											<label class="q-answer__label">
												<input type="checkbox" hidden name="Регион" value="Другое" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__text">Другое</span>
												<span class="q-answer__bg"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="quiz__step js-quiz-step">
									<div class="quiz__question">
										<h3 class="quiz__question-text">
											<span class="big">Укажите необходимый температурный режим</span>
										</h3>
										<div class="quiz__question-number">
											Вопрос <span class="js-quiz-current">6</span> из <span class="js-quiz-total">6</span>
										</div>
									</div>
									<div class="quiz__row">
										<div class="quiz__answer q-answer --circles">
											<label class="q-answer__label">
												<input type="radio" hidden name="Температурный режим" value="– 18 °" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-6-1.svg" alt=""></span>
												<span class="q-answer__text">– 18 °</span>
											</label>
										</div>
										<div class="quiz__answer q-answer --circles">
											<label class="q-answer__label">
												<input type="radio" hidden name="Температурный режим" value="+ 4 °" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-6-2.svg" alt=""></span>
												<span class="q-answer__text">+ 4 °</span>
											</label>
										</div>
										<div class="quiz__answer q-answer --circles">
											<label class="q-answer__label">
												<input type="radio" hidden name="Температурный режим" value="Смешанный" class="q-answer__checkbox js-quiz-checkbox">
												<span class="q-answer__icon"><img data-src="svg/quiz/quiz-6-3.svg" alt=""></span>
												<span class="q-answer__text">Смешанный</span>
											</label>
										</div>
										<div class="quiz__answer q-answer --circles">
											<label class="q-answer__label">
												<input type="radio" hidden name="Температурный режим" value="+ 4 °" class="q-answer__checkbox js-quiz-checkbox --another" data-another="false">
												<span class="q-answer__icon"><span>Другое</span></span>
												<span class="q-answer__text">Другое</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="quiz__btns js-quiz-btns">
								<a href="#" class="quiz__btn btn --gray js-quiz-btn" data-direction="prev">Назад</a>
								<a href="#" class="quiz__btn btn --light js-quiz-btn" data-direction="next">Далее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="js-quiz-final" style="display: none;">
					<div class="quiz__final q-final">
						<div class="q-final__top">
							<div class="wrapper">
								<div class="q-final__row">
									<div class="q-final__col">
										<h3 class="q-final__title">
											Все готово!
										</h3>
										<div class="q-final__subtitle">
											Менеджер уже составляет КП для отправки
										</div>
										<div class="q-final__cta">
											<b>Заполните форму ниже:</b>
											<span>чтобы получить индивидуальное коммерческое предложение с&nbsp;точной стоимостью услуг</span>
										</div>
									</div>
									<div class="q-final__col">
										<div class="q-final__bullets">
											<h4 class="q-final__bullets-title">Также вы получите:</h4>
											<div class="q-final__bullet">
												<div class="img-wrap">
													<img data-src="svg/quiz/quiz-last-1.svg" alt="">
												</div>
												<span class="text">
													<b>День бесплатных доставок</b>
													<span>Вы получите до 10 бесплатных доставок в&nbsp;течение 1&nbsp;рабочего дня, чтобы протестировать наши услуги и&nbsp;уровень работы</span>
												</span>
											</div>
											<div class="q-final__bullet">
												<div class="img-wrap">
													<img data-src="svg/quiz/quiz-last-2.svg" alt="">
												</div>
												<span class="text">
													<b>Рекомендации</b>
													<span>По оптимизации логистики для экономии времени и денег вашей компании</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="q-final__bottom">
							<div class="wrapper">
								<div class="q-final__bottom-cnt">
									<h3 class="q-final__bottom-title">
										Всю информацию вы получите на&nbsp;почту. В&nbsp;течение 15&nbsp;минут в&nbsp;рабочее время вам перезвонит менеджер, чтобы уточнить детали
									</h3>
									<div class="q-final__bottom-form form">
										<input type="tel" name="Телефон" class="q-final__input form__input" placeholder="Ваш телефон" required>
										<button class="q-final__btn btn --dark">Получить коммерческое предложение</button>
									</div>
									<span class="q-final__policy policy">Нажимая на кнопку, вы соглашаетесь <a href="privacy/">с условиями обработки персональных данных</a></span>
								</div>
							</div>
							<picture>
								<source srcset="img/quiz-director.webp" type="image/webp">
								<img data-src="img/quiz-director.png" alt="" class="q-final__director">
							</picture>
							<div class="substrate q-final__substrate">
								<span class="substrate__line"></span>
								<span class="substrate__name">Чепик Александр <br>Александрович</span>
								<span class="substrate__position">Специалист по работе <br>с ключевыми <br>клиентами</span>
								<span class="substrate__line"></span>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>


	<!-- <section class="fulfillment" id="fulfillment">
		<div class="wrapper">
			<h2 class="fulfillment__title g-title">
				Фулфиллмент для интернет&#8209;магазинов
			</h2>
			<div class="fulfillment__subtitle g-subtitle-big">
				Вы получите все необходимые услуги по&nbsp;доставке, хранению и&nbsp;перевозке продукции рефрижераторами в&nbsp;температурном режиме <b>от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°</b>
			</div>
			<div class="fulfillment__row">
				<div class="fulfillment__item">
					<div class="img-wrap">
						<picture>
							<source srcset="img/fulfillment-1.webp" type="image/webp">
							<img data-src="img/fulfillment-1.png" alt="">
						</picture>
					</div>
					<span class="text">Заберем продукцию с&nbsp;вашего <br>склада или производства</span>
				</div>
				<div class="fulfillment__item">
					<div class="img-wrap">
						<picture>
							<source srcset="img/fulfillment-2.webp" type="image/webp">
							<img data-src="img/fulfillment-2.png" alt="">
						</picture>
					</div>
					<span class="text">Организуем хранение и комплектацию <br>продукции, а&nbsp;также выстроим <br>оптимальный маршрут доставки</span>
				</div>
				<div class="fulfillment__item">
					<div class="img-wrap">
						<picture>
							<source srcset="img/fulfillment-3.webp" type="image/webp">
							<img data-src="img/fulfillment-3.png" alt="">
						</picture>
					</div>
					<span class="text">Интегрируем статистику и&nbsp;данные <br>заказов в&nbsp;ваш личный кабинет</span>
				</div>
				<div class="fulfillment__item">
					<div class="img-wrap">
						<picture>
							<source srcset="img/fulfillment-4.webp" type="image/webp">
							<img data-src="img/fulfillment-4.png" alt="">
						</picture>
					</div>
					<span class="text">Вручим заказ вашему клиенту, <br>примем наличную или безналичную <br>оплату</span>
				</div>
			</div>
		</div>
	</section> -->
	

	<section class="services" id="services" style="margin-top: 0;">
		<div class="wrapper">
			<h2 class="services__title g-title">
				Наши услуги
			</h2>
			<div class="services__row">
				<div class="services__card">
					<picture>
						<source srcset="img/service-1.webp" type="image/webp">
						<img data-src="img/service-1.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Курьерская доставка рефрижератором</h4>
				</div>
				<div class="services__card">
					<picture>
						<source srcset="img/service-2.webp" type="image/webp">
						<img data-src="img/service-2.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Хранение</h4>
				</div>
				<div class="services__card">
					<picture>
						<source srcset="img/service-3.webp" type="image/webp">
						<img data-src="img/service-3.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Доставка в торговые сети</h4>
				</div>
				<div class="services__card">
					<picture>
						<source srcset="img/service-4.webp" type="image/webp">
						<img data-src="img/service-4.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Доставка продуктов для HoReCa</h4>
				</div>
				<div class="services__card">
					<picture>
						<source srcset="img/service-5.webp" type="image/webp">
						<img data-src="img/service-5.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Доставка в дарксторы</h4>
				</div>
				<div class="services__card">
					<picture>
						<source srcset="img/service-6.webp" type="image/webp">
						<img data-src="img/service-6.jpg" alt="" class="services__img">
					</picture>
					<h4 class="services__name">Cборные грузы</h4>
				</div>
			</div>
		</div>
	</section>




	<section class="types" id="types">
		<div class="wrapper">
			<h2 class="types__title g-title">
				Доставляем все виды продукции
			</h2>
			<div class="types__subtitle g-subtitle-big">
				Требующие перевозку рефрижератором в&nbsp;приготовленном или исходном состоянии
			</div>
			<div class="types__area">
				<div class="types__tabs">
					<a href="#type-1" class="types__tab tab js-tab --active">
						<img data-src="svg/types/type-tab-1--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-1--closed.svg" alt="" class="icon --closed">
						<span class="text">Мясо</span>
					</a>
					<a href="#type-2" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-2--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-2--closed.svg" alt="" class="icon --closed">
						<span class="text">Молочная продукция</span>
					</a>
					<a href="#type-3" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-3--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-3--closed.svg" alt="" class="icon --closed">
						<span class="text">Рыба и морепродукты</span>
					</a>
					<a href="#type-4" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-7--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-7--closed.svg" alt="" class="icon --closed">
						<span class="text">Готовая продукция</span>
					</a>
					<a href="#type-5" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-4--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-4--closed.svg" alt="" class="icon --closed">
						<span class="text">Полуфабрикаты</span>
					</a>
					<a href="#type-6" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-5--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-5--closed.svg" alt="" class="icon --closed">
						<span class="text">Напитки</span>
					</a>
					<a href="#type-7" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-6--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-6--closed.svg" alt="" class="icon --closed">
						<span class="text">Овощи и фрукты</span>
					</a>
					<a href="#type-8" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-8--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-8--closed.svg" alt="" class="icon --closed">
						<span class="text">Кондитерские изделия</span>
					</a>
					<a href="#type-9" class="types__tab tab js-tab">
						<img data-src="svg/types/type-tab-9--active.svg" alt="" class="icon --active">
						<img data-src="svg/types/type-tab-9--closed.svg" alt="" class="icon --closed">
						<span class="text">Сборные грузы</span>
					</a>
				</div>
				<div class="types__slides">
					<div id="type-1" class="js-tabslide --active">
						<h3 class="types__name">Доставка мяса и мясосодержащей продукции</h3>
						<picture>
							<source srcset="img/types/types-1.webp" type="image/webp">
							<img data-src="img/types/types-1.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-1-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Перевозим парное, остывшее, охлажденное, подмороженное и&nbsp;замороженное мясо</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-1-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Настроим и сохраним температуру в&nbsp;зависимости от&nbsp;вида мяса или мясной продукци</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-1-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим авто с рефрижераторами, которые точно соответствуют санитарным нормам</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-1-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-2" class="js-tabslide">
						<h3 class="types__name">Перевозка молочной продукции</h3>
						<picture>
							<source srcset="img/types/types-2.webp" type="image/webp">
							<img data-src="img/types/types-2.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-2-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Сохраним 100% свежесть продукции</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-2-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Исключим риск порчи продукции при&nbsp;хранении и&nbsp;транспортировке</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-2-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Тщательно дезинфицируем и&nbsp;очищаем транспортное средство перед перевозкой</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-2-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-3" class="js-tabslide">
						<h3 class="types__name">Перевозка рыбы и морепродуктов</h3>
						<picture>
							<source srcset="img/types/types-3.webp" type="image/webp">
							<img data-src="img/types/types-3.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-3-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Сохраним 100% свежесть продукции</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-3-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Исключим риск порчи продукции при&nbsp;хранении и&nbsp;транспортировке</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-3-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Перевезем рыбную продукцию любого вида заморозки и&nbsp;охлаждения</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-3-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-4" class="js-tabslide">
						<h3 class="types__name">Готовая продукция</h3>
						<picture>
							<source srcset="img/types/types-4.webp" type="image/webp">
							<img data-src="img/types/types-4.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-7-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Доставляем любые виды готовой продукции: ланчбоксы, готовые рационы питания, обеды, полуфабрикаты и&nbsp;другие виды готовой продукции</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-7-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Работаем с интернет-магазинами, кафе, ресторанами, фермерами и&nbsp;доставляем их&nbsp;продукцию прямо в&nbsp;руки клиентам</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-7-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим авто с требуемой вентиляционной системой и&nbsp;поддержанием температурного режима</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-7-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-5" class="js-tabslide">
						<h3 class="types__name">Перевозка полуфабрикатов</h3>
						<picture>
							<source srcset="img/types/types-5.webp" type="image/webp">
							<img data-src="img/types/types-5.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-4-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Работаем с замороженными и&nbsp;охлажденными полуфабрикатами</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-4-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">При необходимости подберем оптимальную тару и&nbsp;упаковку</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-4-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим авто с&nbsp;рефрижераторами, которые точно соответствуют требованиям санитарных норм</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-4-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-6" class="js-tabslide">
						<h3 class="types__name">Перевозка напитков</h3>
						<picture>
							<source srcset="img/types/types-6.webp" type="image/webp">
							<img data-src="img/types/types-6.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-5-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Работаем с алкогольными и&nbsp;безалкогольными напитками</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-5-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">В наличии все необходимые разрешения для перевозки грузов 3&nbsp;класса</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-5-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим гермитичные авто с&nbsp;рефрижераторами, которые не&nbsp;пропускают свет </span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-5-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-7" class="js-tabslide">
						<h3 class="types__name">Перевозка овощей и фруктов</h3>
						<picture>
							<source srcset="img/types/types-7.webp" type="image/webp">
							<img data-src="img/types/types-7.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-6-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Поможем подобрать тару и&nbsp;упаковку для&nbsp;вашей продукции</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-6-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Исключим риск порчи продукции при&nbsp;хранении и&nbsp;транспортировке</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-6-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим авто с требуемой вентиляционной системой и&nbsp;поддержанием температурного режима</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-6-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Соблюдаем все нормы и&nbsp;требования при&nbsp;перевозке продукции</span>
							</div>
						</div>
					</div>
					<div id="type-8" class="js-tabslide">
						<h3 class="types__name">Перевозка кондитерских изделий</h3>
						<picture>
							<source srcset="img/types/types-8.webp" type="image/webp">
							<img data-src="img/types/types-8.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-8-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Подберем температурный режим и&nbsp;авто для каждого вида продукции</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-8-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Исключим риск порчи продукции при&nbsp;хранении и&nbsp;транспортировке</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-8-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Предоставим авто с требуемой вентиляционной системой и&nbsp;поддержанием температурного режима</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-8-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Передадим всю продукцию покупателю и&nbsp;подпишем необходимые документы</span>
							</div>
						</div>
					</div>
					<div id="type-9" class="js-tabslide">
						<h3 class="types__name">Сборные грузы</h3>
						<picture>
							<source srcset="img/types/types-9.webp" type="image/webp">
							<img data-src="img/types/types-9.jpg" alt="" class="types__img">
						</picture>
						<div class="types__bullets">
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-9-1.svg" alt="" class="types__icon">
								</div>
								<span class="text">Мультирежим позволяет перевозить продукцию разными температурными режимами в&nbsp;одном авто</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-9-2.svg" alt="" class="types__icon">
								</div>
								<span class="text">Ежедневные отправки с&nbsp;Москвы и&nbsp;Санкт&#8209;Петербурга от&nbsp;1&nbsp;места</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-9-3.svg" alt="" class="types__icon">
								</div>
								<span class="text">Поддержание и контроль температурного режима на&nbsp;всем протяжении перевозки</span>
							</div>
							<div class="types__bullet">
								<div class="img-wrap">
									<img data-src="svg/types/types-9-4.svg" alt="" class="types__icon">
								</div>
								<span class="text">Передадим всю продукцию покупателю и&nbsp;подпишем необходимые документы</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- <section class="advantages" id="advantages">
		<div class="wrapper">
			<div class="advantages__heading">
				<h2 class="advantages__title g-title">
					Освободите время для действительно важных дел
				</h2>
				<div class="advantages__subtitle">
					<div class="img-wrap">
						<picture>
							<source srcset="img/advantages-manager.webp" type="image/webp">
							<img data-src="img/advantages-manager.jpg" alt="">
						</picture>
					</div>
					<span class="text">А все вопросы по логистике и&nbsp;хранению мы возьмем на&nbsp;себя</span>
				</div>
			</div>
			<div class="advantages__cnt">
				<div class="advantages__item">
					<div class="advantages__info">
						<h3 class="advantages__name">Вы можете хранить продукцию на нашем складе</h3>
						<div class="advantages__feature">Поддерживаем температурный режим на нашем складе</div>
						<div class="advantages__feature">Заберем продукцию с вашего склада, укомплектуем заказ и&nbsp;проведем инвентаризацию</div>
					</div>
					<picture>
						<source srcset="img/advantages-1.webp" type="image/webp">
						<img data-src="img/advantages-1.jpg" alt="" class="advantages__img">
					</picture>
				</div>
				<div class="advantages__item">
					<div class="advantages__info">
						<h3 class="advantages__name">Доставляем вашу продукцию прямо в руки клиентам</h3>
						<div class="advantages__feature">Ваш клиент получает продукцию точно в срок и с сохранением всех качеств</div>
						<div class="advantages__feature">Ваши клиенты смогут выбирать дату и время доставки</div>
					</div>
					<picture>
						<source srcset="img/advantages-2.webp" type="image/webp">
						<img data-src="img/advantages-2.jpg" alt="" class="advantages__img">
					</picture>
				</div>
				<div class="advantages__item">
					<div class="advantages__info">
						<h3 class="advantages__name">Принимаем оплату, выдаем чек, оставляем приятное впечатление</h3>
						<div class="advantages__feature">Выдаем фискальные чеки, принимаем любую оплату и&nbsp;отчитываемся перед вами</div>
						<div class="advantages__feature">Ваш личный менеджер, поможет сориентироваться в любой ситуации</div>
					</div>
					<picture>
						<source srcset="img/advantages-3.webp" type="image/webp">
						<img data-src="img/advantages-3.jpg" alt="" class="advantages__img">
					</picture>
				</div>
			</div>
			<div class="advantages__cta">
				<a href="#freeDelivery" class="advantages__btn btn js-get-modal --dark">Оставить заявку</a>
				<span class="advantages__hint">Оставьте заявку и получите подробный план организации логистики для вашей компании со стоимостью и сроками доставки</span>
			</div>
		</div>
	</section> -->




	<section class="circles" id="circles">
		<div class="wrapper">
			<div class="circles__row">
				<div class="circles__left">
					<h2 class="circles__title g-title-big">
						Вы можете быть спокойны за&nbsp;репутацию компании перед клиентами
					</h2>
					<div class="circles__info">
						<img data-src="svg/circles-info.svg" alt="">
					</div>
				</div>
				<div class="circles__right">
					<picture>
						<source srcset="img/circle-img.webp" type="image/webp">
						<img data-src="img/circle-img.jpg" alt="" class="circles__img">
					</picture>
					<span class="circles__text --1">Все курьеры проходят обязательное обучение и&nbsp;имеют мед. книжки</span>
					<span class="circles__text --2">Курьер вежливо вручит продукцию, поблагодарит за&nbsp;заказ и&nbsp;представит вашу компанию в&nbsp;лучшем свете</span>
					<span class="circles__text --3">Каждый курьер выдает заказ клиенту в&nbsp;масках и&nbsp;перчатках</span>
				</div>
			</div>
		</div>
	</section>




	<section class="wharranty" id="wharranty">
		<div class="wrapper">
			<div class="wharranty__row">
				<div class="wharranty__cnt">
					<h2 class="wharranty__title g-title-big">
						Вы получите гарантию того, что заказ будет у клиента вовремя
					</h2>
					<div class="wharranty__subtitle g-subtitle">
						Несем ответственность за сохранность вашего товара, а&nbsp;также за сроки доставки
					</div>
					<div class="wharranty__bullets">
						<div class="wharranty__bullet">
							<h4 class="wharranty__bullet-title">
								Окно доставки — 3 часа
							</h4>
							<span class="wharranty__bullet-text">
								В отличие от других курьеров, <br>которых приходится ждать весь день
							</span>
						</div>
						<div class="wharranty__bullet">
							<h4 class="wharranty__bullet-title">
								Доставка 7 дней <br>в&nbsp;неделю с&nbsp;7:00&nbsp;до&nbsp;23:00
							</h4>
							<span class="wharranty__bullet-text">
								Без доплат в праздничные <br>и&nbsp;выходные&nbsp;дни
							</span>
						</div>
					</div>
				</div>
				<div class="wharranty__img">
					<picture>
						<source srcset="img/wharranty.webp" type="image/webp">
						<img data-src="img/wharranty.jpg" alt="">
					</picture>
				</div>
			</div>
		</div>
	</section>



	<section class="holiday" id="holiday">
		<div class="wrapper">
			<div class="holiday__cnt">
				<h2 class="holiday__title g-title">
					Готовы подстраиваться под&nbsp;ваши бизнес-процессы
				</h2>
				<div class="holiday__bullets">
					<div class="holiday__bullet">
						<div class="img-wrap">
							<div><img data-src="svg/holiday.svg" alt=""></div>
						</div>
						<span class="text">Заранее готовимся к сезонным или пиковым дням в вашем бизнесе, чтобы обработать любой объем заказов</span>
					</div>
					<div class="holiday__bullet">
						<div class="img-wrap">
							<div><img data-src="svg/calendar.svg" alt=""></div>
						</div>
						<span class="text">Доставим заказ день в день, если ваши клиенты не привыкли ждать</span>
					</div>
				</div>
				<a href="#freeDelivery" class="holiday__btn btn js-get-modal --dark">Получить бесплатную доставку первого заказа</a>
				<div class="substrate holiday__substrate">
					<span class="substrate__line"></span>
					<span class="substrate__name">Савчук Нина <br>Николаевна</span>
					<span class="substrate__position">Генеральный <br>директор</span>
					<span class="substrate__line"></span>
				</div>
				<picture>
					<source srcset="img/holiday-manager.webp" type="image/webp">
					<img data-src="img/holiday-manager.png" alt="" class="holiday__manager">
				</picture>
			</div>
		</div>
	</section>


	<section class="auto" id="auto">
		<div class="wrapper">
			<div class="auto__row">
				<div class="auto__img">
					<picture>
						<source srcset="img/auto.webp" type="image/webp">
						<img data-src="img/auto.jpg" alt="">
					</picture>
				</div>
				<div class="auto__cnt">
					<h2 class="auto__title g-title">
						В вашем распоряжении автопарк из&nbsp;200+&nbsp;автомобилей
					</h2>
					<div class="auto__subtitle g-subtitle-big">
						Каждый из которых с терморегистратором, ГЛОНАСС и&nbsp;настраиваемым температурным режимом <br><b>от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°</b>
					</div>
					<div class="auto__bullets">
						<div class="auto__bullet">
							<div class="img-wrap">
								<img data-src="svg/frost.svg" alt="">
							</div>
							<span class="text">Все авто оборудованы холодильниками «Сarrier» для сохранения заданного температурного режима на&nbsp;протяжении всего маршрута</span>
						</div>
						<div class="auto__bullet">
							<div class="img-wrap">
								<img data-src="svg/bag.svg" alt="">
							</div>
							<span class="text">Возможна перевозка продукции с&nbsp;разными температурными условиями в&nbsp;формате «Мультирежим»</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="private" id="private">
		<div class="wrapper">
			<div class="private__cnt">
				<h2 class="private__title g-title">
					Вы получите доступ в личный кабинет со&nbsp;всей статистикой и&nbsp;информацией
				</h2>
				<div class="private__subtitle g-subtitle-big">
					Отслеживайте данные из любой точки мира даже с&nbsp;мобильного устройства
				</div>
				<div class="private__about">
					<h4 class="private__about-title">Личный кабинет содержит:</h4>
					<ul class="private__about-list">
						<li class="private__about-item">Документы, накладные и&nbsp;отчеты с&nbsp;удобным поиском</li>
						<li class="private__about-item">Подробную статистику заказов за&nbsp;любой промежуток времени</li>
						<li class="private__about-item">Импорт и экспорт данных и&nbsp;документов, а&nbsp;также удобная связь с&nbsp;менеджером</li>
					</ul>
				</div>
			</div>
			<!-- <div class="private__cta">
				<a href="#" class="private__btn btn js-get-modal --dark">Зарегистрировать личный кабинет</a>
			</div> -->
			<picture>
			<source srcset="img/private.webp" type="image/webp">
			<img data-src="img/private.png" alt="" class="private__bg">
		</picture>
		</div>
		
	</section>



	<section class="areas" id="areas">
		<div class="wrapper">
			<div class="areas__heading">
				<h2 class="areas__title g-title">
					Широкая зона доставки в&nbsp;Москве и&nbsp;Санкт-Петербурге
				</h2>
				<div class="areas__subtitle g-subtitle-big">Посмотрите на условия доставки в&nbsp;режиме от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C° в&nbsp;разных регионах</div>
			</div>
			<div class="areas__tabs">
				<a href="#area-1" class="areas__tab tab js-tab --active">Москва и область</a>
				<a href="#area-2" class="areas__tab tab js-tab">Санкт-Петербург и область</a>
				<!-- <a href="#area-3" class="areas__tab tab js-tab">Нижний Новгород и область</a> -->
			</div>
			<div class="areas__slides">
				<div id="area-1" class="areas__slide js-tabslide --active">
					<iframe src="https://yandex.ru/map-widget/v1/-/CCQxm4G0sC" loading="lazy" width="100%" frameborder="0"></iframe>
				</div>
				<div id="area-2" class="areas__slide js-tabslide">
					<iframe src="https://yandex.ru/map-widget/v1/-/CCUq74xbLA" loading="lazy" width="100%" frameborder="0"></iframe>
				</div>
				<!-- <div id="area-3" class="areas__slide js-tabslide">
					<div style="position:relative;overflow:hidden;height: 100%;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&ut.." style="color:#eee;font-size:12px;position:absolute;top:0px;left: 0;right: 0;bottom: 0;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?ll=37.696739,55.726082.." style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — транспорт, навигация, поиск мест</a><iframe src="https://yandex.ru/map-widget/v1/-/CCQxm4G0sC" width="100%" height="590" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
				</div> -->
				<div class="areas__hint">Кликайте на зону доставки, чтобы увидеть условия</div>
			</div>
		</div>
	</section>



	<section class="offer" id="offer">
		<div class="wrapper">
			<div class="offer__cnt">
				<h2 class="offer__title g-title-small">
					Получите индивидуальное коммерческое предложение
				</h2>
				<div class="offer__subtitle g-subtitle-small">
					С расчетом стоимости и сроков доставки продукции до&nbsp;ваших клиентов
				</div>
				<picture>
					<source srcset="img/offer.webp" type="image/webp">
					<img data-src="img/offer.jpg" alt="" class="offer__bg">
				</picture>
				<div class="offer__cta">
					<h4 class="offer__cta-title">
						Заполните форму ниже:
					</h4>
					<div class="offer__cta-text">
						Специалист перезвонит вам в&nbsp;рабочее время, чтобы уточнить детали и&nbsp;составить предложение
					</div>
					<form action="form.php" method="POST"  class="offer__cta-form form js-form" onsubmit="ym(58303420,'reachGoal','submit'); return true;">

						<!-- Форма -->
						<input type="hidden" name="Форма" value="Получить КП">


						<input type="text" name="Имя" class="input form__input offer__cta-input" placeholder="Имя">
						<input type="mail" name="Почта" class="input form__input offer__cta-input" placeholder="Почта">
						<input type="tel" class="form__input offer__cta-input" name="Телефон" placeholder="Ваш телефон" required>
						<button class="offer__cta-btn btn --dark">Получить коммерческое предложение</button>
					</form>
					<span class="policy offer__policy">
						Нажимая на кнопку, вы соглашаетесь <a href="privacy">с&nbsp;условиями обработки персональных данных</a>
					</span>
				</div>
			</div>
		</div>
		
	</section>



	<section class="about" id="about">
		<div class="wrapper">
			<h2 class="about__title g-title-big">
				REFGO — это комплексный фулфилмент и&nbsp;курьерская доставка для&nbsp;бизнеса
			</h2>
			<div class="about__subtitle g-subtitle-big">
				Мы первая курьерская компания с возможностью поддержания температурного режима перевозимого груза, от&nbsp;момента получения его у&nbsp;грузовладельца, до&nbsp;момента передачи грузополучателю
			</div>
			<div class="about__features">
				<div class="about__feature">
					<span class="number">350+</span>
					<span class="text">Сотрудников</span>
				</div>
				<span class="about__separator"></span>
				<div class="about__feature">
					<span class="number">230+</span>
					<span class="text">Машин <br>в&nbsp;автопарке</span>
				</div>
				<span class="about__separator"></span>
				<div class="about__feature">
					<span class="number">1 500+</span>
					<span class="text">Заказов доставляем <br>ежедневно</span>
				</div>
				<span class="about__separator"></span>
				<div class="about__feature">
					<span class="number">97%</span>
					<span class="text">Клиентов оценивают качество <br>нашей доставки на&nbsp;10&nbsp;из&nbsp;10</span>
				</div>
			</div>
			<div class="about__gallery">
				<div class="about__slide">
					<picture>
						<source srcset="img/gallery-1.webp" type="image/webp">
						<img data-src="img/gallery-1.jpg" alt="" class="about__img">
					</picture>
				</div>
				<div class="about__slide">
					<picture>
						<source srcset="img/gallery-2.webp" type="image/webp">
						<img data-src="img/gallery-2.jpg" alt="" class="about__img">
					</picture>
				</div>
				<div class="about__slide">
					<picture>
						<source srcset="img/gallery-3.webp" type="image/webp">
						<img data-src="img/gallery-3.jpg" alt="" class="about__img">
					</picture>
				</div>
				<div class="about__slide">
					<picture>
						<source srcset="img/gallery-4.webp" type="image/webp">
						<img data-src="img/gallery-4.jpg" alt="" class="about__img">
					</picture>
				</div>
			</div>
		</div>
	</section>




	<section class="director" id="director">
		<div class="wrapper">
			<div class="director__cnt">
				<h2 class="director__title g-title">
					Самое важное в нашей работе — прозрачность и&nbsp;честность перед клиентом
				</h2>
				<div class="director__quote">
					<p>
						Для нас очень важна репутация нашей компании, а&nbsp;также репутация компаний наших клиентов.
					</p>
					<p>
						Мы создали и оптимизировали целую систему, которая позволяет бизнесу передать все обязательства по&nbsp;логистике и&nbsp;доставке заказов на аутсорс, при&nbsp;этом повышая репутацию и&nbsp;делая ваш бизнес более узнаваемым и&nbsp;прибыльным
					</p>
				</div>
			</div>
		</div>
		<div class="substrate director__substrate">
			<span class="substrate__line"></span>
			<span class="substrate__name">Чепик Александр <br>Александрович</span>
			<span class="substrate__position">Специалист по работе <br>с ключевыми <br>клиентами</span>
			<span class="substrate__line"></span>
		</div>
		<picture>
			<source srcset="img/director.webp" type="image/webp">
			<img data-src="img/director.png" alt="" class="director__img">
		</picture>
	</section>



	<!-- <section class="reviews" id="reviews">
		<div class="wrapper">
			<h2 class="reviews__title g-title">
				Работаем с компаниями разного масштаба
			</h2>
			<div class="reviews__subtitle g-subtitle-big">
				От небольшого производства домашних продуктов или локального поставщика до&nbsp;крупных интернет-магазинов и&nbsp;федеральных сетей
			</div>
			<div class="reviews__slider js-reviews-slider">
				<div class="reviews__item review">
					<div class="review__row">
						<div class="review__left">
							<picture>
								<source srcset="img/review-1.webp" type="image/webp">
								<img data-src="img/review-1.jpg" alt="" class="review__img">
							</picture>
							<a href="#" class="review__link" style="background-image: url(img/review-1-view.jpg);">Посмотреть отзыв</a>
						</div>
						<div class="review__right">
							<h3 class="review__title">
								Ежедневная доставка 250+ заказов с&nbsp;особыми условиями для перевозки
							</h3>
							<p class="review__text">
								С 2017 года по настоящее время мы работаем с&nbsp;интернет&#8209;магазином «АВС» и&nbsp;комплексно закрываем вопросы&nbsp;логистики. 
							</p>
							<p class="review__text">
								В 2020 году «АВС» выросли в&nbsp;15&nbsp;раз из-за пандемии и&nbsp;повышенного спроса на доставку. Чтобы справиться с новыми объемами, мы приобрели более 20&nbsp;единиц автотранспорта за&nbsp;3&nbsp;дня
							</p>
							<ul class="review__list">
								<li class="review__list-item">
									<b>Период сотрудничества:</b> 
									<span>С 2017 года по сегодняшний день</span>
								</li>
								<li class="review__list-item">
									<b>Продукция:</b>
									<span>Мясо, рыба, полуфабрикаты</span>
								</li>
								<li class="review__list-item">
									<b>Среднее количество доставок в день:</b>
									<span>250 доставок</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="reviews__item review">
					<div class="review__row">
						<div class="review__left">
							<picture>
								<source srcset="img/review-1.webp" type="image/webp">
								<img data-src="img/review-1.jpg" alt="" class="review__img">
							</picture>
							<a href="#" class="review__link" style="background-image: url(img/review-1-view.jpg);">Посмотреть отзыв</a>
						</div>
						<div class="review__right">
							<h3 class="review__title">
								Ежедневная доставка 250+ заказов с&nbsp;особыми условиями для перевозки
							</h3>
							<p class="review__text">
								С 2017 года по настоящее время мы работаем с&nbsp;интернет&#8209;магазином «АВС» и&nbsp;комплексно закрываем вопросы&nbsp;логистики. 
							</p>
							<p class="review__text">
								В 2020 году «АВС» выросли в&nbsp;15&nbsp;раз из-за пандемии и&nbsp;повышенного спроса на доставку. Чтобы справиться с новыми объемами, мы приобрели более 20&nbsp;единиц автотранспорта за&nbsp;3&nbsp;дня
							</p>
							<ul class="review__list">
								<li class="review__list-item">
									<b>Период сотрудничества:</b> 
									<span>С 2017 года по сегодняшний день</span>
								</li>
								<li class="review__list-item">
									<b>Продукция:</b>
									<span>Мясо, рыба, полуфабрикаты</span>
								</li>
								<li class="review__list-item">
									<b>Среднее количество доставок в день:</b>
									<span>250 доставок</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->



	<section class="clients" id="clients">
		<div class="wrapper">
			<h2 class="clients__title g-title">
				Более 100 клиентов на&nbsp;постоянном обслуживании
			</h2>
			<div class="clients__slider js-clients-slider">
				<div class="clients__item">
					<picture>
						<source srcset="img/client-1.webp" type="image/webp">
						<img data-src="img/client-1.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-2.webp" type="image/webp">
						<img data-src="img/client-2.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-3.webp" type="image/webp">
						<img data-src="img/client-3.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-4.webp" type="image/webp">
						<img data-src="img/client-4.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-5.webp" type="image/webp">
						<img data-src="img/client-5.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-6.webp" type="image/webp">
						<img data-src="img/client-6.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-7.webp" type="image/webp">
						<img data-src="img/client-7.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-8.webp" type="image/webp">
						<img data-src="img/client-8.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-9.webp" type="image/webp">
						<img data-src="img/client-9.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-10.webp" type="image/webp">
						<img data-src="img/client-10.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-11.webp" type="image/webp">
						<img data-src="img/client-11.png" alt="" class="clients__logo">
					</picture>
				</div>
				<div class="clients__item">
					<picture>
						<source srcset="img/client-12.webp" type="image/webp">
						<img data-src="img/client-12.png" alt="" class="clients__logo">
					</picture>
				</div>
			</div>
		</div>
	</section>




	<section class="office" id="office">
		<div class="wrapper">
			<h2 class="office__title g-title-big">
				Приезжайте к нам в&nbsp;гости!
			</h2>
			<div class="office__subtitle g-subtitle-hight">
				Вы сможете обсудить все вопросы лично с&nbsp;ведущим специалистом компании
			</div>
			<div class="office__tabs">
				<a href="#office-1" class="office__tab tab js-tab --active"  data-coordinates="55.729970, 37.689132">Москва и область</a>
				<a href="#office-2" class="office__tab tab js-tab"  data-coordinates="59.995912, 30.295153">Санкт-Петербург и область</a>
				<!-- <a href="#office-3" class="office__tab tab js-map-toggler">Нижний Новгород и область</a> -->
			</div>
			<div class="office_slides">
				<div id="office-1" class="js-tabslide --active">
					<div class="office__info">
						<div class="office__item">
							<span>Адрес:</span>
							<address>Талахина, д 41, с 64</address>
						</div>
						<div class="office__item">
							<span>Телефон:</span>
							<a href="tel:+7 (495) 532 44 47">+7 (495) 532 44 47</a>
						</div>
						<div class="office__item">
							<span>График работы:</span>
							<b>с 6:00 до 23:00</b>
						</div>
						<div class="office__item">
							<span>E-mail:</span>
							<a href="mailto:Hello@refgo.ru">Hello@refgo.ru</a>
						</div>
					</div>
				</div>
				<div id="office-2" class="js-tabslide">
					<div class="office__info">
						<div class="office__item">
							<span>Адрес:</span>
							<address>Генерала Хрулева, д 7</address>
						</div>
						<div class="office__item">
							<span>Телефон:</span>
							<a href="tel:+7 (495) 532 44 47">+7 (495) 532 44 47</a>
						</div>
						<div class="office__item">
							<span>График работы:</span>
							<b>с 6:00 до 23:00</b>
						</div>
						<div class="office__item">
							<span>E-mail:</span>
							<a href="mailto:Hello@refgo.ru">Hello@refgo.ru</a>
						</div>
					</div>
				</div>
				<div class="js-map office__map" id="map"></div>
			</div>
		</div>
	</section>




	<section class="final" id="final">
		<div class="wrapper">
			<div class="final__cnt">
				<h2 class="final__title g-title-big">
					Получите 10 бесплатных доставок
				</h2>
				<div class="final__subtitle">
					Вы можете протестировать наши услуги
				</div>
				<p class="final__text">
					Получите до 10 бесплатных доставок в&nbsp;течении 1&nbsp;рабочего дня до&nbsp;ваших клиентов в&nbsp;температурном режиме от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°
				</p>
				<div class="final__cta">
					<h4 class="final__cta-title">
						Заполните форму ниже:
					</h4>
					<div class="final__cta-text">
						Специалист перезвонит вам в&nbsp;рабочее время, чтобы уточнить детали и&nbsp;составить предложение
					</div>
					<form action="form.php" method="POST"  class="final__cta-form form js-form" onsubmit="ym(58303420,'reachGoal','submit'); return true;">

						<!-- Форма -->
						<input type="hidden" name="Форма" value="10 бесплатных доставок (последний блок)">


						<input type="text" name="Имя" class="input form__input final__cta-input" placeholder="Имя">
						<input type="mail" name="Почта" class="input form__input final__cta-input" placeholder="Почта">
						<input type="tel" class="final__cta-input form__input" name="Телефон" placeholder="Ваш телефон" required>
						<button class="final__cta-btn btn --dark">Получить бесплатную доставку</button>
					</form>
				</div>
				<span class="policy final__policy">
					Нажимая на кнопку, вы соглашаетесь <a href="privacy">с&nbsp;условиями обработки персональных данных</a>
				</span>
			</div>
		</div>
		<div class="substrate final__substrate">
			<span class="substrate__line"></span>
			<span class="substrate__name">Благов Виталий <br>Владимирович</span>
			<span class="substrate__position">Руководитель <br>отдела продаж </span>
			<span class="substrate__line"></span>
		</div>
		<picture>
			<source srcset="img/final.webp" type="image/webp">
			<img data-src="img/final.png" alt="" class="final__img">
		</picture>
	</section>



	<footer class="footer" id="footer">
		<div class="wrapper">
			<div class="footer__top">
				<a href="/" class="footer__logo">
					<img data-src="svg/logo--footer.svg" alt="REFGO">
				</a>
				<p class="footer__descriptor">
					Доставка и хранение заказов в температурном режиме в&nbsp;Москве, Санкт-Петербурге и Нижнем Новгороде
				</p>
				<div class="footer__contacts">
					<div class="footer__messengers messengers">
						<h4>Задайте ваш вопрос в&nbsp;мессенджере</h4>
						<div class="row">
							<a href="https://wapp.click/79779652515" class="messenger" style="background-image: url(svg/whatsapp.svg);"></a>
							<!-- <a href="https://viber.click/79779652515" class="messenger" style="background-image: url(svg/viber.svg);"></a> -->
							<a href="https://tlgg.ru/@vb_refgo" class="messenger" style="background-image: url(svg/telegram.svg);"></a>
						</div>
					</div>
					<div class="footer__contacts-links">
						<a href="tel:+7 (495) 532 44 47" class="footer__phone">+7 (495) 532 44 47</a>
						<a href="mailto:hello@refgo.ru">hello@refgo.ru</a>
					</div>
					<!-- <a href="#" class="footer__btn btn js-get-modal --light">Личный кабинет</a> -->
				</div>
			</div>
			<nav class="footer__nav">
				<div class="footer__nav-row">
					<a href="https://refgo.ru" class="footer__nav-item">Курьерская доставка</a>
					<a href="https://refgo.ru/sborka.php" class="footer__nav-item">Сборные грузы</a>
				</div>
			</nav>
			<div class="footer__bottom">
				<span class="footer__reserved">Все права защищены</span>
				<a href="/privacy" class="footer__policy">Политика конфиденциальности</a>
				<div class="footer__links">
					<a href="https://www.instagram.com/refgo.ru/ " target="_blank">Instagram</a>
					<a href="https://www.youtube.com/channel/UCKTkMfEtNxeFYErei4aZc2g" target="_blank">YouTube</a>
					<a href="https://m.facebook.com/RefGo/ " target="_blank">Facebook</a>
				</div>
			</div>
		</div>
	</footer>



	<!-- Модальные окна -->

	<!-- Бесплатная доставка -->

	<div class="modal mfp-hide" id="freeDelivery">
		<button class="modal__close js-close-modal"></button>
		<div class="modal__cnt">
			<h3 class="modal__title">
				Получите 10 бесплатных доставок
			</h3>
			<div class="modal__subtitle">
				Вы можете протестировать наши услуги
			</div>
			<div class="modal__text">
				Получите до 10 бесплатных доставок в&nbsp;течении 1&nbsp;рабочего дня до&nbsp;ваших клиентов в&nbsp;температурном режиме от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°
			</div>
			<div class="modal__cta">
				<h4 class="modal__cta-title">
					Заполните форму ниже:
				</h4>
				<div class="modal__cta-text">
					Специалист перезвонит вам в&nbsp;рабочее время, чтобы уточнить детали и составить предложение
				</div>
			</div>
			<form action="form.php" method="POST" class="modal__form form js-form" onsubmit="ym(58303420,'reachGoal','submit'); return true;">

				<!-- Форма -->
				<input type="hidden" name="Форма" value="10 бесплатных доставок (модальное окно)">


				<input type="text" name="Имя" class="input form__input modal__input" placeholder="Имя">
				<input type="mail" name="Почта" class="input form__input modal__input" placeholder="Почта">
				<input type="tel" name="Телефон" class="input form__input modal__input" required placeholder="Телефон">
				<button class="modal__btn btn --dark">Получить бесплатную доставку</button>
			</form>
			<span class="policy modal__policy">Нажимая на кнопку, вы соглашаетесь <a href="/privacy">с условиями обработки персональных данных</a></span>
		</div>
		<div class="substrate modal__substrate">
			<span class="substrate__line"></span>
			<span class="substrate__name">Благов Виталий <br>Владимирович</span>
			<span class="substrate__position">Руководитель <br>отдела продаж</span>
			<span class="substrate__line"></span>
		</div>
		<div class="modal__manager">
			<picture>
				<source srcset="img/modal-manager.webp" type="image/webp">
				<img data-src="img/modal-manager.png" alt="" class="modal__img">
			</picture>
		</div>
	</div>

	<!-- Рассчитать стоимость -->

	<div class="modal mfp-hide" id="getTheCost">
		<button class="modal__close js-close-modal"></button>
		<div class="modal__cnt">
			<h3 class="modal__title">
				Получите расчет стоимости доставки продукции для вашей компании
			</h3>
			<div class="modal__text">
				Учтем ваши пожелания, подберем необходимую зону доставки и&nbsp;составим индивидуальное предложение
			</div>
			<div class="modal__cta">
				<h4 class="modal__cta-title">
					Заполните форму ниже:
				</h4>
				<div class="modal__cta-text">
					Специалист перезвонит вам в&nbsp;рабочее время, чтобы уточнить детали и составить предложение
				</div>
			</div>
			<form action="form.php" method="POST" class="modal__form form js-form" onsubmit="ym(58303420,'reachGoal','submit'); return true;">

				<!-- Форма -->
				<input type="hidden" name="Форма" value="Расчет стоимости">


				<input type="text" name="Имя" class="input form__input modal__input" placeholder="Имя">
				<input type="mail" name="Почта" class="input form__input modal__input" placeholder="Почта">
				<input type="tel" name="Телефон" class="input form__input modal__input" required placeholder="Телефон">
				<button class="modal__btn btn --dark">Получить расчет стоимости</button>
			</form>
			<span class="policy modal__policy">Нажимая на кнопку, вы соглашаетесь <a href="/privacy">с условиями обработки персональных данных</a></span>
		</div>
		<div class="substrate modal__substrate">
			<span class="substrate__line"></span>
			<span class="substrate__name">Чепик Александр <br>Александрович</span>
			<span class="substrate__position">Специалист по работе <br>с ключевыми <br>клиентами</span>
			<span class="substrate__line"></span>
		</div>
		<div class="modal__manager">
			<picture>
				<source srcset="img/modal-manager-2.webp" type="image/webp">
				<img data-src="img/modal-manager-2.png" alt="" class="modal__img">
			</picture>
		</div>
	</div>






	<script src="js/index.js"></script>



	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://refgo-crm.site/upload/crm/site_button/loader_1_b89rbu.js');
	</script>
	

</body>
</html>
