<?php


require_once("Modele/modele.php");
class Controller
{
  private $unModele;

  public function __construct($serveur,$bdd,$user,$pass)
	{

			$this->unModele = new Modele($serveur,$bdd,$user,$pass);
	}
	public function verifConnexion($login,$pass)
  	{
		return $this->unModele->verifConnexion($login,$pass);
	}

	public function insertClient($tab){
		return $this->unModele->insertClient($tab);
	}

	public function selectAllMarque(){
		$resultats = $this->unModele->selectAllMarque();
		//on peut realiser des traitements avant l'affichage
		return $resultats;
	}
	public function selectClient(){
		$resultats = $this->unModele->selectClient();
		//on peut realiser des traitements avant l'affichage
		return $resultats;
	}

	public function SelectSneak(){
		$results= $this->unModele->SelectSneak();
		return $results;
	}

	public function SelectSneakHomme(){
		$results= $this->unModele->SelectSneakHomme();
		return $results;
	}

	public function insertChaussure($tab){
		return $this->unModele->insertChaussure($tab);
	}

	public function deleteClient($id_client){
		$this->unModele->deleteClient($id_client);
	}

	public function deleteSneakers($id_Sneaker){
		$this->unModele->deleteSneakers($id_Sneaker);
	}

	public function insertClientRole($tab){
		return $this->unModele->insertClientRole($tab);
	}


}


 ?>
