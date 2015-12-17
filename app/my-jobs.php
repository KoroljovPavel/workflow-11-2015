<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bower/normalize-css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/my-jobs.css">
	<title>Королёв Павел Владимирович</title>
	<script src="bower/modernizr/modernizr.js"></script>
</head>
<body class="second-page">
	<div class="wrapper">
		
		<?php include('tpl/header.php');?>

		<div class="container clearfix">
			<main class="main-content">
				<div class="info-about">
					<header class="about-me-head">
						<h2 class="about-me-header">Мои работы</h2>
					</header>
					<div class="job">
						<div class="jobes">
							<ul class="jobs-list">
								<li class="jobs-list-item">
									<article class="jobs-list-item-article">
										<div class="img-bg img-bg-google">
											<a href="//google.com" target="_blank" class="jobs-site-link">google.com</a>
										</div>
										<a href="//google.com" target="_blank" class="jobs-list-link">google.com</a>
										<p class="descr">Поисковый сайт google</p>
									</article>
								</li>
								<li class="jobs-list-item">
									<article class="jobs-list-item-article">
										<div class="img-bg img-bg-codepen">
											<a href="//codepen.io" target="_blank" class="jobs-site-link">codepen.io</a>
										</div>
										<a href="//codepen.io" target="_blank" class="jobs-list-link">codepen.io</a>
										<p class="descr">С помощью этого прекрасного сервиса, мы можем поделиться своим кодом, а другие смогут его отредактировать и сделать свою версию, чтобы показать правильный вариант.</p>
									</article>
								</li>
								<li class="jobs-list-item">
									<article class="jobs-list-item-article">
										<div class="img-bg img-bg-yeoman">
											<a href="//yeoman.io" target="_blank" class="jobs-site-link">yeoman.io</a>
										</div>
										<a href="//yeoman.io" target="_blank" class="jobs-list-link">yeoman.io</a>
										<p class="descr">Есть такие программы и утилиты, воспользовавшись которыми, пользователь возопит: «Не знаю, как я мог жить без этого инструмента раньше!». На мой взгляд, консольная утилита Yeoman, написанная на Node.JS, относится как раз к разряду таких незаменимых инструментов.</p>
									</article>
								</li>
								<li class="jobs-list-item">
									<article class="jobs-list-item-article">
										<div class="img-bg img-bg-youtube">
											<a href="//youtube.com" target="_blank" class="jobs-site-link">youtube.com</a>
										</div>
										<a href="//youtube.com" target="_blank" class="jobs-list-link">youtube.com</a>
										<p class="descr">Видеохостинг, предоставляющий пользователям услуги хранения, доставки и показа видео.</p>
									</article>
								</li>
								<li class="jobs-list-item last">
									<a href="#popup" class="add">
										<span class="ico-file-wrap"><i class="ico-file"></i></span>
										<p class="add-text">Добавить проект</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</main>
			<section class="sidebar">
				<nav class="navigation">
					<ul class="page-nav">
						<li class="link"><a href="index.php"class="link-my">Обо мне</a></li>
						<li class="link"><a href="my-jobs.php"class="link-my active">Мои работы</a></li>
						<li class="link"><a href="contact.php"class="link-my">Обратная связь</a></li>
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

		<?php include('tpl/footer.php');?>

		<section class="popup-window">
			<header class="popup-head">
				<h4 class="popup-header">Добавление проекта</h4>
			</header>
			<form class="popup-form" action="server/send.php"  enctype="multipart/form-data">
				<div class="auth-form-popup">
					<div class="server-message-er">
						<a href="#" class="close-popup close-popup-er"><i class="close-popup-btn"></i></a>
						<h4 class="error-header">Ошибка!</h4>
						<div class="error-message">Невозможно добавить проект.</div>
					</div>
					<div class="server-message-ok">
						<div class="serv-mes-wrap">
							<a href="#" class="close-popup close-popup-ok"><i class="close-popup-btn"></i></a>
							<h4 class="success-header">Ура!</h4>
							<div class="success-message">Проект успешно добавлен.</div>
						</div>
					</div>
					<a href="#" class="close-popup close-popup-form"><i class="close-popup-btn"></i></a>
					<label class="auth-popup-label">
						<div class="auth-popup-label-head">Название проекта</div>
						<span class="input-wrap">
							<input type="text" name="title" placeholder="Введите название" class="input-popup-title" data-tooltip="введите название">
						</span>	
					</label>
					<label class="auth-popup-label">
						<div class="auth-popup-label-head">Картинка проекта</div>
						<span class="input-wrap">
							<input type="file" name="image"  class="input-popup-img" data-tooltip="изображение">
							<span class="input-file-upload">Загрузите изображение</span>
							<div class="upload-file-btn"><i class="iCloud-down"></i></div>
						</span>	
					</label>
					<label class="auth-popup-label">
						<div class="auth-popup-label-head">URL проекта</div>
						<span class="input-wrap">
							<input type="url" name="url" placeholder="Добавьте ссылку" class="input-popup-url" data-tooltip="ссылка на проект" autocomplete="off">
						</span>	
					</label>
					<label class="auth-popup-label">
						<div class="auth-popup-label-head">Описание</div>
						<span class="input-wrap">
							<textarea type="description-project" name="mesDescription" placeholder="Пара слов о Вашем проекте" class="input-popup-description" data-tooltip="описание проекта"></textarea>
						</span>	
					</label>
					<button type="submit" class="popup-btn">Добавить</button>
				</div>
			</form>
		</section>
		<div class="fog"></div>
		<script src="bower/jquery/jquery.min.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/add_project_new.js"></script>

	</div>
</body>	