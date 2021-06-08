<h2>Supprimer une Paire</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!--button open modal-->
<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#SneakSupp">Supprimer Chaussure</button>

<div class="container">
<!-- The Modal -->
  <div class="modal fade" id="SneakSupp">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Supprimer Chaussure</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 <!--modal body-->
 <div class="modal-body">
<form method="post" action="">
  Sneakers<select name="id_Sneaker" class="custom-select">
    <?php
      foreach ($LesSneakers as $uneSneaker) {
        echo "<option value='".$uneSneaker['id_sneaker']."'>".$uneSneaker['nom_Sneaker']."</option>";
      }
    ?>
  </select>
	<input type="submit" name="Suppresion" value="Suppresion">
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