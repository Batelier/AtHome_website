<?php
require('model/model_connexion_db.php');

function get_all_sensors(){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM equipment');
	$req -> execute();
	$sensors = $req -> fetchAll();

	return $sensors;
}
//($_POST['constructeur'], $_POST['model'], $_POST['prix'], $_POST['orating_state'], $_POST['sensor_name']);
function add_sensor($manufacter, $model, $price, $orating_state, $name, $description){
	db_connect();
	global $db;

	$req = $db -> prepare('INSERT INTO equipment(manufacter, model, price, orating_state, name, description) VALUES (?, ?, ?, ?, ?, ?)');
	$req -> execute([$manufacter, $model, $price, $orating_state, $name, $description]);
}

function mod_sensor($manufacter, $model, $price, $orating_state, $name, $description){
	db_connect();
	global $db;

	$req = $db -> prepare('UPDATE equipment SET manufacter=?, model=?, price=?, orating_state=?, name=?, description=? WHERE equipment_id LIKE ?');
	$req -> execute([$manufacter, $model, $price, $orating_state, $name, $description, $_SESSION['sensor_id']]);

}

function get_sensor_info($id){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM equipment WHERE (equipment_id LIKE ?)');
	$req -> execute([$id]);
	$values = $req -> fetch();

	return $values;
}

function del($id){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('DELETE FROM equipment WHERE (equipment_id LIKE ?)');
	$req -> execute([$id]);
}