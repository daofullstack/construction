<?php 
if (isset($_POST) && !empty($_POST))
		{
		$idArticle=$_POST["idArticle"];
		$idDemandeur=$_POST["idDemandeur"];
		$idRecruteur=$_POST["idRecruteur"];
		$req = $bdd->prepare('INSERT INTO demandes(id_demandeur,id_article,id_recruteur) values(?,?,?)');
		$okInsert=$req->execute(array($idDemandeur,$idArticle,$idRecruteur));
		if (!$okInsert) {
			header('location:index.php?page=error');
		}else{
			header('location:index.php?page=statutDemande');
		}
	}
	?>