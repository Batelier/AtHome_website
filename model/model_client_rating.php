<?php
require('model/model_connexion_db.php');

function insert_comment($comment, $rating){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database
	
	$default = 1;
	$req = $db -> prepare('INSERT INTO website_rating(comment, rating, user_id) VALUES (?,?,?)');
	$req -> execute([$comment, $rating, $default]);

}