<?php 
session_start();

require("model/model_faq.php");
$req = top_useful();

if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include("view/view_header.php");
	include("view/view_faq.php");

}

elseif (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true){
	include("view/view_header_admin.php");
	include("view/view_faq.php");
}

if (isset($_POST['recherche'])){

	$txt = $_POST['recherche']; 
	$req = search($txt); 
}


