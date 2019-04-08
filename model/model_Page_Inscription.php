<?php
require('C:\wamp64\www\AtHome\model\model_connexion_db.php');

function register($name, $first_name, $mail, $password, $phone, $mobile, $registration, $user_type)
{
	//try soit avec windows, puis avec mac si ça ne fonctionne pas
	try {
		db_windows();
	} catch (Exception $e) {
		try {
			db_mac();
		} catch (Exception $e) {
			die('Erreur de connexion à la database');
		}
	}
	//enregistrement de la personne dans la database
	global $db;
	$req = $db-> prepare('INSERT INTO user(name, first_name, password, mail, phone, mobile, registration, user_type) VALUES (?, ?,?,?,?,?,?,?)');
	$req-> execute([$name,$first_name,$password,$mail,$phone,$mobile,$registration,$user_type]);
}
