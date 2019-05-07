<?php 
/*
 - manque .php dans le require
 - .php dans le dernier include()

*/
require("model/model_faq_client.php");

$req = top_useful();

if (isset($_POST['recherche'])){
	$txt = $_POST['recherche']; 
	$req = search($text); 
}

include("view/view_header.php");
include("view/view_faq_client.php");