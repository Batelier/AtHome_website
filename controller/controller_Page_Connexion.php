<?php
/*------------------------------------
- popup javascript
- changement de page selon le type d'utilisateur
- sécurité du changement de page --> à théorie craft
------------------------------------*/
require('model\model_Page_Connexion.php');

if (isset($_POST['email'])) {
	$values = login($_POST['email']);
	//if password is set and password is correct
	if (!empty($_POST['password']) AND ($values[1] == $_POST['password'])) {
		echo ($_POST['password']);
		echo ($values[1]);
		
		//popup Connexion établie

		header('Location:routeur?cible=controller_accueil_admin');
	}
}

require('view\view_connexion.php');

