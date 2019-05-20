<?php 
require('model/model_connexion_db.php');

function top_useful(){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM faq ORDER BY useful DESC LIMIT 5'); 
	$req -> execute();
	$values = $req -> fetchAll(); 
	return $values;
}

function search($txt){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM faq ORDER BY useful DESC WHERE question LIKE ?'); 
	$req -> execute([$txt]);
	$req->store_result();
	$values = $req -> fetchAll(); 
	$req->close();
	return $values;
}

function suppr($id){
	db_connect();
	global $db;

	$req = $db -> prepare('DELETE FROM faq WHERE question_id = ?'); 
	$req -> execute([$id]);
}

function modif($id,$question, $answer){
	db_connect();
	global $db;

	$req = $db -> prepare('UPDATE faq SET question = ?, answer = ? WHERE question_id = ?' ); 
	$req -> execute([$question, $answer, $id]);
}

function ajout($question, $answer){
	db_connect();
	global $db; 

	$req = $db -> prepare('INSERT INTO faq (question_id, question, answer, useful) VALUES (NULL, ?, ?, 0)');
	$req -> execute([$question, $answer]);
}