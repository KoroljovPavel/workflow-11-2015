<?php
session_start();
if(isset($_SESSION['login'])){

	$uploadDirectory = "../upload/img/";
	$data = array();
	$title = $data['title'] = $_POST['title'];
	$image = $data['image'] = $_FILES['image']['tmp_name'];
	$url  = $data['url'] = $_POST['url'];
	$mesDescription = $data['mesDescription'] = $_POST['mesDescription'];
	
	move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory.$_FILES['image']['name']);

	mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
	mysql_select_db("workflow-les1") or die(mysql_error());
	mysql_set_charset( 'utf8' );
	$strSQL = "INSERT INTO projects(projectTitle, projectImage, projectUrl, projectDescr) VALUES('{$title}', '{$image}', '{$url}', '{$mesDescription}')"; 
	mysql_query($strSQL) or die (mysql_error());
	mysql_close();
	exit;
}else{
	return false;
}
	



header("Content-Type: application/json");
echo json_encode($data);
exit;