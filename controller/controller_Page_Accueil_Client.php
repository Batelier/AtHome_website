<?php
session_start();
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true)
{
	require("view/view_header.php");
	require("model/model_accueil_client.php");
	$reponse = query_captors();
	require("view/view_accueil_client.php");
}else{
header('routeur.php');}

