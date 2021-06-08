<h2>Inserer un utilisateur</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!--button open modal-->
<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Inserer un utilisateur</button>

<div class="container">
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Inserer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 <!--modal body-->
 <div class="modal-body">
<form method="post" action="">
  Nom<input type="text" name="nom"required><br>
  Prenom<input type="text" name="prenom"required><br>
  Adresse<input type="text" name="adresse"required><br>
  Login<input type="text" name="login"required><br>
	Pass<input type="password" name="pass"required><br>
  Ville<input type="text" name="ville"required><br>
  Role<select name="role" class="custom-select" required="">
    <option value="Admin">Admin</option>
    <option value="Client">Client</option>
  </select><br>
	<br>
	<input type="submit" name="Valider" value="Valider">
	<input type="reset" name="Annuler" value="Annuler">
</form>
</div>
<!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
</div>
</div>
</div>
</div>