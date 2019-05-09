<?php 
require('model/model_connexion_db.php');

function top_useful(){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT question, answer, useful FROM faq ORDER BY useful DESC LIMIT 5'); 
	$req -> execute();
	$values = $req -> fetchAll(); 
	return $values;
}

function search($txt){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM faq ORDER BY useful DESC WHERE question LIKE %'.$txt.'%'); 
	$req -> execute();
	$values = $req -> fetchAll(); 
	return $values;
}