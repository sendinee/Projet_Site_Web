<?php
session_start();
require_once("Controller/controller.php");
$unController = new Controller("localhost","projet1","root","");
require_once("Vue/vueCrea.php");
if(isset($_POST['Creation'])){
  $unController->insertClientRole($_POST);
  header("location: index.php");
}
 ?>