<?php
require('C:/wamp64/www/AtHome/model/model_connexion_db.php');
function query_captors(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$reponse = $db->query('SELECT * FROM equipment');
	return $reponse;
}

function query_captors_by_model($model){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$reponse = $db->prepare('SELECT equipment_id FROM equipment WHERE model = ?');
	$reponse -> execute(array($model));
	$values = $reponse -> fetch();
	return $values;
}

function query_captors_by_room($id){
	db_connect();
	global $db;
	$req =$db->prepare('SELECT * FROM equipment INNER JOIN equip ON equip.equipment_id =equipment.equipment_id WHERE room_id = ?');
	$req->execute(array($id));
	return $req;

}

function ajouter_capteur($equipment_id, $room_id){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db-> prepare('INSERT INTO equip(equipment_id, room_id)  VALUES (?,?)');
	$req-> execute([$equipment_id, $room_id]);
	//$db->exec('INSERT INTO equipment(model) VALUES("'.$_POST['capteurs'].'")');

}

function delete_sensor($id_capteur, $room_id){
	db_connect();
	global $db;
	$req = $db->prepare('DELETE FROM equip WHERE equipment_id = :id_capteur AND room_id = :room_id');
	$req->execute(array(
	'id_capteur' => $id_capteur,
	'room_id' => $room_id
	));

}
function delete_room($room_id){
	db_connect();
	global $db;
	$req = $db->prepare('DELETE FROM room WHERE room_id = :room_id');
	$req->execute(array(
	'room_id' => $room_id
	));

}

function delete_home($home_id){
	db_connect();
	global $db;
	$req = $db->prepare('DELETE FROM home WHERE home_id = :home_id');
	$req->execute(array(
	'home_id' => $home_id
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
