<?php
session_start();

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sneaker fashion time</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="stylesheet" href="styleF.css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
    <h1>sneaker fashion time</h1>
    <h1><b>Bienvenue <?php echo $_SESSION['prenom_client'] ?></h1>
    <div class="onglets">

      <a href="./home.php"><i class="fas fa-home"></i></a>
      <!--<i class="fas fa-shopping-cart"></i>-->
      <a href="./compte.php"><i class="fas fa-user"></i><a/>
      <a href="./Modele/deconnexion.php"><i class="fas fa-sign-out-alt"></i></a>
      
    </div>
  </nav>  
  <!-- Fin de la barre de navigation -->

  <!-- Header -->
   <header>
     <h1><b>Bienvenue <?php echo $_SESSION['prenom_client'] ?></h1>
   </header>
  
<?php
require_once("Controller/controller.php");
$unController = new Controller("localhost","projet1","root","");
//verification si role = admin ou client
if(isset($_SESSION['role'])&&$_SESSION['role']=='Admin'){
  require_once("Vue/userInsert.php");
  if(isset($_POST['Valider'])){
  $unController->insertClient($_POST);
  echo "nouveau compte ajouter";
  }
  $lesClients=$unController->selectClient();
  require_once("Vue/userSupp.php");
  if(isset($_POST['Supprimer'])){
  $unController->deleteClient($_POST['id_client']);
  echo "compte Supprimer";
  }
  $lesMarques=$unController->selectAllMarque();
  require_once("Vue/sneakersInsert.php");
  if(isset($_POST['Inserer'])){
    $unController->insertChaussure($_POST);
    echo "chaussure bien ajouter";
  }
  $LesSneakers=$unController->SelectSneak();
  require_once("Vue/sneakSupp.php");
  if(isset($_POST['Suppresion'])){
    $unController->deleteSneakers($_POST['id_Sneaker']);
    echo "chaussure retirer";
  }
}else{
  require_once("Vue/vueHome.php");
}

 ?>
