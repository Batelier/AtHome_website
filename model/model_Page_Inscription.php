<?php
require('model/model_connexion_db.php');

function register($name, $first_name, $mail, $password, $phone, $mobile, $registration, $user_type)
{
	db_connect();
	//enregistrement de la personne dans la database
	global $db;
	$req = $db-> prepare('INSERT INTO user(name, first_name, password, mail, phone, mobile, registration, user_type) VALUES (?, ?,?,?,?,?,?,?)');
	$req-> execute([$name,$first_name,$password,$mail,$phone,$mobile,$registration,$user_type]);
}


