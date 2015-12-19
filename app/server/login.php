<?php
session_start();
	
	mysql_connect("localhost:3306", "pavko132_admindb", "zxchvqwp150688") or die (mysql_error ());
	mysql_select_db("pavko132_workloft") or die(mysql_error());
	$sql = mysql_query("SELECT mail, password FROM usersdb");
	$name = $_POST['email'];
	$pass = md5($_POST['password']);

	//print_r($_POST);
	
	if(!$sql) echo "loshara";
	$row = mysql_fetch_array($sql);
	//print_r($row);
	if($name === $row["mail"] and $pass === $row["password"]){
		$_SESSION["name"] = $row["mail"];
		header("Location: ../index.php");
	}else{
		return false;
	}