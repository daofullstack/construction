	<?php
include 'functions/db.php';
if (isset($_GET["id"]) && !empty($_GET["id"])) {
	$idUser=$_GET["id"];
	$sql="SELECT users.id,users.nom,users.prenom,users.photo,users.commune,users.email,users.telephone,users.experience,users.competences,AVG(notes.note) as note FROM users INNER JOIN notes ON users.id=notes.id_demandeur WHERE id='$idUser'";
	$reqVoirProfile=$bdd->query($sql);
}


	while($donnees = $reqVoirProfile->fetch())
				{$moyenne=(($donnees['note']*100)/10);
		            echo '<div class="z-depth-4 justify-content-between grey lighten-3 p-2">
		            		<h2 class="text-center"><strong>'.$donnees['nom'].' '.$donnees["prenom"].'</strong></h2>
		            		<div class="row">
		             		 	<div class="col-md-6">
				                	<img src="'.$donnees["photo"].'" class="img img-fluid img-responsive">
				                </div>
				                <div class="col-md-6">
				                	<div class="text-small">
				                 		 Commune:'.$donnees["commune"].'<br>
				                 		 Email:'.$donnees["email"].'<br>
				                  		Contact: '.$donnees["telephone"].'<br>
				                  		Experience: '.$donnees["experience"].'<br>
				                  		Compétences: '.$donnees["competences"].'
				                  		</p>
				                	</div>
				               	</div>
		            	</div><hr>';
		            	echo '<b>Sa Moyenne est de </b>: 
								<div class="progress bg-dark md-progress">
								 	<div class="progress-bar bg-warning" role="progressbar" style="width:'.$moyenne.'%"
								 	aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">'.$moyenne.'%</div>
								 </div><hr>';
		        } 
		    ?>