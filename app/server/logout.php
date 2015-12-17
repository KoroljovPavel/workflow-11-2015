<?php
session_start();

	$db = mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
	mysql_select_db("workflow-les1") or die(mysql_error());
	$select = @mysql_query("SELECT mail, password FROM usersdb");
	if (!$select) echo "из базы даных нет ответа";
	$row = @mysql_fetch_row($select);
	if (!$row) echo "не удалось создать массив";

	$data = array();
	$data['email'] = $_POST['email'];
	$data['password'] = md5($_POST['password']);
	print_r($data);
	if (($data['email'] === $row[0]) and ($data['password'] === $row[1])){
		$_SESSION['auth'] = $e_login;
		header('Location: ../index.php');
	}else{
		echo "Произошла ошибка";
		//header('Location: ', true, 404);
	}