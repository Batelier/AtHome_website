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

function add_sensor($manufacturer, $model, $price, $orating_state){
	db_connect();
	global $db;

	$req = $db -> prepare('INSERT INTO equipment(manufacter, model, price, orating_state) VALUES (?, ?, ?, ?)');
	$req -> execute([$manufacturer, $model, $price, $orating_state]);
}