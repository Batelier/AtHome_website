<?php
//controller page d'inscription
/*---------------------------------------
A RAJOUTER
- box de confirmation : j'accepte les conditions d'utilisations blablabla
- le css
- bouton come back à la page de connexion
- lors de la validation, affichage d'un popup : gg vous êtes bien inscrit
- lors de la validation, retour à la page de connexion
- un header adapté à la situation
- mot de passe chiffré
- bdd : registration --> registration_date
---------------------------------------*/
//require le model
require('model\model_Page_Inscription.php');
//si le formulaire a été rempli, on l'inscrit dans la base de données
if (isset($_POST['register'])) {
	register($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['telFixe'],$_POST['portable'],$_POST['date'],$_POST['type']);
}

//include header (à changer)
include('view\view_header.php');
//include view Page Inscription
require('view\view_Page_Inscription.php');