<?php 
session_start();

require("model/model_faq.php");


if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include("view/view_header.php");
}

elseif (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true){
	include("view/view_header_admin.php");

	if (isset($_POST['show_modifier'])) {
		$qi = key($_POST['show_modifier']);
		$_SESSION['question_id'] = $qi;
	}

	//suprimer un elt
	if(isset($_POST['suppr'])){
		suppr(key($_POST['suppr']));
	}

	if (isset($_POST['register'])){
		if(isset($_SESSION['question_id'])){
			//modifier un elt
			modif($_SESSION['question_id'], $_POST['question'], $_POST['answer']);
		}
	}

	if(isset($_POST['add'])) {
			//ajouter un elt
			add($_POST['question'], $_POST['answer']);
		}
	}


if (isset($_POST['recherche'])){

	$txt = $_POST['recherche']; 
	$req = search($txt); 
}

$req = default_req();

include("view/view_faq.php");
