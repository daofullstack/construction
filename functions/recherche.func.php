<?php 
	include 'functions/db.php';
	function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	if (isset($_POST)) {
		$motRech=htmlspecialchars(test_input($_POST["search"]));
		$sql = "SELECT * FROM `articles` WHERE ((`domaine` LIKE '%$motRech%') OR (`nom_structure` LIKE '%$motRech%') OR (`article` LIKE '%$motRech%') OR (`type_emploi` LIKE '%$motRech%')) ORDER BY `id_article` DESC";
			 $req=$bdd->query($sql);
	}
 ?>