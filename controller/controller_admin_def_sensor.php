<?php
session_start();

if (isset($_SESSION['isAdminConnected']) and $_SESSION['isAdminConnected'] == true) {
	//$_SESSION['isAdminConnected'] = false;
	include('view/view_header_admin.php');
	require('model/model_admin_def_sensors.php');

	$all_sensors = get_all_sensors();

	if (isset($_POST['mod'])) {
		$ui = key($_POST['mod']);
		$_SESSION['sensor_id'] = $ui;
		$current_sensor = get_sensor_info($ui);
	}
	if (isset($_POST['add_sensor'])) {
		//$manufacter, $model, $price, $orating_state
		add_sensor($_POST['constructeur'], $_POST['model'], $_POST['prix'], $_POST['orating_state'], $_POST['sensor_name'], $_POST['description']);
	}

	if (isset($_POST['mod_sensor'])) {
		mod_sensor($_POST['constructeur'], $_POST['model'], $_POST['prix'], $_POST['orating_state'], $_POST['sensor_name'], $_POST['description']);
	}
	
	if (isset($_POST['del'])) {
		//echo key($_POST['del']);
		del(key($_POST['del']));
	}

	require('view/view_admin_def_sensor.php');
}else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}