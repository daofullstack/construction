<?php
include 'functions/db.php';
$idDemandeur=$_SESSION["id"];
$demandeAttente="SELECT articles.nom_structure,articles.lieu_travail,demandes.id_article, demandes.date_ajout_demande,articles.domaine FROM demandes INNER JOIN articles ON demandes.id_article=articles.id_article WHERE etat_demande=0 AND id_demandeur='$idDemandeur' ORDER BY id_demande DESC ";
$demandesApprouvees="SELECT articles.nom_structure,articles.lieu_travail,demandes.id_article, demandes.date_ajout_demande,articles.domaine FROM demandes INNER JOIN articles ON demandes.id_article=articles.id_article WHERE etat_demande=1 AND id_demandeur='$idDemandeur' ORDER BY id_demande DESC";
$resulAttente=$bdd->query($demandeAttente);
$resulApprouvee=$bdd->query($demandesApprouvees);
?>