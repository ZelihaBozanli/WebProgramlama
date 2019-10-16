<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=webodev;charset=utf8", "root", "");
	$db->query("SET CHARACTER SET UTF8");
}catch(PDOException $error){
	die($error->getMessage());
}

?>
