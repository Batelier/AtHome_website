<?php
require('model/model_connexion_db.php');

function get_all_news(){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM catalogue');
	$req -> execute();
	$news = $req -> fetchAll();

	return $news;
}

function add_news($title, $text){
	db_connect();
	global $db;

	$req = $db -> prepare('INSERT INTO catalogue(title, text) VALUES (?, ?)');
	$req -> execute([$title, $text]);
}

function mod_news($title, $text){
	db_connect();
	global $db;

	$req = $db -> prepare('UPDATE catalogue SET title=?, text=? WHERE catalogue_id LIKE ?');
	$req -> execute([$title, $text, $_SESSION['catalogue_id']]);

}

function del_news($id){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('DELETE FROM catalogue WHERE (catalogue_id LIKE ?)');
	$req -> execute([$id]);
}

function get_news_info($id){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM catalogue WHERE (catalogue_id LIKE ?)');
	$req -> execute([$id]);
	$values = $req -> fetch();

	return $values;
}