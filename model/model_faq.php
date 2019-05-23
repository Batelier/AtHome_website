<?php 
require('model/model_connexion_db.php');

function default_req(){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT * FROM faq ORDER BY question_id DESC'); 
	$req -> execute();
	$values = $req -> fetchAll(); 
	return $values;
}

function get_by_id($id){
	db_connect();
	global $db; 

	$req = $db -> prepare('SELECT question, answer FROM faq WHERE question_id = ?'); 
	$req -> execute([$id]);
	$values = $req -> fetchAll(); 
	return $values;
}

function search($txt){
	db_connect();
	global $db; 

	$req = $db -> prepare("SELECT * FROM faq ORDER BY useful DESC WHERE question LIKE '" . $txt . "'"); 
	$req -> execute();
	$values = $req -> fetchAll(); 
	return $values;
}

function add($question, $answer){
	db_connect();
	global $db; 

	$req = $db -> prepare('INSERT INTO faq VALUES (NULL, ?, ?, 0)');
	$req -> execute([$question, $answer]);
}

function suppr($id){
	db_connect();
	global $db;

	$req = $db -> prepare('DELETE FROM faq WHERE question_id = ?');
	$req -> execute([$id]);
}

function modif($id, $question, $answer){
	db_connect();
	global $db;

	$req = $db -> prepare('UPDATE faq SET question = ?, answer = ? WHERE question_id LIKE ? ');
	$req -> execute([$question, $answer, $id]);
}