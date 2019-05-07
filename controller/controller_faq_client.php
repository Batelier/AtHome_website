<?php 
require("model/model_faq_client");

$req = top_useful();

if (isset($_POST['recherche'])){
	$txt = $_POST['recherche']; 
	$req = search($text); 
}

include("view/view_header.php");
include("view/view_faq_client");