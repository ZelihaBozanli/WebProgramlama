<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=webodev;charset=utf8", "root", "");
}catch(PDOException $error){
	die($error->getMessage());
}

?>
