<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	if (isset($_POST['supprimer_capteur'])){
		delete_sensor((int)$_POST['id_capteur'], $_POST['ident_room']);
	}
	if (isset($_POST['button_delete_room'])){
		delete_room($_POST['identi_room']);
	}
	if (isset($_POST['delete_home'])){
			delete_home($_POST['home_id']);
	}


	if (isset($_POST['add_sensor']) and !($_POST['capteurs'] == "Choisir")) {
		ajouter_capteur(query_captors_by_model($_POST['capteurs'])[0], $_POST['id_room']);
	}
	$reponse = query_captors();
	$reponse1 = query_captors();
	$reponse2 = get_addresses((int)$_SESSION['id']);
	$reponse3 = get_name_room((int)$_SESSION['id']);

	$reponse4 = get_addresses((int)$_SESSION['id']);;
	

	$reponse4 = get_addresses((int)$_SESSION['id']);
	include("view/view_header.php");
	require("view/view_accueil_client.php");

	if (isset($_POST['register_button_ajouter_home'])) {
		add_home($_POST['address'],$_POST['code_postal'],$_POST['area_home'],$_SESSION['id']);
		echo "<script> window.location.replace('routeur.php?cible=controller_Page_Accueil_Client');</script>";
	}

	if (isset($_POST['register_button_ajouter_piece'])) {
		add_room($_POST['prenom'],$_POST['nom'],get_home_id($_POST['homes'])[0]);
		echo "<script> window.location.replace('routeur.php?cible=controller_Page_Accueil_Client');</script>";
	}

	echo($_SESSION['id']);
}else{

		echo "YOU ARE NOT LOGGED IN !";
		echo "<br> <a href=\"routeur.php\"> retour </a>";
	}
