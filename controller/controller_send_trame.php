<?php
if (!isset($_SESSION['lum'])) {
	$_SESSION['lum'] = 3;
}

if ($_SESSION['lum'] == 3) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=009E&TRAME=1009E21020000");

	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
} elseif($_SESSION['lum'] == 2){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=009E&TRAME=1009E21030000");

	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
}

header('Location:routeur?cible=controller_Page_Accueil_Client');


