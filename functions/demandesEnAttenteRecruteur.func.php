<?php
include 'functions/db.php';
$idRecruteur=$_SESSION["id"];
$demandeAttenteRecruteur="SELECT * FROM demandes WHERE etat_demande=0 AND id_recruteur='$idRecruteur' ORDER BY id_demande DESC";
$demandesApprouveesRecruteur="SELECT * FROM demandes WHERE etat_demande=1 AND id_recruteur='$idRecruteur' ORDER BY id_demande DESC";
$resulAttenteRecruteur=$bdd->query($demandeAttenteRecruteur);
$resulApprouveeRecruteur=$bdd->query($demandesApprouveesRecruteur);
if (isset($_POST["noter"])) {
	$note=$_POST["note"];
	$idDemandeur=$_POST["id_demandeur"];
	$req="INSERT INTO `notes` (`id_note`, `note`, `id_demandeur`) VALUES (NULL, '$note', '$idDemandeur')";
	$res=$bdd->query($req);
}
?>