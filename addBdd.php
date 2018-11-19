<?php 

include_once 'class.php';
include_once 'bddManager.php';

//TEST SI TOUT LES CHAMPS SONT BIENS REMPLIS

foreach ($_POST as $key => $value) {
	if($key == 'special'){
			if ($value == '') continue;
		}
	if(empty($value)){
		die("Erreur : valeur " . $key . " manquante");
	}
}
/*
* stockage du nom et de la date pour les intégrer dans un email
*/
$nom = $_POST['nom'];
$date = $_POST['date'];

/*
*	creation d'une array pour la reservation 
*/
$array = $_POST;
$reservation = new reservation($array);
/*
*	connection a la BDD + ajout de la reservation
*/
$connection = new bddManager();
$connection->addBdd($reservation);
/*
*	creation du message d'email
*/
$messageClient = "vous avez reservé une table pour le  $date nous vous confirmons que votre demande a bien été prise en compte <br>"; /*email aux clients*/
$messageResto = "vous avez reçu une demande de reservation pour le $date de la part de monsieur $nom"; /*email au restaurant */
/*
* envoie des emails de reservation
*/
/*mail($_POST['email'], 'reservation', $messageClient);
mail('gregkimovec@gmail.com', 'reservation', $messageResto);*/