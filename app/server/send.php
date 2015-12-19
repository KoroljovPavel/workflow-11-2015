<?php
session_start();
if(isset($_SESSION['name'])){
	$uploadDirectory = "../upload/img/";
	$title = $_POST['title'];
	$image = $_FILES['image']['tmp_name'];
	$url   = $_POST['url'];
	$mesDescription = $_POST['mesDescription'];

	
	move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory.$_FILES['image']['name']);

	mysql_connect("localhost:3306", "pavko132_admindb", "zxchvqwp150688") or die (mysql_error ());
	mysql_select_db("pavko132_workloft") or die(mysql_error());
	mysql_set_charset( 'utf8' );
	$strSQL = "INSERT INTO projects(projectTitle, projectImage, projectUrl, projectDescr) VALUES('{$title}', '{$image}', '{$url}', '{$mesDescription}')"; 
	mysql_query($strSQL) or die (mysql_error());
	mysql_close();
	exit;
	
	$data = "true";
}else{
	$data = "false";
}

echo "json\_encode($data)";
exit;