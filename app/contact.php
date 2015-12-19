<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bower/normalize-css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/contact.css">
	<title>Королёв Павел Владимирович</title>
	<script src="bower/modernizr/modernizr.js"></script>
</head>
<body class="first-page">
	<div class="wrapper">
		
		<?php include('tpl/header.php');?>

		<div class="container clearfix">
			<main class="main-content">
				<div class="info-about">
					<header class="about-me-head">
						<h2 class="about-me-header">У Вас интересный проект? Напишите мне</h2>
					</header>
					<div class="job">
						<div class="auth-form">
							<form action="server/send_mail.php" mehod="post" autocomplete="off" class="client-validated">
								<div class="auth-form-inner">
									<label class="auth-label">
										<div class="auth-form-head">Имя</div>
										<span class="input-wrap">
											<input type="text" name="name" placeholder="Как к Вам обращаться?" class="auth-label-input" data-tooltip="введите имя">
										</span>	
									</label>
									<label class="auth-label">
										<div class="auth-form-head">E-mail</div>
										<span class="input-wrap">
											<input type="email" name="email" placeholder="Куда мне писать?" class="auth-label-input t-right" data-tooltip="введите email">
										</span>	
									</label>
									<label class="auth-label content-cell-label">
										<div class="auth-form-head">Сообщение</div>
										<span class="input-wrap">
											<textarea name="message" id="message" placeholder="Кратко в чем суть" class="content-label-input" data-tooltip="ваш вопрос"></textarea>
										</span>	
									</label>
									<label class="auth-label captcha clearfix">
										<div class="auth-form-head">Введите код указанный на картинке</div>
										<img src="img/captcha.png" alt="captcha" class="img-captcha">
										<span class="input-wrap captcha-input">
											<input type="text" name="captcha" placeholder="Введите код" class="input-captcha t-right" data-tooltip="код каптчи">
										</span>	
									</label>
								</div>
								<div class="auth-form-buttons clearfix">
									<div class="auth-form-left">
										<button type="submit" class="btn btn-send">Отправить</button>
									</div>
									<div class="auth-form-right">
										<button type="reset" class="btn btn-reset">Очистить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</main>
			<section class="sidebar">
				<nav class="navigation">
					<ul class="page-nav">
						<li class="link"><a href="index.php"class="link-my">Обо мне</a></li>
						<li class="link"><a href="my-jobs.php"class="link-my">Мои работы</a></li>
						<li class="link"><a href="contact.php"class="link-my active">Обратная связь</a></li>
					</ul>
				</nav>
				<section class="main-contacts">
					<div class="head-cont-bg">
						<h3 class="head-cont">Контакты</h3>
					</div>	
					<ul class="contacts">
						<li class="info-contacts">
							<a href="mailto:afgmeister@gmail.com" class="link-send">
								<span class="btn-ico btn-email"></span>
								<span class="info-text">afgmeister@gmail.com</span>
							</a>
						</li>
						<li class="info-contacts">
							<a href="tel:+380674932777" class="link-send">
								<span class="btn-ico btn-phone"></span>
								<span class="info-text">+38 (067) 493277</span>
							</a>
						</li>
						<li class="info-contacts bdr">
							<a href="skype:pashka19888" class="link-send">
								<span class="btn-ico btn-skype"></span>
								<span class="info-text">pashka19888</span>
							</a>
						</li>
					</ul>
				</section>
			</section>
		</div>
		<div class="content-pb"></div>
	</div>
	<?php include('tpl/footer.php');?>
	<script src="bower/jquery/jquery.min.js"></script>
	<script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/contact-me.js"></script>
	<script src="js/placeholder.js"></script>
</body>	