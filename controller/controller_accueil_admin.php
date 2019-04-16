<?php
session_start();
require("model/model_accueil_admin.php");

//if isset is_connected and type = admin
//si l'admin est bien connecté, afficher sa page, pour des raisons de sécurité, un refresh de page inclut un log out
if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');
	$all_users = get_all_users();
	require('view/view_accueil_admin.php');
	
}
else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"/routeur.php\"> retour </a>";
}
/*

javascript changement d'onglet sans recharger la page

*/