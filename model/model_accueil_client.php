<?php
require('model/model_connexion_db.php');
function query_captors(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$reponse = $db->query('SELECT * FROM equipment');
	

	return $reponse;
}
?>