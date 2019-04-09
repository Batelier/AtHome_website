<?php
require('model\model_connexion_db.php');

function login($mail, $password){
	//try soit avec windows, puis avec mac si ça ne fonctionne pas
	db_connect();
	
	$req = $db -> prepare('SELECT mail, password FROM user WHERE mail = ? ');
	$re7 -> execute(array($mail));
	//Verfifier que le password correspond bien au password de la database
	
}


//fonction vérifier que l'identifiant et mdp correspond à qqn dans la base de donnée

//fonction get les infos du jour

//fonction get le message du jour

//fonction envoyer un message à l'admin (écrire le message dans la base de données)