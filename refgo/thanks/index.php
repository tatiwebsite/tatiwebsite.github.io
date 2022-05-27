<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta charset="UTF-8">


	<title>Хранение и доставка заказов в температурном режиме для вашего интернет-магазина</title>

	<link rel="stylesheet" href="../css/main.css"> 


	<meta property="og:url" content="https://refgo.ru/thanks/">
	<link rel="icon" href="https://refgo.ru/favicon.png" type="image/png">

	<?php include '../header.php'; ?>

</head>
<body>

	<div class="topbar">
		<div class="wrapper">
			<div class="topbar__row">
				<a href="/" class="topbar__logo">
					<img data-src="../svg/logo.svg" alt="REFGO">
				</a>
				<p class="topbar__descriptor">
					Доставка и хранение заказов в температурном режиме в&nbsp;Москве, Санкт-Петербурге и Нижнем Новгороде
				</p>
				<div class="topbar__contacts">
					<div class="topbar__messengers messengers">
						<h4>Задайте ваш вопрос в&nbsp;мессенджере</h4>
						<div class="row">
							<a href="https://wapp.click/79779652515" class="messenger" style="background-image: url(../svg/whatsapp.svg);" target="_blank"></a>
							<!-- <a href="https://viber.click/79779652515" class="messenger" style="background-image: url(../svg/viber.svg);" target="_blank"></a> -->
							<a href="https://tlgg.ru/@vb_refgo" class="messenger" style="background-image: url(../svg/telegram.svg);" target="_blank"></a>
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
					<a href="https://refgo.ru" class="topbar__nav-item">Курьерская доставка</a>
					<a href="https://refgo.ru/sborka.php" class="topbar__nav-item">Сборные грузы</a>
				</div>
			</div>
		</nav>
	</div>


	<header class="t-header" id="t-header">
		<div class="wrapper">
			<div class="t-header__cnt">
				<h1 class="t-header__title">
					Спасибо за доверие!
				</h1>
				<div class="t-header__subtitle">
					Пока вы ждете звонка нашего специалиста
				</div>
				<div class="t-header__text">
					Посмотрите 2-минутное видео о нашей компании, команде и автопарке
				</div>
				<div class="t-header__video">
					<div style="padding-bottom: 56%;">
						<?php
							$youtube_url = 'https://www.youtube.com/embed/JRetpR0iAuo';
							// or
							$youtube_url = '<iframe width="560" height="315" src="https://www.youtube.com/embed/JRetpR0iAuo" frameborder="0" allowfullscreen></iframe>';
							if ($youtube_url) {
							  if (preg_match('/iframe/', $youtube_url)) {
							    $iframe_url = preg_replace('/width=[\"\'].*?[\"\']/', 'width="100%"', $youtube_url);
							    $iframe_url = preg_replace('/height=[\"\'].*?[\"\']/', 'height="100%"', $iframe_url);
							    $fixed = $iframe_url;
							  }
							  else {
							    $video_id = preg_replace("/.*?[\&\?]v=([a-zA-Z0-9_]+)?.*/", "$1", $youtube_url);
							    $fixed = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
							  }
							}

						print $fixed;?>
					</div>
				</div>
				<a href="#" onclick="history.back();return false;" class="t-header__btn btn --dark">Вернуться назад</a>
			</div>
		</div>
		<div class="substrate t-header__substrate">
			<span class="substrate__line"></span>
			<span class="substrate__name">Чепик Александр <br>Александрович</span>
			<span class="substrate__position">Специалист по работе <br>с ключевыми <br>клиентами</span>
			<span class="substrate__line"></span>
		</div>
		<picture>
			<source srcset="../img/director-thansk.webp" type="image/webp">
			<img data-src="../img/director-thansk.png" alt="" class="t-header__img">
		</picture>
	</header>

	<section class="t-offer" id="t-offer">
		<div class="wrapper">
			<div class="t-offer__row">
				<div class="t-offer__col">
					<picture>
						<source srcset="../img/auto-thanks.webp" type="image/webp">
						<img data-src="../img/auto-thanks.jpg" alt="" class="t-offer__img">
					</picture>
				</div>
				<div class="t-offer__col">
					<h2 class="t-offer__title g-title">
						Если у вас срочный вопрос, звоните нам по&nbsp;телефону
					</h2>
					<a href="tel:+7 (495) 532 44 47" class="t-offer__phone">+7 (495) 532 44 47</a>
					<div class="t-offer__messengers messengers">
						<a href="https://wapp.click/79779652515" class="messenger" style="background-image: url(../svg/whatsapp.svg);" target="_blank"></a>
						<!-- <a href="https://viber.click/79779652515" class="messenger" style="background-image: url(../svg/viber.svg);" target="_blank"></a> -->
						<a href="https://tlgg.ru/@vb_refgo" class="messenger" style="background-image: url(../svg/telegram.svg);" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer" id="footer">
		<div class="wrapper">
			<div class="footer__top">
				<a href="/" class="footer__logo">
					<img data-src="../svg/logo--footer.svg" alt="REFGO">
				</a>
				<p class="footer__descriptor">
					Доставка и хранение заказов в температурном режиме в&nbsp;Москве, Санкт-Петербурге и Нижнем Новгороде
				</p>
				<div class="footer__contacts">
					<div class="footer__messengers messengers">
						<h4>Задайте ваш вопрос в&nbsp;мессенджере</h4>
						<div class="row">
							<a href="https://wapp.click/79779652515" class="messenger" style="background-image: url(../svg/whatsapp.svg);"></a>
							<!-- <a href="https://viber.click/79779652515" class="messenger" style="background-image: url(../svg/viber.svg);"></a> -->
							<a href="https://tlgg.ru/@vb_refgo" class="messenger" style="background-image: url(../svg/telegram.svg);"></a>
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
			<form action="../form.php" method="POST" class="modal__form form js-form" onsubmit="ym(86329317,'reachGoal','send_form'); return true;">

				<!-- Форма -->
				<input type="hidden" name="Форма" value="Консультация (в шапке)">


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
				<source srcset="../img/modal-manager.webp" type="image/webp">
				<img data-src="../img/modal-manager.png" alt="" class="modal__img">
			</picture>
		</div>
	</div>




	<script src="../js/index.js"></script>



	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://refgo-crm.site/upload/crm/site_button/loader_1_b89rbu.js');
	</script>

</body>
</html>