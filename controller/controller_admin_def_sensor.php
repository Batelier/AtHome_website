<?php
session_start();

if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');

	require('view/view_admin_def_sensor.php');
}else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}