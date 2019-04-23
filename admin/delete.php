<?php 
	include '../functions/db.php';
		if (isset($_GET["idPub"]) && !empty($_GET["idPub"])) {
			$idPubSup=$_GET["idPub"];
			$req=$bdd->query("DELETE FROM articles WHERE id_article='$idPubSup'");
			if ($req) {
				header('location:../index.php?pageAdmin=publications');
			}else{
				header('location:../index.php?pageAdmin=admin');
			}
		}
		if (isset($_GET["id"])) {
			$id = $_GET["id"];
			$repDel=$bdd->query("DELETE FROM users WHERE id=$id");
			if ($repDel) {
	    	header('location:../index.php?pageAdmin=admin');
	    	}else{
	     	 header('location:../index.php?pageAdmin=admin');
	    	}
		}
		if (isset($_POST["update"])) {
		$telephone = $_POST["telephone"];
		$email = $_POST["email"];
		$id=$_POST["id"];
		$experience=$_POST["experience"];
		$competences=$_POST["competences"];
		$commune=$_POST["commune"];
		$repUpdate=$bdd->query("UPDATE users SET telephone='$telephone', email='$email',experience='$experience',competences='$competences',commune='$commune' WHERE id=$id");
		if ($repUpdate) {
			 header('location:../index.php?page=monProfil');
		}else{
			echo "erreur update";
		}
		
	}
 ?>