<?php
require('C:/wamp64/www/AtHome/model/model_connexion_db.php');
function query_captors(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$reponse = $db->query('SELECT * FROM equipment_type');
	return $reponse;
}

function ajouter_capteur($type){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database
		
	/*Les values seront ensuite importĂ©s de la bdd*/
	
	$req = $db-> prepare('INSERT INTO equipment(name, description)  VALUES (?,?)');
	$req-> execute([$type, $type, $price, $orating_state]);
	//$db->exec('INSERT INTO equipment(model) VALUES("'.$_POST['capteurs'].'")');

}

function delete_sensor($id){
	db_connect();
	global $db;

	$req = $db -> prepare('DELETE equipment_type WHERE equipment_id LIKE (?)');
	$req -> execute([$id]);
}