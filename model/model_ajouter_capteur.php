<?php
require('model/model_connexion_db.php');

function ajouter_capteur(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database
		
	/*Les values seront ensuite importés de la bdd*/
	$price = 0.5euros;
	$orating_state = 1;
	$db -> prepare('INSERT INTO equipment(manufacter, model, price, orating_state) 
		VALUES ('.$_POST['capteurs'].', '.$_POST['capteurs'].', '$price', '$orating_state ')');


	//$db->exec('INSERT INTO equipment(model) VALUES("'.$_POST['capteurs'].'")');

}