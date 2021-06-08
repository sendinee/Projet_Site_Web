<?php

/**
 * 
 */
class Modele
{
	private $unPDO;
	function __construct($serveur,$bdd,$user,$pass)
	{
		$this->unPDO=null;

		try {
			
			$this->unPDO=new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$pass);

		} catch (PDOException $e) {
			echo "erreur";
			echo $e->getMessage();
		}
	}

	public function verifConnexion($login,$pass){

		if($this->unPDO!=null){

			$requete="select * from Client where login = :login and password= :pass;";
			$donnees=array(":login"=>$login,":pass"=>$pass);
			$select= $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat=$select->fetch();
			$_SESSION['id_client']=$resultat['id_client'];
			return $resultat;

		}

	}
/*---ajouter un client---*/
	public function insertClient($tab){

		if($this->unPDO!=null){
			$requete="insert into client values(null,:nom_client,:prenom_client,:adresse_client,:login,:password,:ville,:role)";
			$donnees=array(":nom_client"=>$tab['nom'],
							":prenom_client"=>$tab['prenom'],
							":adresse_client"=>$tab['adresse'],
							":login"=>$tab['login'],
							":password"=>$tab['pass'],
							":ville"=>$tab['ville'],
							":role"=>$tab['role']);
			$insert=$this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function insertClientRole($tab){

		if($this->unPDO!=null){
			$requete="insert into client values(null,:nom_client,:prenom_client,:adresse_client,:login,:password,:ville,:role)";
			$donnees=array(":nom_client"=>$tab['nom'],
							":prenom_client"=>$tab['prenom'],
							":adresse_client"=>$tab['adresse'],
							":login"=>$tab['login'],
							":password"=>$tab['pass'],
							":ville"=>$tab['ville'],
							":role"=>'Client');
			$insert=$this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
/*---voir toute les marques---*/
	public function selectAllMarque(){
		$requete="select * from marque;";
			//preparation de la requete avant execution
			$select= $this->unPDO->prepare($requete);
			//execution de la requete
			$select->execute();
			//extraction des données
			$resultats = $select->fetchAll();
			return $resultats;
	}

/*---voir toute les client---*/
	public function selectClient(){
		$requete="select * from client;";
			//preparation de la requete avant execution
			$select= $this->unPDO->prepare($requete);
			//execution de la requete
			$select->execute();
			//extraction des données
			$resultats = $select->fetchAll();
			return $resultats;
	}

	public function insertChaussure($tab){
		$requete="insert into sneakers values(null,:nom_sneaker,:taille,:prix,:modele,:url,:categorie,:id_Marque);";
		$donnees=array(":nom_sneaker"=>$tab['nom_sneaker'],
							":taille"=>$tab['taille'],
							":prix"=>$tab['prix'],
							":modele"=>$tab['modele'],
							":categorie"=>$tab['categorie'],
							":url"=>$tab['url'],
							":id_Marque"=>$tab['id_Marque']);
		$insert=$this->unPDO->prepare($requete);
		$insert->execute($donnees);
	}

	public function SelectSneak(){
		$requete="select s.nom_Sneaker,s.prix,m.nom_Marque,s.url,s.prix,s.modele
		from Sneakers s, Marque m
		where s.id_Marque = m.id_Marque ;";
		$select= $this->unPDO->prepare($requete);
			//execution de la requete
			$select->execute();
			//extraction des données
			$results = $select->fetchAll();
			return $results;
	}

	public function SelectSneakHomme(){
		$requete="select s.nom_Sneaker,s.prix,m.nom_Marque,s.url,s.prix,s.modele
		from Sneakers s, Marque m
		where s.id_Marque = m.id_Marque and s.categorie='Homme';";
		$select= $this->unPDO->prepare($requete);
			//execution de la requete
			$select->execute();
			//extraction des données
			$results = $select->fetchAll();
			return $results;
	}




/*---supprimer un client---*/
	public function deleteClient($id_client){
			if($this->unPDO!= null){
				$requete="delete from client where id_client = :id_client;";
				$donnees=array(":id_client"=>$id_client);
				$delete=$this->unPDO->prepare($requete);
				$delete->execute($donnees);
			}
		}


	public function deleteSneakers($id_Sneaker)
	{
		if($this->unPDO!=null){
			$requete="delete from sneakers where id_Sneaker=:id_Sneaker;";
			$donnees=array(":id_Sneaker"=>$id_Sneaker);
				$delete=$this->unPDO->prepare($requete);
				$delete->execute($donnees);
		}
	}
}


?>