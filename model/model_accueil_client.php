<?php
require('C:/wamp64/www/AtHome/model/model_connexion_db.php');
function query_captors(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$reponse = $db->query('SELECT * FROM equipment');
	return $reponse;
}

function ajouter_capteur($type){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database
		
	/*Les values seront ensuite importés de la bdd*/
	$price = 0.5;
	$orating_state = 1;
	//$db -> prepare('INSERT INTO equipment(manufacter, model, price, orating_state) 
	//	VALUES ('.$type.', '.$type.', '.$price.', '.$orating_state.')');

	$req = $db-> prepare('INSERT INTO equipment(manufacter, model, price, orating_state)  VALUES (?,?,?,?)');
	$req-> execute([$type, $type, $price, $orating_state]);
	//$db->exec('INSERT INTO equipment(model) VALUES("'.$_POST['capteurs'].'")');

}

function delete_sensor($id){
	db_connect();
	global $db;
	$req = $db->prepare('DELETE FROM equipment WHERE equipment_id = :id_capteur');
	$req->execute(array(
	'id_capteur' => $id
	));
	
}