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
						<a href="uslugi.php" class="topbar__nav-item active">Услуги</a>
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


	<header class="header bg-center" id="header">
		<div class="wrapper">
			<div class="header__bread-crumbs bread-crumbs">
				<a href="index.php" class="bread-crumbs__link">Главная</a>
				<a href="uslugi.php" class="bread-crumbs__link">Услуги</a>
				<a href="uslugi_magazini.php" class="bread-crumbs__link --active">Доставка в дарксторы</a>

			</div>
			<div class="header__inner --in-center">
				<h1 class="header__title">
				Доставка продуктов питания для поставщиков в дарксторы
				</h1>
				<p class="header__suboffer g-subtitle-small narrow with-arrow">
					Со строгим соблюдением температурного режима от&nbsp;-18&nbsp;C° до&nbsp;+4&nbsp;C° во время всей перевозки
				</p>
				<button class="header__btn btn js-get-modal --dark">Узнать стоимость</button>
			</div>
			<div class="header__cards magazini">
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
		
	</header>

	<section class="small-circles">
		<div class="wrapper">
			<h2 class="small-circles__title g-title-small">
				Работаем с крупнейшими дарксторами страны
			</h2>
			<div class="small-circles__logos">
				<div class="small-circles__logo">
					<picture>
						<source srcset="img/uslugi/darkstory-client1.webp" type="image/webp">
						<img data-src="img/uslugi/darkstory-client1.png" alt="OZON">
					</picture>
				</div>
				<div class="small-circles__logo">
					<picture>
						<source srcset="img/uslugi/darkstory-client2.webp" type="image/webp">
						<img data-src="img/uslugi/darkstory-client2.png" alt="Яндекс Лавка">
					</picture>
				</div>
				<div class="small-circles__logo">
					<picture>
						<source srcset="img/uslugi/darkstory-client3.webp" type="image/webp">
						<img data-src="img/uslugi/darkstory-client3.png" alt="Самокат">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<div class="dark-features with-big-photo">
		<div class="wrapper">
			<h2 class="dark-features__title g-title">
			Знаем все тонкости работы <br> с дарксторами и перевозки продукции в рефрижераторах
			</h2>
			<div class="dark-features__inner">
				<div class="dark-features__col">
					<div class="dark-features__item">
						<div class="dark-features__header">
							<div class="dark-features__icon">
								<img src="svg/uslugi/dark-home-t-blue.svg" alt="Хранение и температурный режим">
							</div>
							<h3 class="dark-features__subtitle">
								Хранение <br> и температурный режим
							</h3>
						</div>
						<p class="dark-features__text">
							Для разных типов продукции подбираем свой температурный режим хранения на складе
						</p>
					</div>
					<div class="dark-features__item">
						<div class="dark-features__header">
							<div class="dark-features__icon">
								<img src="svg/uslugi/dark-graph-blue.svg" alt="Подстроимся под ваш производственный график">
							</div>
							<h3 class="dark-features__subtitle">
							Подстроимся под ваш производственный график
							</h3>
						</div>
						<p class="dark-features__text">
							Например, каждое утро в 8:00 машина уже стоит возле вашего склада и в этот же день развозит продукцию по точкам
						</p>
					</div>
					<div class="dark-features__item">
						<div class="dark-features__header">
							<div class="dark-features__icon">
								<img src="svg/uslugi/dark-car-t-blue.svg" alt="Перевозка в температурном режиме">
							</div>
							<h3 class="dark-features__subtitle">
								Перевозка <br> в температурном режиме
							</h3>
						</div>
						<p class="dark-features__text">
							Подберем необходимый температурный режим для свежей, охлажденной и замороженной продукции
						</p>
					</div>
				</div>
				<div class="dark-features__photo">
					<picture>
						<source srcset="img/uslugi/dark/dark-big3.webp" type="image/webp">
						<img data-src="img/uslugi/dark/dark-big3.png" alt="Перевозка в температурном режиме">
					</picture>
				</div>
			</div>
		</div>
	</div>

	<div class="circle-features cf pb-0 uslugi">
		<div class="wrapper">
			<div class="cf__row">
				<div class="cf__item reverse">
					
					<div class="cf__col-text">
						<div class="cf__text">
							<h3 class="cf__text-title">
								Поможем вам организовать 
								документооборот с сетью 
								любого масштаба
							</h3>
							<p class="cf__text-descr">
								Знаем все тонкости работы с торговыми сетями и готовы взять на себя весь документооборот		
							</p>
						</div>
						<ul class="cf__list">
							<li class="cf__list-item">
								<div class="cf__list-img">
									<img src="svg/list-report.svg" alt="icon" class="cf__icon">
								</div>
								<p class="cf__list-text">
								Самостоятельно работаем с документами и возвратами. Вам нужно будет только проверять отчетность
								</p>
							</li>
						</ul>
					</div>
					<div class="cf__col-photo">
						<picture>
							<source srcset="img/circle-person-pc.webp" type="image/webp">
							<img data-src="img/circle-person-pc.jpg" alt="Самостоятельно работаем с документами и возвратами">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="offer mb-0" id="offer">
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

	<section class="illustrate">
		<div class="wrapper">
			<div class="illustrate__heading">
				<h2 class="illustrate__title g-title-big">
					Все вопросы по логистике возьмем на&nbsp;себя. Вы&nbsp;сможете спокойно заниматься бизнесом
				</h2>
				<div class="illustrate__subtitle g-subtitle-big">
					REFGO — это комплекс услуг по курьерской доставке рефрижератором и&nbsp;хранению продукции с&nbsp;соблюдением температурного режима 
				</div>
				<div class="illustrate__subtitle g-subtitle-big">
					Широкая география рефрижераторных перевозок позволит вам открыть новые рынки и&nbsp;увеличить количество клиентов
				</div>
			</div>
			<div class="illustrate__row">
				<div class="illustrate__col">
					<h3>Доставка продукции в температурных режимах по следующим региона</h3>
					<ul class="illustrate__list">
						<li class="illustrate__list-item">Москва и Московская область</li>
						<li class="illustrate__list-item">Санкт-Петербург и&nbsp;Ленинградская область</li>
						<li class="illustrate__list-item">Нижний Новгород</li>
					</ul>
					<a href="dostavka.php" class="illustrate__link-btn btn-correct --link --gray-light">Подробнее о зонах доставки</a>
				</div>
				<div class="illustrate__col">
					<picture>
						<source srcset="img/illustrate.webp" type="image/webp">
						<img data-src="img/illustrate.png" alt="" class="illustrate__img">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<div class="cases" id="cases">
		<div class="wrapper">
			
			<div class="cases__slider js-cases-slider">
				<div class="cases__item case">
					<div class="case__content">
						<div class="case__content-text">
							<h2 class="case__title g-title-small">
								Ежедневная доставка 500+ заказов с особыми условиями для перевозки
							</h2>
							<p class="case__descr g-subtitle-small">
								С 2017 года по настоящее время мы работаем с интернет-магазином «Elementaree» и комплексно закрываем вопросы логистики. 
							</p>
							<p class="case__descr g-subtitle-small">
								В 2020 году «Elementaree» выросли в 3 раз из-за пандемии и повышенного спроса на доставку. Чтобы справиться с новыми объемами, мы приобрели более 30 единиц автотранспорта в кратчайшие сроки
							</p>
						</div>
						<div class="case__content-photo">
							<picture>
								<source srcset="img/uslugi/cases1.webp" type="image/webp">
								<img data-src="img/uslugi/cases1.jpg" alt="Сотрудничество с компанией" class="review__img">
							</picture>
						</div>
					</div>
					<div class="case__footer">
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Период сотрудничества:
							</h3>
							<div class="case__footer-text">
								С 2017 года по сегодняшний день
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Продукция:
							</h3>
							<div class="case__footer-text">
								Mealkit
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Среднее количество доставок в день:
							</h3>
							<div class="case__footer-text">
								450
							</div>
						</div>
					</div>
				</div>
				<div class="cases__item case">
					<div class="case__content">
						<div class="case__content-text">
							<h2 class="case__title g-title-small">
								Увеличение количество заказов в 5 раз 
								за счет оптимизации доставок, маркетинга 
								и автоматизации бизнес-процессов
							</h2>
							<p class="case__descr g-subtitle-small">
								В 2020 году компания «Про бульон» доставляла около 20 заказов ежедневно. После начала совместной работы мы полностью взяли доставку на себя, освободив время и ресурсы компании, а также оптимизировали маркетинг и автоматизировали взаимодействие 
								с клиентами На сегодняшний 2022 компания доставляет продукты питания для 100 и является постоянным поставщиков дарксторов  Ozon
							</p>
							
						</div>
						<div class="case__content-photo">
							<picture>
								<source srcset="img/uslugi/cases2.webp" type="image/webp">
								<img data-src="img/uslugi/cases2.jpg" alt="Сотрудничество с компанией" class="review__img">
							</picture>
						</div>
					</div>
					<div class="case__footer">
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Период сотрудничества:
							</h3>
							<div class="case__footer-text">
								С 2020 года по сегодняшний день
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Продукция:
							</h3>
							<div class="case__footer-text">
								Костные бульоны
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Среднее количество доставок в день:
							</h3>
							<div class="case__footer-text">
								100+
							</div>
						</div>
					</div>
				</div>
				<div class="cases__item case">
					<div class="case__content">
						<div class="case__content-text">
							<h2 class="case__title g-title-small">
								Оперативный выход на большое количество доставок и выход на сотрудничество с «Самокат»
							</h2>
							<p class="case__descr g-subtitle-small">
								Компания «Фрукты моря» обратились к нам с задачей подготовиться 
								к сотрудничеству с «Самокатом» в Москве и Санкт-Петербурге 
								за 7 дней и подготовить логистику к большому количеству доставок.
								Основная задача: подготовиться и выйти на 200+ заказов в день  
								Результат: ежедневно доставляем 600+ заказов в день	
							</p>
						</div>
						<div class="case__content-photo">
							<picture>
								<source srcset="img/uslugi/cases3.webp" type="image/webp">
								<img data-src="img/uslugi/cases3.jpg" alt="" class="review__img">
							</picture>
						</div>
					</div>
					<div class="case__footer">
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Период сотрудничества:
							</h3>
							<div class="case__footer-text">
							 С 2020 года по сегодняшний день
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Продукция:
							</h3>
							<div class="case__footer-text">
								Рыба и рыбная продукция
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Среднее количество доставок в день:
							</h3>
							<div class="case__footer-text">
								600+
							</div>
						</div>
					</div>
				</div>
				<div class="cases__item case">
					<div class="case__content">
						<div class="case__content-text">
							<h2 class="case__title g-title-small">
								Комплекс услуг по перевозке продукции 
								в рефрижераторах, а также комплектации 
								и хранению
							</h2>
							<p class="case__descr g-subtitle-small">
								Комплексное предоставление услуг для компании: хранение, комплектовка, формирование документов, доставки для сегмента HoReCa и на склады, а также доставки до транспортных компаний 
								для отправки в другие регионы
							</p>
						</div>
						<div class="case__content-photo">
							<picture>
								<source srcset="img/uslugi/cases4.webp" type="image/webp">
								<img data-src="img/uslugi/cases4.jpg" alt="Сотрудничество" class="review__img">
							</picture>
						</div>
					</div>
					<div class="case__footer">
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Период сотрудничества:
							</h3>
							<div class="case__footer-text">
								С 2021 года по сегодняшний день
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Продукция:
							</h3>
							<div class="case__footer-text">
								Замороженное тесто
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Среднее количество доставок в день:
							</h3>
							<div class="case__footer-text">
								5-10
							</div>
						</div>
					</div>
				</div>
				<div class="cases__item case">
					<div class="case__content">
						<div class="case__content-text">
							<h2 class="case__title g-title-small">
								Комплекс услуг доставки продуктов
								для компании «Михайлик Kitchen» 
								и рост на 1 000% за 18 месяцев
							</h2>
							<p class="case__descr g-subtitle-small">
								На начало работы с нами компания «Михайлик Kitchen» доставляла порядка 30 заказов в день своими силами. На сегодняшний день мы полностью обеспечиваем оптимальную логистику и покрываем всю зону доставки компании — перевозим около 300 заказов в день.
								Помогли компании перейти на удобные коробки, 
								вместо непрезентабельных пенопластовых контейнеров
							</p>
						</div>
						<div class="case__content-photo">
							<picture>
								<source srcset="img/uslugi/cases5.webp" type="image/webp">
								<img data-src="img/uslugi/cases5.jpg" alt="" class="review__img">
							</picture>
						</div>
					</div>
					<div class="case__footer">
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Период сотрудничества:
							</h3>
							<div class="case__footer-text">
								С августа 2020 года по сегодняшний день
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Продукция:
							</h3>
							<div class="case__footer-text">
							Готовая еда: завтраки, обеды и комплексы питания
							</div>
						</div>
						<div class="case__footer-col">
							<h3 class="case__footer-sub">
								Среднее количество доставок в день:
							</h3>
							<div class="case__footer-text">
							До 300
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="reviews-yandex" id="reviews-yandex">
		<div class="wrapper">
			<h2 class="reviews-yandex__title g-title">
					Сотни отзывов о нашей работе
			</h2>
			<div class="reviews-yandex__subtitle g-subtitle-big">
				От интернет-магазинов, компаний производителей и&nbsp;поставщиков продуктов питания
			</div>
			<div class="reviews-yandex__slider js-reviews-yandex-slider">
				
				<div class="reviews-yandex__item review-yandex">
					<div class="review-yandex__header">
						<div class="review-yandex__author">
							Роман И.
						</div>
						<span class="review-yandex__date">
							21.03.2022
						</span>
					</div>
					<p class="review-yandex__text">
						Очень рад, что обратился именно сюда. У ребят четко выстроена работа по перевозке, есть своя ЭКО система. Мне не приходится ничего выдумывать с маршрутизацией, 
						они все это взяли на себя. Реально сильно облегчили мне жизнь всем этим
					</p>
				</div>
				<div class="reviews-yandex__item review-yandex">
					<div class="review-yandex__header">
						<div class="review-yandex__author">
						   Светлана А.
						</div>
						<span class="review-yandex__date">
							15.02.2022
						</span>
					</div>
					<p class="review-yandex__text">
						Условия работы полностью устраивают. 
						Как стали работать с «Refgo», претензии от покупателей свелись к минимуму	
					</p>
				</div>
				<div class="reviews-yandex__item review-yandex">
					<div class="review-yandex__header">
						<div class="review-yandex__author">
							Роман И.
						</div>
						<span class="review-yandex__date">
							21.03.2022
						</span>
					</div>
					<p class="review-yandex__text">
						Очень рад, что обратился именно сюда. У ребят четко выстроена работа по перевозке, есть своя ЭКО система. Мне не приходится ничего выдумывать с маршрутизацией, 
						они все это взяли на себя. Реально сильно облегчили мне жизнь всем этим
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="office mt-0" id="office">
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
				<button class="modal__btn btn --dark">Получить коммерческое предложение</button>
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
