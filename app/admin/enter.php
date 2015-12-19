<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" href="../bower/normalize-css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/contact.css">
</head>
<body>
	<div class="wrapper">
		<section class="register">
			<header class="autorisation-head">
				<h4 class="autorisation-header">
					Авторизируйтесь
				</h4>
			</header>
			<div class="auth-form-reg">
				<form action="../server/login.php" class="autorisation" method="post">
					<label class="enter-autorisation enter-email">
						<input type="email" name="email" placeholder="Введите Email" class="enter-info t-right" data-tooltip="ведите email">
					</label>
					<label class="enter-autorisation enter-pas">
						<input type="password" name="password" placeholder="Введите пароль" class="enter-info t-right" data-tooltip="ведите пароль">
					</label>
					<input type="checkbox" class="hidden-checkbox" name="checkbox">
					<label for="hidden-checkbox" class="check">
						Запомнить меня?
					</label>
					<button type="submit" class="btn btn-send btn-reg" name="enter">Войти</button>
				</form>
			</div>	
		</section>
		<div class="content-pb"></div>
	</div>

	<?php include('../tpl/footer.php');?>
	<script src="../bower/jquery/jquery.min.js"></script>
	<script src="../js/validate.js"></script>
	<script src="../js/login.js"></script>
</body>
</html>