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

function get_name_room($id){
	db_connect();
	global $db;
	$req =$db->prepare('SELECT name FROM room INNER JOIN home ON home.home_id =room.home_id WHERE user_id = ?');
	$req->execute(array($id));
	return $req;
}

function add_home($address, $postal_code, $area,$user_id){
	db_connect();
	global $db;
	$req = $db-> prepare('INSERT INTO home(address, postal_code, area, water_consumption, electrical_consumption, user_id, equipment_type_id)  VALUES (?,?,?,?,?,?,?)');
	$req-> execute([$address, (int)$postal_code, (float)$area, 1,1,(int)$user_id,1]);
}

function add_room($name,$area,$home_id){
	db_connect();
	global $db;
	$req = $db-> prepare('INSERT INTO room(name, area, home_id)  VALUES (?,?,?)');
	$req-> execute([$name,$area,$home_id]);
}

function get_addresses($id){
	db_connect();
	global $db;
	$req =$db->prepare('SELECT address FROM home WHERE user_id = ?');
	$req->execute(array($id));
	return $req;
}

function get_home_id($address){
	db_connect();
	global $db;
	$req =$db->prepare('SELECT home_id FROM home WHERE address = ?');
	$req->execute(array($address));
	$values = $req -> fetch();
	return $values;
}









