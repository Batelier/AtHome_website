<?php

require('model\model_Page_Connexion.php');
if (isset($_POST['login'])) {
	login($_POST['email'], $_POST['password']);
}


require('view\view_accueil.php');

