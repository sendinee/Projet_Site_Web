<h2>Supprimer un utilisateur</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!--button open modal-->
<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalUserSupp">supprimer un utilisateur</button>

<div class="container">
<!-- The Modal -->
  <div class="modal fade" id="myModalUserSupp">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Supprimer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 <!--modal body-->
 <div class="modal-body">
<form method="post" action="">
  Client<select name=id_client class="custom-select">
    <?php
    foreach ($lesClients as$unClient) {
      echo "<option value='".$unClient['id_client']."'>".$unClient['nom_client']."</option>";
    }?>
	<input type="submit" name="Supprimer" value="Supprimer">
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