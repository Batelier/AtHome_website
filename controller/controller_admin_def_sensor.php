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
	}
	if (isset($_POST['add_sensor'])) {
		//$manufacturer, $model, $price, $orating_state
		add_sensor($_POST['constructeur'], $_POST['model'], $_POST['prix'], $_POST['orating_state']);
	}

	require('view/view_admin_def_sensor.php');
}else {
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}