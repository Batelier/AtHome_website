<?php

require('model/model_connexion_db.php');

//exemple fonction (pour les trois premières seulement): 
function get_all_users(){
	db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	//code ...

	return all_users;
}

//fonction récupérer tous les utilisateurs (sans leur mot de passe obviously)

//fonction récupérer la liste de tous les clients 

//fonction récupérer seulement les techniciens

//gestion ajouter/supprimer droits utilisateurs

//fonction 