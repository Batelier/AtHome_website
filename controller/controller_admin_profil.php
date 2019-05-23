<?php
session_start();

if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');
	require('model/model_admin_profil.php');

	$user_info = get_info($_SESSION['id']);

	if (isset($_POST['mod'])) {
		mod($_POST['prenom'], $_POST['nom'], $_POST['mail'], $_POST['telFixe'], $_POST['portable']);
	}

	require('view/view_admin_profil.php');
	
}elseif (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include('view/view_header.php');
	require('model/model_admin_profil.php');

	$user_info = get_info($_SESSION['id']);

	if (isset($_POST['mod'])) {
		mod($_POST['prenom'], $_POST['nom'], $_POST['mail'], $_POST['telFixe'], $_POST['portable']);
	}

	require('view/view_admin_profil.php');

}else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}