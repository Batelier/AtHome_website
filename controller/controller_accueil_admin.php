<?php
session_start();

require('model/model_accueil_admin.php');

//if isset is_connected and type = admin
//si l'admin est bien connecté, afficher sa page, pour des raisons de sécurité, un refresh de page inclut un log out
if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');

	$all_users = get_all_users();
 
	if (isset($_POST['show_modifier'])) {
		$ui = key($_POST['show_modifier']);
		$_SESSION['user_id'] = $ui;
	}

	//button tri
	if (isset($_POST['sub_type']) and $_POST['user'] != '') {
		$all_users = get_user_by_type($_POST['user']);

	}

	//button delete
	if (isset($_POST['del'])) {
		//echo key($_POST['del']);
		del(key($_POST['del']));
	}

	if (isset($_POST['register'])) {
		// mettre la key dans le sql
		modifier_informations($_SESSION['user_id'], $_POST['nom'], $_POST['prenom'], $_POST['type'], $_POST['telFixe'], $_POST['portable']);
		//$id, $name, $first_name, $user_type, $phone, $mobile
	}

	require('view/view_accueil_admin.php');
}
else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}
/*

javascript changement d'onglet sans recharger la page

*/
//require();