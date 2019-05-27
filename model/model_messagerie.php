<?php
require('model/model_connexion_db.php');

function get_msg(){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM contact_us ORDER BY contact_id DESC');
	$req -> execute();
	$values = $req -> fetchAll();
	return $values;
}