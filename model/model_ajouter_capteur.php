<?php


function ajouter_capteur(){
db_connect(); //function from model_connexion_db.php
global $db; //pour pouvoir utiliser l'objet db -> database
	
$db->exec('INSERT INTO equipment(model) VALUES("'.$_POST['capteurs'].'")');

}