<?php 
require('model/model_connexion_db.php');

function top_useful(){
	db_connect();
	global $db; 

	$req = $db -> query('SELECT * FROM faq ORDER BY useful DESC LIMIT 5'); 
	$values = $req -> fetch(); 
	return $values;
}

function search($txt){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM faq ORDER BY useful DESC WHERE question LIKE %?%'); 
	$req -> execute([$txt]);
	$values = $req -> fetch(); 
	return $values;
}