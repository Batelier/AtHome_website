<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include("view/view_header.php");
	require("view/view_client_rating.php");
	
}else{
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}