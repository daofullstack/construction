<?php 
	include '../functions/db.php';
	if (isset($_POST) && !empty($_POST)) {
		$idDemande=$_POST["idDemande"];
		$validerDemande="UPDATE demandes SET etat_demande ='1'  WHERE id_demande = '$idDemande'";
		$reqValider=$bdd->query($validerDemande);
		if ($reqValider) {
			header('location:../index.php?page=demandesEnAttenteRecruteur');
		}else{
			header('location:../index.php?page=error');
		}
	}
	
 ?>