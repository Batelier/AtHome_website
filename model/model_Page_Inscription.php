<?php
function dbConnect()
{
	/*Fonction connexion à la database --> changr le nom de la db*/
	try {
		$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	} catch (Exception $e) {
		die('Erreur : ' .$e->getMesage());
	}
}