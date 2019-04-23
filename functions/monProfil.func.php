<?php 
include 'functions/db.php';
	$id = $_SESSION['id'];
	$req = $bdd->query( "SELECT users.id,users.nom,users.prenom,users.telephone,users.experience,users.competences,users.email,users.photo,users.commune,users.disponible,
					users.password,users.type_user,users.niveau,AVG(notes.note) AS note
			 FROM users INNER JOIN notes ON users.id=notes.id_demandeur WHERE id = $id");
	$resultat=$req->fetch();
	$reqGalerie=$bdd->query("SELECT * FROM galerie WHERE id_user=$id");
	if (isset($_POST["ajouter"])) {
		$id = $_SESSION['id'];
		$commentaire=$_POST["commentaire"];
		$image="img/".basename($_FILES["image"]["name"]);
		$reqq="INSERT INTO `galerie` (`id_image`, `id_user`, `image`, `commentaire`) VALUES (NULL, '$id', '$image', '$commentaire')";
		$res=$bdd->query($reqq);
	}

?>
