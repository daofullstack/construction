<?php 
	include '../functions/db.php';
	if (isset($_GET)) {
		$idLike=$_GET["id"];
		$sql="UPDATE `articles` SET `likes` = (likes +1) WHERE `articles`.`id_article` = '$idLike'";
		$res=$bdd->query($sql);
		if ($res) {
			header('location:../index.php?page=annonces');
		}else{
			header('location:../index.php?page=home');
		}
	}
	
 ?>
 