<?php

//Le routeur va par défaut sur la page de connexion, lors du premier appel

ini_set('display_errors', 1); //Modifie la valeur d'une option de configuration : passage à 1 pour activation

if (isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET et is not empty
    $url = $_GET['cible']; //user, sensor, etc.
    
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'controller_Page_Connexion';
}

require('controller/'.$url .'.php');



