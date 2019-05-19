<?php
if(isset($_GET['user_id']) ){
	require('C:/wamp64/www/AtHome/model/model_connexion_db.php');
}else{
	require('model/model_connexion_db.php');

}

//fonction récupérer tous les utilisateurs (sans leur mot de passe obviously)
function get_all_users(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('SELECT * FROM user');
	$req -> execute();
	$all_users = $req -> fetchAll();

	return $all_users;
}

function modifier_informations($id, $name, $first_name, $user_type, $phone, $mobile){
	db_connect();
	global $db;

	//$req = $db -> prepare('INSERT INTO user(name)');
	$req = $db -> prepare('UPDATE user SET name=?,first_name=?,phone=?,mobile=?,user_type=? WHERE user_id LIKE ? ');
	/* $req->bindValue(1, $name);
	$req->bindValue(2, $id, PDO::PARAM_INT); */
	$req -> execute([$name,$first_name,$phone,$mobile,$user_type,$id]);

}



//fonction récupérer la liste de tous les clients 

//fonction récupérer seulement les techniciens

//gestion ajouter/supprimer droits utilisateurs

//fonction 