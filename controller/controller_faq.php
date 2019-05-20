<?php 
session_start();

require("model/model_faq.php");
$req = top_useful();
echo isset($_POST['question']);
echo isset($_POST['answer']); 

if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true){
	include("view/view_header_admin.php");
	
	if (isset($_POST['suppr'])){
		suppr($_POST['question_id']);
	}

	if (isset($_POST['question_id'])){
		/*Do stuff*/
		/*unset($_POST['modif']);*/
	}

	if ((isset($_POST['question'])&&isset($_POST['anwser']))&&(!isset($_POST['question_id']))) {
		ajout($_POST['question'], $_POST['answer']);
		/*Do stuff*/
	}

	include("view/view_faq.php");
}

elseif (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include("view/view_header.php");
	include("view/view_faq.php");

}


if (isset($_POST['recherche'])){

	$txt = $_POST['recherche']; 
	$req = search($txt); 
}

