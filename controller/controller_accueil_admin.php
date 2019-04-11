<?php
session_start();

//si l'admin est bien connecté, afficher sa page, pour des raisons de sécurité, un refresh de page inclut un log out
if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');
}
else {
	echo "YOU ARE NOT LOGGED IN !";
}
/*

javascript changement d'onglet sans recharger la page

*/