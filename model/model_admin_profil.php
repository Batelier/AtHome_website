<?php

require('model/model_connexion_db.php');

function get_info($id){
	db_connect();
	global $db;

	$req = $db -> prepare('SELECT * FROM user WHERE (user_id LIKE ?)');
	$req -> execute([$id]);
	$values = $req -> fetch();
	return $values;

/*
	$req = $db -> prepare('SELECT * FROM user WHERE user_id LIKE ?');
	$req -> execute([$id]);
	$values = $req -> fetchAll();
	return $values; */
}
//mod($_POST['prenom'], $_POST['nom'], $_POST['mail'], $_POST['telFixe'], $_POST['portable']);
function mod($first_name, $name, $mail, $telFixe, $portable){
	db_connect();
	global $db;

	$req = $db -> prepare('UPDATE user SET name=?,first_name=?,mail=?,phone=?,mobile=? WHERE (user_id LIKE ?)');
	$req -> execute([$name,$first_name,$mail,$telFixe,$portable,$_SESSION['id']]);

}