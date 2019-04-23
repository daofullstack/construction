<?php 
	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=constructeurs;charset=utf8' ,"root" ,null);
	}catch(Exception $e)
	{
	die('Erreur : '.$e->getMessage());
	}

 ?>