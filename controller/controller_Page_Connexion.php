<?php
/*------------------------------------
- popup javascript
- changement de page selon le type d'utilisateur
- sécurité du changement de page
------------------------------------*/
require('model\model_Page_Connexion.php');

if (isset($_POST['email'])) {
	$values = login($_POST['email']);
	if ($values[1] == $_POST['password']) {
		echo ($_POST['password']);
		echo ($values[1]);
		//popup
		//echo("Vous êtes bien connecté");

		//header('Location:routeur');
	}
}

require('view\view_connexion.php');

