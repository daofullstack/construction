<?php 
include 'functions/db.php'; 
?>
	<div class="container white">
   
		<div class="row">
			<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			  <thead>
			    <tr>
			      <th class="th-sm">ID
			      </th>
			      <th class="th-sm">Nom
			      </th>
			      <th class="th-sm">Prénom
			      </th>
			      <th class="th-sm">compétences
			      </th>
			      <th class="th-sm">esperience(en année)
			      </th>
			      <th class="th-sm">photo
			      </th>
			       <th class="th-sm">Supprimer
			      </th>
			    </tr>
			  </thead>
			  <tbody>
					<?php 
							$sql = "SELECT * FROM users ORDER BY id ASC  ";
					        $stmt = $bdd->prepare($sql);
					        $stmt->execute();
					        while($result = $stmt->fetch()){
					        	echo "<tr><td>".$result["id"]."</td><td>".$result["nom"]."</td>
					        	<td>".$result["prenom"]."</td><td>".$result["competences"]."</td>
					        	<td>".$result["experience"]."</td><td><img style='height:auto;width:20px;' class='img-fluid' src='".$result["photo"]."' /></td>
					        	<td><span class='table-remove'><a  href='admin/delete.php?id=".$result["id"]."' title='cette action est irreversible une fois executée' class='btn btn-danger btn-rounded btn-sm my-0'>Supprimer</a></span>
					        </td></tr>";
					       	}
					        $stmt->closeCursor();
	 				?> 
			</tbody>
		  	<tfoot>
		    <tr>
		      <th>
		      </th>
		    </tr>
		  </tfoot>
		</table>
	</div>
