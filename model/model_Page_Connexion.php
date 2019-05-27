<?php
require('model/model_connexion_db.php');

//se connete, puis récupère mail, password et userType -> pour rediriger sur la bonne page
function login($mail){
	//try soit avec windows, puis avec mac si ça ne fonctionne pas
	db_connect();
	global $db;
	
	$req = $db -> prepare('SELECT mail, password, user_type FROM user WHERE mail = ?');
	$req -> execute([$mail]);
	$values = $req -> fetch(); //découpe les valeurs en tableau il me semble
	return $values;
}

function recuperer_id($email){
	db_connect();
	global $db;
	
	$req = $db -> prepare('SELECT user_id FROM user WHERE mail = ?');
	$req -> execute([$email]);
	$values = $req -> fetch();
	return $values;
	
}
function get_all_news(){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM catalogue ORDER BY catalogue_id DESC');
	$req -> execute();
	$news = $req -> fetchAll();

	return $news;
}

function get_random_rating(){
	db_connect();
	global $db;

	$req1 = $db -> prepare('SELECT rating_id FROM website_rating ORDER BY rating_id DESC');
	$req1 -> execute();
	$count = $req1 -> fetch();

	$nb = rand(1, $count[0]);

	return $nb;

}

function get_daily_com($id_rating){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM website_rating WHERE rating_id LIKE ?');
	$req -> execute([$id_rating]);
	$values = $req -> fetch();

	return $values;
}

//fonction vérifier que l'identifiant et mdp correspond à qqn dans la base de donnée

//fonction get les infos du jour

//fonction get le message du jour

//fonction envoyer un message à l'admin (écrire le message dans la base de données)