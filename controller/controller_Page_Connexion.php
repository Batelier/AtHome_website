<?php
session_start();

/*------------------------------------
- popup javascript -> DONE
- changement de page selon le type d'utilisateur -> DONE
- sécurité du changement de page --> à théorie craft  --> FINISHED
------------------------------------*/
require('model/model_Page_Connexion.php');

if (isset($_POST['email'])) {
	$values = login($_POST['email']);
	//if password is set and password is correct
	//values est un tableau contenant -> mail, password, user_type
	if (!empty($_POST['password']) AND (password_verify($_POST['password'], $values[1]))) {

		//tester quel type d'utilisateur est connecté pour renvoyer sur la bonne page
		//sécurité des pages -> si un random fait routeur?cible=admin.php alors qu'il n'est pas admin
		?> <script type="text/javascript">alert('pd')</script> <?php
		if ($values[2] == 'utilisateur_principal') {
			$_SESSION['isUserConnected'] = true;
			$_SESSION['test'] = 'SAAAAAAAAAAAAAALLLLLLLLLLLLLUT4';
			$_SESSION['id'] = recuperer_id($_POST['email'])[0];
			header('Location:routeur?cible=controller_Page_Accueil_Client');
		}
		else if ($values[2] == 'administrateur') {
			$_SESSION['isAdminConnected'] = true;
			//popup_connected();
			header('Location:routeur?cible=controller_accueil_admin');
		}
		else if ($values[2] == 'gestionnaire') {
		    $_SESSION['isGestionnaireConneted'] = true;
			//page_unavailable();
            header('Location:routeur?cible=controller_accueil_Gestionnaire');
		}
		else if ($values[2] == 'technicien') {
			//page_unavailable();

		}
	}
	else {
		//popup mdp ou login incorrect
	}
}

require('view/view_connexion.php');

