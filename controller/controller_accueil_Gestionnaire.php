<?php
session_start();

if (isset($_SESSION['isGestionnaireConneted']) and $_SESSION['isGestionnaireConneted'] == true) {
    //$_SESSION['isAdminConnected'] = false;
    include('view/view_header.php');

    require('view/view_accueil_gestionnaire.php');

}
else {
    echo "YOU ARE NOT LOGGED IN !";
    echo "<br> <a href=\"routeur.php\"> retour </a>";
}