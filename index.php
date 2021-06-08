<?php
session_start();
require_once("Controller/controller.php");
$unController = new Controller("localhost","projet1","root","");
require_once("Vue/vueLog.php");
if(isset($_POST['Connexion'])){
  $login=$_POST['login'];
  $pass=$_POST['pass'];
  $resultat=$unController->verifConnexion($login,$pass);
  if(isset($resultat['nom_client']))
  {
    $_SESSION['login']=$resultat['login'];
    $_SESSION['nom_client']=$resultat['nom_client'];
    $_SESSION['id_client']=$resultat['id_client'];
    $_SESSION['prenom_client']=$resultat['prenom_client'];
    $_SESSION['role']=$resultat['role'];
    header("location: home.php");
  }else {
    echo "Verifier les identifiant";
  }
}
 ?>
