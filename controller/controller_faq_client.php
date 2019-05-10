<?php 
/*
 - manque .php dans le require
 - .php dans le dernier include()

*/
require("model/model_faq_client.php");

/*if (isset($_SESSION['isClientConnected']) and $_SESSION['isClientConnected'] == true) {
*/
include("view/view_header.php");
$req = top_useful();

if (isset($_POST['recherche'])){
	$txt = $_POST['recherche']; 
	$req = search($text); 
}

include("view/view_faq_client.php");
/*}*/