<?php

require('model/model_connexion_db.php');

//fonction récupérer tous les utilisateurs (sans leur mot de passe obviously)
function get_all_users(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db -> prepare('SELECT mail, first_name, name, user_type, registration FROM user');
	$req -> execute();
	$all_users = $req -> fetchAll();

	return $all_users;
}

//fonction récupérer la liste de tous les clients 

//fonction récupérer seulement les techniciens

//gestion ajouter/supprimer droits utilisateurs

//fonction 