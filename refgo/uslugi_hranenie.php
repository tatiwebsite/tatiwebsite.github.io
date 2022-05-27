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
				<a href="uslugi_magazini.php" class="bread-crumbs__link --active">Хранение в температурном режиме</a>

			</div>
			<div class="header__inner --in-center">
				<h1 class="header__title">
					Хранение продуктов в&nbsp;температурном режиме от -18 C° до +4 C°
				</h1>
				<p class="header__suboffer g-subtitle-small narrow with-arrow wide">
					Склады площадью 1 500 кв.м. позволяют размещать на&nbsp;хранение грузы с поддержанием определенных температурных режимов
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

	<section class="dark-features with-photo">
		<div class="wrapper">
			<h2 class="dark-features__title g-title">
				Собственные склады с сохранением <br> температурного режима хранения
			</h2>
			<div class="dark-features__subtitle g-subtitle-big">
				В Москве и Санкт-Петербурге
			</div>
			<div class="dark-features__inner long">
				<div class="dark-features__col">
					<div class="dark-features__col-inner">
						<div class="dark-features__icon">
							<img src="svg/uslugi/dark-house.svg" alt="Сократить операционные затраты">
						</div>
						<div class="dark-features__descr">
							Общая площадь хранения около 1 500 кв. м.
						</div>
					</div>
					
				</div>
				<div class="dark-features__col">
					<div class="dark-features__col-inner">
						<div class="dark-features__icon">
							<img src="svg/uslugi/dark-security.svg" alt="Сократить операционные затраты">
						</div>
						<div class="dark-features__descr">
							Охраняемые складские комплексы с видеонаблюдением
						</div>
					</div>
					
				</div>
				<div class="dark-features__col">
					<div class="dark-features__col-inner">
						<div class="dark-features__icon">
							<img src="svg/uslugi/dark-cold.svg" alt="Сократить операционные затраты">
						</div>
						<div class="dark-features__descr">
							Холодильное оборудование с мультирежимами Carrier, США
						</div>
					</div>
					
				</div>

				
			</div>
			<div class="dark-features__inner-block">
			<div class="dark-features__photo-block">
				<div class="dark-features__photo-item">
					<picture>
						<source srcset="img/uslugi/dark/dark-photo1.webp" type="image/webp">
						<img data-src="img/uslugi/dark/dark-photo1.jpg" alt="Комплекс услуг">
					</picture>
				</div>
				<div class="dark-features__photo-item">
					<picture>
						<source srcset="img/uslugi/dark/dark-photo2.webp" type="image/webp">
						<img data-src="img/uslugi/dark/dark-photo2.jpg" alt="Комплекс услуг">
					</picture>
				</div>
				<div class="dark-features__photo-item">
					<picture>
						<source srcset="img/uslugi/dark/dark-photo3.webp" type="image/webp">
						<img data-src="img/uslugi/dark/dark-photo3.jpg" alt="Комплекс услуг">
					</picture>
				</div>
				<div class="dark-features__photo-item">
					<picture>
						<source srcset="img/uslugi/dark/dark-photo4.webp" type="image/webp">
						<img data-src="img/uslugi/dark/dark-photo4.jpg" alt="Комплекс услуг">
					</picture>
				</div>
			</div>
			</div>
			

		</div>
	</section>

	<section class="light-cards pt-200">
		<div class="wrapper">
			<div class="light-cards__header two-col">
				<h2 class="two-col__title-col g-title">
				Вы можете быть спокойны за репутацию компании перед клиентами
				</h2>
				<p class="two-col__subtitle-col g-subtitle-small">
					Предлагаем полностью прозрачные и понятные условия работы,  а также надежное оборудование для хранения
				</p>
			</div>
			<div class="light-cards__inner">
				<div class="light-cards__item light-card">
					<div class="light-card__img">
						<picture>
							<source srcset="img/uslugi/light-card1.webp" type="image/webp">
							<img data-src="img/uslugi/light-card1.jpg" alt="" class="header__card-img">
						</picture>
					</div>
					<p class="light-card__text">
						Только экологичное оборудование с использованием фреона. Мы не используем амиак для охлаждения продукции
					</p>
				</div>
				<div class="light-cards__item light-card">
					<div class="light-card__img">
						<picture>
							<source srcset="img/uslugi/light-card2.webp" type="image/webp">
							<img data-src="img/uslugi/light-card2.jpg" alt="" class="header__card-img">
						</picture>
					</div>
					<p class="light-card__text">
						Персонализированный режим камер от -18 С° до +4 С°, которые оснащены приточновытяжной системой
					</p>
				</div>
				<div class="light-cards__item light-card --long">
					<div class="light-card__img">
						<picture>
							<source srcset="img/uslugi/light-card3.webp" type="image/webp">
							<img data-src="img/uslugi/light-card3.jpg" alt="" class="header__card-img">
						</picture>
					</div>
					<p class="light-card__text">
						Заберем продукцию с вашего склада машинами с рефрижераторами, разместим на хранение, а при поступлении заявки доставим вашим клиентам
					</p>
				</div>
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
