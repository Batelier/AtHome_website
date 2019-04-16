<?php
session_start();
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	require("view/view_header.php");
	require("view/view_accueil_client.php");
}

