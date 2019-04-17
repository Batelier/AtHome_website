<?php
session_start();
require("model/model_accueil_client.php");
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {

	if (isset($_POST['add_sensor']) and !($_POST['capteurs'] == "Choisir")) {
		ajouter_capteur($_POST['capteurs']);
		unset($_POST);
	}

	$reponse = query_captors();

	include("view/view_header.php");
	require("view/view_accueil_client.php");
}else{

header('routeur.php');}

