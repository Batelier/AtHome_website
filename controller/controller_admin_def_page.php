<?php
session_start();

require('model/model_admin_def_page.php');

if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');

	$news = get_all_news();

	if (isset($_POST['add_news'])) {
		add_news($_POST['title'], $_POST['text']);
	}
	if (isset($_POST['mod'])) {
		$ui = key($_POST['mod']);
		$_SESSION['catalogue_id'] = $ui;
		$current_news = get_news_info($_SESSION['catalogue_id']);
	}
	
	if (isset($_POST['mod_news'])) {
		mod_news($_POST['mod_title'], $_POST['mod_text']);
	}
	if (isset($_POST['del'])) {
		del_news(key($_POST['del']));
	}

	require('view/view_admin_def_page.php');
}else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}
