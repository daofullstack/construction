

	<div class="row">
		 <div class="col-md-12 px-0">

        <h6 class="font-weight-bold mb-3 text-center text-lg-left">profiles disponibles</h6>
        <div class="white z-depth-1 px-3 pt-3 pb-0">
          <ul class="list-unstyled friend-list">
            	<?php 

          			include 'functions/db.php';
					     $stmt = $bdd->query("SELECT * FROM users WHERE (disponible=1 AND type_user=3 ) ORDER BY id DESC ");
				while ($result= $stmt->fetch()) {
					echo '<li class="p-2">
							 <a href="index.php?page=voirProfile&id='.$result["id"].'&nom='.$result["nom"].'" class="d-flex justify-content-between">
							 <img src='.$result["photo"].' alt="pas de photo" class="img-fluid img-thumbnail" style="height:10%; width:10%;">
							  <div class="text-small">
							 <strong>'.$result["nom"].' '.$result["prenom"].'</strong>
							  <p class="last-message text-muted">COMPETENCES  :'.$result["competences"].'<br>
								
								EXPERIENCE  :'.$result["experience"].' ans.<br></p>
								</div>
				                <div class="chat-footer">
				                  <p class="text-smaller text-muted mb-0">COMMUNE   :'.$result["commune"].'</p>
				                  <span class="text-muted float-right"><i class="fas fa-mail-reply" aria-hidden="true"></i></span>
				                </div>
							</a>
						</li> <hr class="hr-dark">';
				}
				$stmt->closeCursor();

				 ?>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

	</div>

