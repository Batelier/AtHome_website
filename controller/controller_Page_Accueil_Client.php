<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");

#if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {

	if (isset($_POST['supprimer_capteur'])){
		delete_sensor((int)$_POST['id_capteur']);
	}
	
	if (isset($_POST['add_sensor']) and !($_POST['capteurs'] == "Choisir")) {
		ajouter_capteur($_POST['capteurs']);
	}
	$reponse = query_captors();
	$reponse1 = query_captors();

	include("C:/wamp64/www/AtHome/view/view_header.php");
	require("C:/wamp64/www/AtHome/view/view_accueil_client.php");
#}else{

#header('routeur.php');}

