<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");

#if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {

	if (isset($_POST['supprimer'])) {
		echo "called";
		delete_sensor(key($_POST['supprimer']));
	}
	if (isset($_POST['add_sensor']) and !($_POST['capteurs'] == "Choisir")) {
		ajouter_capteur($_POST['capteurs']);
	}
	$reponse = query_captors();

	include("C:/wamp64/www/AtHome/view/view_header.php");
	require("C:/wamp64/www/AtHome/view/view_accueil_client.php");
#}else{

#header('routeur.php');}

