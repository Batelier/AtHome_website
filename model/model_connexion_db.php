<?php
function dbConnect()
{
	/*Fonction connexion à la database --> changer le nom de la db*/
	try {
		/*tester connexion Windows*/
		$db = new PDO('mysql:host=localhost;dbname=athome_db;charset=utf8', 'root', '');
		
	}catch (Exception $e) {

		try{
			/*tester connexion MAC*/
			$db = new PDO('mysql:host=localhost;dbname=athome_db;charset=utf8', 'root', 'root');
		}catch(Exception $e){
			die('Erreur : ' .$e->getMesage());
		}
		
	}
}

