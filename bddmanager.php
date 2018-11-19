<?php
	/**
	 * bddManager class
	 */
	class bddManager
	{

		private $bdd;

		function __construct()
		{
			$bdd = new PDO('mysql:host=localhost;dbname=pereouvrard;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$this->bdd = $bdd;
		}
		/*
		*	return data base
		*/
		public function getBdd(){
			return $this->bdd;
		}
		/*
		*	function add newsletter
		*/
		public function addBdd($array){

			$req = $this->getBdd()->prepare('INSERT INTO reservation(Nom, Email, Telephone, Type, Special, Date, NbPersonne, Heure) VALUES(:Nom, :Email, :Telephone, :Type, :Special, :Date, :NbPersonne, :Heure)');

			$req->bindValue(':Nom', $array->getNom());
			$req->bindValue(':Email', $array->getEmail());
			$req->bindValue(':Telephone', $array->getTelephone());
			$req->bindValue(':Type', $array->getType());
			$req->bindValue(':Special', $array->getSpecial());
			$req->bindValue(':Date', $array->getDate());
			$req->bindValue(':NbPersonne', $array->getNbPersonne());
			$req->bindValue(':Heure', $array->getHeure());

			$req->execute();
		}
	}
?>