<?php

require('model/model_connexion_db.php');

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

function getUserInfo($id){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('SELECT * FROM user WHERE (user_id LIKE ?)');
	$req -> execute([$id]);
	$all_users = $req -> fetchAll();

	return $all_users;
}

function get_user_by_type($type){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('SELECT * FROM user WHERE user_type LIKE ?');
	$req -> execute([$type]);
	$all_users = $req -> fetchAll();

	return $all_users;
}

function del($id){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('DELETE FROM user WHERE user_id LIKE ?');
	$req -> execute([$id]);
}
