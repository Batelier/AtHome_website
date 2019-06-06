<?php
require('C:/wamp64/www/AtHome/model/model_connexion_db.php');

function add_trame($type,$num_objet, $type_requete,$type_capteur, $numero_capteur,$valeur, $num_trame, $checksum, $annee,$mois,$jour,$heure,$minutes,$secondes){
  db_connect(); //function from model_connexion_db.php
	global $db; //pour pouvoir utiliser l'objet db -> database

	$req = $db-> prepare('INSERT INTO data(type,num_objet, type_requete,type_capteur, numero_capteur,valeur, num_trame, checksum, annee,mois,jour,heure,minutes,secondes)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$req-> execute([$type,$num_objet, $type_requete,$type_capteur, $numero_capteur,$valeur, $num_trame, $checksum, $annee,$mois,$jour,$heure,$minutes,$secondes]);
}

function exists($annee, $mois,$jour,$heure,$minutes,$secondes){
	db_connect();
	global $db;
	$req =$db->prepare('SELECT data_id FROM data WHERE annee = ? AND mois =? AND jour = ? AND heure = ? AND minutes = ? AND secondes = ?');
	$req->execute(array($annee, $mois,$jour,$heure,$minutes,$secondes));
	$values = $req -> fetch();
  if (empty($values)){
    return FALSE;
  }else{
    return TRUE;
  }
}
