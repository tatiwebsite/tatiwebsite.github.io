<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta charset="UTF-8">


	<title>Хранение и доставка заказов в температурном режиме для вашего интернет-магазина</title>

	<link rel="stylesheet" href="css/main.css"> 


	<meta property="og:url" content="https://refgo.ru/sborka.php/">
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
						<a href="vidy-gryzov.php" class="topbar__nav-item active">Виды грузов</a>
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


	<header class="header gd-header" id="header">
		<div class="wrapper">
			<h1 class="header__title">
				Перевозка сборных&nbsp;грузов от&nbsp;1&nbsp;кг&nbsp;до&nbsp;20&nbsp;тонн
			</h1>
			<div class="header__subtitle">
				Москва ⇄ Санкт-Петербург и&nbsp;обратно
			</div>
			<div class="header__temperature --small">
				Доставим ваш груз с температурным режимом от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°
			</div>
			<div class="header__cta">
				<div class="cta">
					<a href="#getTheCost" class="header__btn btn js-get-modal --dark">Узнать стоимость</a>
					<span class="header__hint">Рассчитайте точную стоимость и&nbsp;сроки доставки продукции до&nbsp;ваших клиентов</span>
				</div>
				<div class="video">
					<a href="https://www.youtube.com/watch?v=JRetpR0iAuo" class="header__video js-open-video">
						Посмотрите короткое видео о&nbsp;компании и&nbsp;узнайте, почему 97%&nbsp;клиентов оценивают нашу доставку на&nbsp;10&nbsp;из&nbsp;10
					</a>
				</div>
			</div>
			<!-- <div class="header__cta">
				<div class="cta --horizontal">
					<span class="header__hint">Рассчитайте точную стоимость и&nbsp;сроки доставки продукции до&nbsp;ваших клиентов</span>
				</div>
			</div> -->
			<div class="header__cards">
				<div class="header__card">
					<picture>
						<source srcset="img/groupage-goods/header-2.webp" type="image/webp">
						<img data-src="img/groupage-goods/header-2.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Ежедневная отправка:</h3>
					<span class="header__card-text">Забор и доставка грузов без&nbsp;выходных и&nbsp;праздников</span>
				</div>
				<div class="header__card">
					<picture>
						<source srcset="img/groupage-goods/header-3.webp" type="image/webp">
						<img data-src="img/groupage-goods/header-3.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Инфраструктура:</h3>
					<span class="header__card-text">Холодильное и морозильное оборудование на&nbsp;складе в&nbsp;Москве и&nbsp;Санкт-Петербурге, штатные обученные водители в&nbsp;масках и&nbsp;перчатках. 230+&nbsp;машин в&nbsp;парке, 350+&nbsp;сотрудников в&nbsp;компании</span>
				</div>
				<div class="header__card">
					<picture>
						<source srcset="img/groupage-goods/header-1.webp" type="image/webp">
						<img data-src="img/groupage-goods/header-1.jpg" alt="" class="header__card-img">
					</picture>
					<h3 class="header__card-title">Контроль и поддержка:</h3>
					<span class="header__card-text">Диспетчеризация и сопровождение груза на&nbsp;всех этапах</span>
				</div>
			</div>
		</div>
		<picture>
			<source srcset="img/groupage-goods/header.webp" type="image/webp">
			<img data-src="img/groupage-goods/header.png" alt="" class="header__bg --gd">
		</picture>
	</header>


	<section class="circle-features cf">
		<div class="wrapper">
			<h2 class="cf__title g-title">
				Перевозите ваши грузы легко и&nbsp;выгодно
			</h2>
			<div class="cf__subtitle g-subtitle-big">
				За счет отправки продукции сборным грузом с&nbsp;REFGO
			</div>
			<div class="cf__row">
				<div class="cf__item">
					<div class="cf__col">
						<div class="cf__text">
							<h3>Мультирежим</h3>
							<p>Одновременно в одной машине могут доставляться грузы в&nbsp;разных температурных режимах от&nbsp;-18&nbsp;до&nbsp;+4&nbsp;С°</p>
						</div>
					</div>
					<div class="cf__col">
						<picture>
							<source srcset="img/groupage-goods/feature-3.webp" type="image/webp">
							<img data-src="img/groupage-goods/feature-3.jpg" alt="" class="cf__img">
						</picture>
					</div>
				</div>
				<div class="cf__item">
					<div class="cf__col">
						<div class="cf__text">
							<h3>При необходимости предоставим заборную машину для вашего груза</h3>
							<p>От двери до двери, заберём груз со&nbsp;склада или производства и&nbsp;доставим вашему клиенту</p>
						</div>
					</div>
					<div class="cf__col">
						<picture>
							<source srcset="img/groupage-goods/feature-2.webp" type="image/webp">
							<img data-src="img/groupage-goods/feature-2.jpg" alt="" class="cf__img">
						</picture>
					</div>
				</div>
				<div class="cf__item">
					<div class="cf__col">
						<div class="cf__text">
							<h3>Торговые сети и РЦ</h3>
							<p>Наличие мед книжек у водителей, санитарная обработка&nbsp;ТС, бумажный и&nbsp;электронный документооборот</p>
						</div>
					</div>
					<div class="cf__col">
						<picture>
							<source srcset="img/groupage-goods/feature-1.webp" type="image/webp">
							<img data-src="img/groupage-goods/feature-1.jpg" alt="" class="cf__img">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="offer --left-img" id="offer">
		<div class="wrapper">
			<div class="offer__cnt">
				<h2 class="offer__title g-title-small">
					Узнайте стоимость перевозки в&nbsp;кротчайшие сроки
				</h2>
				<!-- <div class="offer__subtitle g-subtitle-small">
					С расчетом стоимости и сроков доставки продукции до&nbsp;ваших клиентов
				</div> -->
				<picture>
					<source srcset="img/offer.webp" type="image/webp">
					<img data-src="img/offer.jpg" alt="" class="offer__bg">
				</picture>
				<div class="offer__cta">
					<h4 class="offer__cta-title">
						Заполните форму ниже
					</h4>
					<div class="offer__cta-text">
						И укажите откуда забрать и&nbsp;куда доставить груз, количество коробок или паллет, а&nbsp;также ваши контактные данные
					</div>
					<form action="form.php" method="POST"  class="offer__cta-form form js-form" onsubmit="ym(58303420,'reachGoal','submit_msk-spb'); return true;">

						<!-- Форма -->
						<input type="hidden" name="Форма" value="Узнать стоимость перевозки">

						<input type="text" class="form__input offer__cta-input" name="Откуда забрать" placeholder="Откуда забрать" required>
						<input type="text" class="form__input offer__cta-input" name="Куда доставить" placeholder="Куда доставить" required>
						<input type="text" class="form__input offer__cta-input" name="Кол-во коробок или паллет" placeholder="Кол-во коробок или паллет" required>
						<input type="tel" class="form__input offer__cta-input" name="Телефон" placeholder="Ваш телефон" required>
						<button class="offer__cta-btn btn --dark">Узнать стоимость перевозки <br>в кротчайшие сроки</button>
					</form>
					<span class="policy offer__policy">
						Нажимая на кнопку, вы соглашаетесь <a href="privacy">с&nbsp;условиями обработки персональных данных</a>
					</span>
				</div>
			</div>
		</div>
		
	</section>


	<section class="director" id="director">
		<div class="wrapper">
			<div class="director__cnt">
				<h2 class="director__title g-title">
					С каждым годом мы все больше совершенствуемся
				</h2>
				<div class="director__subtitle g-subtitle-small">
					Мы постоянно развиваемся и улучшаем свой функционал для повышения качества предоставляемого сервиса, за&nbsp;прошлый год увеличили на&nbsp;500&nbsp;тыс. доставки вашим клиентам, мы вырастили:
				</div>
				<div class="director__bullets">
					<div class="director__bullet">
						<!-- <div class="img-wrap">
							<img data-src="svg/groupage-goods/markets-1.svg" alt="">
						</div> -->
						<span>Штат на 84 сотрудника</span>
					</div>
					<div class="director__bullet">
						<!-- <div class="img-wrap">
							<img data-src="svg/groupage-goods/markets-2.svg" alt="">
						</div> -->
						<span>Автопарк на&nbsp;75&nbsp;единиц техники</span>
					</div>
					<div class="director__bullet">
						<!-- <div class="img-wrap">
							<img data-src="svg/groupage-goods/markets-3.svg" alt="">
						</div> -->
						<span>Расширили складские площади на&nbsp;2000&nbsp;м2</span>
					</div>
					<div class="director__bullet">
						<!-- <div class="img-wrap">
							<img data-src="svg/groupage-goods/markets-3.svg" alt="">
						</div> -->
						<span>Модернизировали холодильные установки и&nbsp;улучшили личный кабинет для&nbsp;клиентов</span>
					</div>
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



	<section class="cards-block cb">
		<div class="wrapper">
			<div class="cb__heading">
				<h2 class="cb__title g-title">
					Поможем продавать вашим клиентам даже из&nbsp;другого города
				</h2>
				<div class="cb__subtitle g-subtitle-big">
					Вы сможете делегировать весь процесс реализации продукции после продажи
				</div>
			</div>
			<div class="cb__row">
				<div class="cb__card">
					<div class="cb__card-col">
						<div class="cb__card-text">
							<span class="cb__card-step">1 этап</span>
							<h4 class="cb__card-title">
								Вы передаете продукцию заборной машине с&nbsp;вашего склада или&nbsp;производства
							</h4>
							<p class="cb__card-paragraph">
								К моменту принятия груза авто продизенфицировано. Температурный режим настроен согласно требованиям перевозки для вашего типа продукции
							</p>
						</div>
					</div>
					<div class="cb__card-col">
						<picture>
							<source srcset="img/groupage-goods/help-1.webp" type="image/webp">
							<img data-src="img/groupage-goods/help-1.jpg" alt="" class="cb__card-img">
						</picture>
					</div>
				</div>
				<div class="cb__card">
					<div class="cb__card-col">
						<div class="cb__card-text">
							<span class="cb__card-step">2 этап</span>
							<h4 class="cb__card-title">
								Ваша продукция перевозится с сохранением температурного режима от&nbsp;-18&nbsp;C°&nbsp;до&nbsp;+4&nbsp;C°
							</h4>
							<p class="cb__card-paragraph">
								Несем ответственность за сохранность и качество продукции во&nbsp;время перевозки. Работаем практически со&nbsp;всеми видами замороженной, охлажденной и&nbsp;скоропортящейся продукции
							</p>
						</div>
					</div>
					<div class="cb__card-col">
						<picture>
							<source srcset="img/groupage-goods/help-2.webp" type="image/webp">
							<img data-src="img/groupage-goods/help-2.jpg" alt="" class="cb__card-img">
						</picture>
					</div>
				</div>
				<!-- <div class="cb__card">
					<div class="cb__card-col">
						<div class="cb__card-text">
							<span class="cb__card-step">3 этап</span>
							<h4 class="cb__card-title">
								Курьер в фирменной одежде маске и&nbsp;перчатках передает продукцию вашему клиенту
							</h4>
							<p class="cb__card-paragraph">
								Заранее предупредим вашего клиента о&nbsp;доставке, примем оплату любым способом, предоставим чек и&nbsp;пожелаем хорошего&nbsp;дня
							</p>
						</div>
					</div>
					<div class="cb__card-col">
						<picture>
							<source srcset="img/groupage-goods/help-3.webp" type="image/webp">
							<img data-src="img/groupage-goods/help-3.jpg" alt="" class="cb__card-img">
						</picture>
					</div>
				</div> -->
				<div class="cb__card">
					<div class="cb__card-col">
						<div class="cb__card-text">
							<span class="cb__card-step">3 этап</span>
							<h4 class="cb__card-title">
								Предоставим вам отчетность и&nbsp;полную статистику по&nbsp;заказам и финансам
							</h4>
							<p class="cb__card-paragraph">
								Контроль температурного режима, отслеживание местоположения груза, бумажный и&nbsp;электронный документооборот
							</p>
						</div>
					</div>
					<div class="cb__card-col">
						<picture>
							<source srcset="img/groupage-goods/help-4.webp" type="image/webp">
							<img data-src="img/groupage-goods/help-4.jpg" alt="" class="cb__card-img">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>



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
			.
		</div>
	</section>




	<section class="wharranty --with-cta" id="wharranty">
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
						<source srcset="img/wharranty-2.webp" type="image/webp">
						<img data-src="img/wharranty-2.jpg" alt="">
					</picture>
				</div>
				<div class="wharranty__cta">
					<a href="#getTheCost" class="wharranty__btn btn js-get-modal --dark">Рассчитать стоимость доставки</a>
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
					<h3>Логистика под ключ, занимайтесь бизнесом спокойно</h3>
					<ul class="illustrate__list">
						<li class="illustrate__list-item">Москва и Московская область</li>
						<li class="illustrate__list-item">Санкт-Петербург и&nbsp;Ленинградская область</li>
						<li class="illustrate__list-item">Нижний Новгород</li>
					</ul>
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




	<!-- <section class="final" id="final">
		<div class="wrapper">
			<div class="final__cnt">
				<h2 class="final__title g-title-big">
					Получите 10 бесплатных доставок и&nbsp;протестируйте наши услуги
				</h2>
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
					<form action="form.php" method="POST"  class="final__cta-form form js-form" onsubmit="ym(58303420,'reachGoal','submit_msk-spb'); return true;">

						<!-- Форма -->
						<!-- <input type="hidden" name="Форма" value="10 бесплатных доставок (последний блок)">

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
	</section> -->



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
			<form action="form.php" method="POST" class="modal__form form js-form" onsubmit="ym(58303420,'reachGoal','submit_msk-spb'); return true;">

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
			<form action="form.php" method="POST" class="modal__form form js-form" onsubmit="ym(58303420,'reachGoal','submit_msk-spb'); return true;">

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
