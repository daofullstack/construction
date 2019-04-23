<style type="text/css">
	
</style>
  <div class="container-fluid white formulaire_inscription">
	 <form class="needs-validation " action="" method="post" enctype="multipart/form-data"  novalidate >
	  <div class="form-row">
	    <div class="col-md-4 mb-3 form-group">
	      <label class="orange-text font-weight-bold" for="nom">Nom</label>
	      <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom" required>
	      <div class="valid-feedback">
	        votre nom svp
	      </div>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label class="orange-text font-weight-bold" for="prenom">Prénom</label>
	      <input type="text" class="form-control" name="prenom" id="prenom" placeholder="votre prenom" required>
	      <div class="valid-feedback">
	        entrez au moins un prénom
	      </div>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label class="orange-text font-weight-bold" for="telephone">Numero</label>
	        <input type="number" class="form-control" name="telephone" id="telephone" placeholder="numero de telephone" required>
	        <div class="invalid-feedback">
	          un numero de telephone svp
	        </div>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="col-md-3 mb-3">
	    	<label class="orange-text font-weight-bold" for="type_user" >type d'utilisateur</label>
	      <select id="type_user" name="type_user">
	      	<option selected value="3" class="form-control">recherche emploi</option>
	      	<option value="2">recruteur</option>
	      </select>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="experience">experience (en année)</label>
	      <input type="number" class="form-control" name="experience" value="0" placeholder="votre experience en année" >
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="competences">competences</label>
	      <input type="text" class="form-control" name="competences" id="competences" placeholder="ce que vous savez faire" required>
	      <div class="invalid-feedback">
	       au moins une compétence
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="email">email</label>
	      <input type="email" class="form-control" name="email" id="email" placeholder="EX: xx@xx.com" required>
	      <div class="invalid-feedback">
	       entrez un email valide
	      </div>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="niveau">Niveau d'étude</label>
	      <select name="niveau" id="niveau">
	      	<option selected value="aucun">aucun</option>
	      	<option value="eleve">Elève</option>
	      	<option value="etudiant">etudiant</option>
	      </select>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="photo">Photo</label>
	      <input type="file" name="photo" id="photo" placeholder="Votre photo" required>
	      <div class="invalid-feedback">
	        veuillez entrer une photo
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="commune">Commune</label>
	      <input type="text" class="form-control" name="commune" id="commune" placeholder="votre Lieu d'habitation" required>
	      <div class="invalid-feedback">
	       une commune svp 
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label class="orange-text font-weight-bold" for="password">mot de passe</label>
	      <input type="password" class="form-control" name="password" id="password" placeholder="mot de passe" required>
	      <div class="invalid-feedback">
	       un mot de passe pour votre compte !
	      </div>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="form-check">
	      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
	      <label class="form-check-label" for="invalidCheck">
	        Acceptez nos conditions 
	      </label>
	      <div class="invalid-feedback">
	        vous devez dabord accepter nos conditions ! <br><a href="index.php?page=conditions">lire les conditions</a>
	      </div>
	    </div>
	  </div><a class="float-right orange-text" href="index.php?page=conditions">lire les conditions</a>
	  <button type="submit" class="btn btn-outline-warning waves-effect btn-sm"><i class="fas fa-user mr-2"
    aria-hidden="true"></i>m'inscrire</button>
	  
	</form>
    
  </div>