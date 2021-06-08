<h2>Ajouter chaussure</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!--button open modal-->
<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalSneakers">Ajouter chaussure</button>
<div class="container">
<!-- The Modal -->
  <div class="modal fade" id="myModalSneakers">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter chaussure</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 <!--modal body-->
 <div class="modal-body">
<form method="post" action="">
  Nom de la Chaussure<input type="text" name="nom_sneaker"required><br>
  Taille<input type="number" name="taille"required><br>
  Prix<input type="number" name="prix"required><br>
  Modele<input type="text" name="modele"required><br>
  Url<input type="text" name="url"required><br>
  Categorie<select name="categorie" class="custom-select">
    <option value="Homme">Homme</option>
    <option value="Femme">Femme</option>
    <option value="Enfant">Enfant</option>
  </select>
	Marque<select name=id_Marque class="custom-select">
    <?php
    foreach ($lesMarques as$uneMarque) {
      echo "<option value='".$uneMarque['id_marque']."'>".$uneMarque['nom_marque']."</option>";
    }?>
	<input type="submit" name="Inserer" value="Inserer"><input type="reset" name="Annuler" value="Annuler">
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