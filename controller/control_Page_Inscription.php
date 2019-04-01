<?php
/*---------------------------------------*/
require('C:\wamp64\www\AtHome\model\model_connexion_db.php');
require('C:\wamp64\www\AtHome\model\model_Page_Inscription.php');


$yomek = 17;
require('C:\wamp64\www\AtHome\vues\view_Page_Inscription.php');
//require('model/model_Page_Inscription.php');
/*---------------------------------------*/
dbConnect();

//
$registration =$_POST['register'];
if (isset($registration)) {
	# code...
	echo "string";
}
