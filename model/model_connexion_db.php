<?php
function dbConnect()
{
	$login = 'root';
	$passwordWindows = '';
	$passwordMAC = 'root';
	$host = 'localhost';
	$dbname = 'athome_db';
	/*Fonction connexion à la database --> changer le nom de la db*/
	try {
		/*tester connexion Windows*/
		$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $login, $passwordWindows);
		
	}catch (Exception $e) {

		try{
			/*tester connexion MAC*/
			$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $login, $passwordMAC);
		}catch(Exception $e){
			die('Erreur : ' .$e->getMesage());
		}
		
	}
}

