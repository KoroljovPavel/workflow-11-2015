<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bower/normalize-css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Королёв Павел Владимирович</title>
	<script src="bower/modernizr/modernizr.js"></script>
</head>
<body class="first-page">
	<div class="wrapper">
		
		<?php include('tpl/header.php'); ?>

		<div class="container clearfix">
			<main class="main-content">
				<section class="main-info">
					<div class="info-about clearfix">
						<header class="about-me-head">
							<h2 class="about-me-header">Основная информация</h2>
						</header>
						<div class="profile-img-border">
							<div class="profile-img">
								<img src="img/profile.jpg" alt="Avatar" class="profile-image">
							</div>
						</div>
						<div class="profile-info-wrap">
							<ul class="profile-info">
								<li class="profile-info-t clearfix">
									<div class="profile-info-what left">Меня зовут:</div>
									<div class="profile-info-i left">Королёв Павел Владимирович</div>
								</li>
								<li class="profile-info-t clearfix">
									<div class="profile-info-what left">Мой Возраст:</div>
									<div class="profile-info-i left">27 лет</div>
								</li>
								<li class="profile-info-t clearfix">
									<div class="profile-info-what left">Мой город:</div>
									<div class="profile-info-i left">Кременчуг, Украина</div>
								</li>
								<li class="profile-info-t clearfix">
									<div class="profile-info-what left">Моя специализация:</div>
									<div class="profile-info-i left">FRONTEND разработчик</div>
								</li>
								<li class="profile-info-t clearfix">
									<div class="profile-info-what left">Ключевые навыки:</div>
									<div class="profile-info-i left">
										<ul class="shortcut">
											<li class="shortcut-list"><div class="shortcut-link">html</div></li>
											<li class="shortcut-list"><div class="shortcut-link">css</div></li>
											<li class="shortcut-list"><div class="shortcut-link">javascript</div></li>
											<li class="shortcut-list"><div class="shortcut-link">git</div></li>
											<li class="shortcut-list"><div class="shortcut-link">gulp</div></li>
											<li class="shortcut-list"><div class="shortcut-link">php</div></li>
											<li class="shortcut-list"><div class="shortcut-link">angular</div></li>
											<li class="shortcut-list"><div class="shortcut-link">xml</div></li>
										</ul>
									</div>
								</li>										
							</ul>
						</div>	
					</div>
					<div class="info-about">
						<header class="about-me-head">
							<h2 class="about-me-header">Опыт работы</h2>
						</header>	
						<div class="job clearfix">
							<ul class="list-job">
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="briefcase"></i></div>
										<div class="job-info">
											<div class="i-job">"ИП Боровицкий" - Продавец дисков</div>
											<div class="date">Сентябрь 2005 - Август 2008</div>
										</div>
									</div>	
								</li>
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="briefcase"></i></div>
										<div class="job-info">
											<div class="i-job">"ООО Системы безопастности" - Системный администратор</div>
											<div class="date">Июнь 2008 - Июль 2010</div>
										</div>	
									</div>	
								</li>
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="briefcase"></i></div>
										<div class="job-info">
											<div class="i-job">"Магнит, Розничная сеть" - Ведущий аналитик по внедрению Oracle Web Center</div>
											<div class="date">Август 2011 - Октябрь 2012</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="info-about">
						<header class="about-me-head">
							<h2 class="about-me-header">Образование</h2>
						</header>
						<div class="job clearfix">
							<ul class="list-job">
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="notepad"></i></div>
										<div class="job-info">
											<div class="i-job">Полное среднее. Физико-математический лицей № 30</div>
											<div class="date">1994 - 2004</div>
										</div>
									</div>	
								</li>
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="graduate"></i></div>
										<div class="job-info">
											<div class="i-job">Незаконченное высшее. СПБГУ ИТМО</div>
											<div class="date">Октябрь 2012 - по настоящее время</div>
										</div>
									</div>	
								</li>
								<li class="list-job-item">
									<div class="job-wrap clearfix">
										<div class="briefcase-circle"><i class="file"></i></div>
										<div class="job-info">
											<div class="i-job">Курсы Loftschool.ru</div>
											<div class="date">Ноябрь 2014 - по настоящее время</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</main>
			<section class="sidebar">
				<nav class="navigation">
					<ul class="page-nav">
						<li class="link"><a href="index.php" class="link-my active">Обо мне</a></li>
						<li class="link no-bdr"><a href="my-jobs.php" class="link-my">Мои работы</a></li>
						<li class="link"><a href="contact.php" class="link-my">Обратная связь</a></li>
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
	<?php include('tpl/footer.php'); ?>
</body>