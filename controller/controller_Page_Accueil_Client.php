<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	if (isset($_POST['supprimer_capteur'])){
		delete_sensor((int)$_POST['id_capteur'], $_POST['ident_room']);
	}
	if (isset($_POST['button_delete_room'])){
		delete_room($_POST['identi_room']);
	}
	if (isset($_POST['delete_home'])){
			delete_home($_POST['home_id']);
	}


	if (isset($_POST['add_sensor']) and !($_POST['capteurs'] == "Choisir")) {
		ajouter_capteur(query_captors_by_model($_POST['capteurs'])[0], $_POST['id_room']);
	}

include("view/view_header.php");

	$reponse = query_captors();
	$reponse1 = query_captors();
	$reponse2 = get_addresses((int)$_SESSION['id']);
	$reponse3 = get_name_room((int)$_SESSION['id']);
	$reponse4 = get_addresses((int)$_SESSION['id']);
	$reponse5 = get_name_room((int)$_SESSION['id']);
	$req_jour = get_last_day();
	$jour = $req_jour -> fetch();
	$request6 = get_data('01','06',$jour[0]);
	$request10 = get_data('01','10',$jour[0]);
	$request14 = get_data('01','14',$jour[0]);
	$request18 = get_data('01','18',$jour[0]);
	$request22 = get_data('01','22',$jour[0]);
	$request00 = get_data('01','00',$jour[0]);

	echo "<script> var data = [] ;</script>";
	echo "<script> var data6 = [];</script>";
	while($data6 = $request6 -> fetch()){
		echo "<script> data6.push($data6[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data6.length; i++){
					moyenne = moyenne + parseInt(data6[i]) ;
				}
				moyenne = moyenne/data6.length;
				data.push(moyenne.toString());
		 		</script>";


	echo "<script> var data10 = [];</script>";
	while($data10 = $request10 -> fetch()){
		echo "<script> data10.push($data10[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data10.length; i++){
					moyenne = moyenne + parseInt(data10[i]) ;
				}
				moyenne = moyenne/data10.length;
				data.push(moyenne.toString());
				</script>";


	echo "<script> var data14 = [];</script>";
	while($data14 = $request14 -> fetch()){
		echo "<script> data14.push($data14[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data14.length; i++){
					moyenne = moyenne + parseInt(data14[i]) ;
				}
				moyenne = moyenne/data14.length;
				data.push(moyenne.toString());
				</script>";

	echo "<script> var data18 = [];</script>";
	while($data18 = $request18 -> fetch()){
		echo "<script> data18.push($data18[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data18.length; i++){
					moyenne = moyenne + parseInt(data18[i]) ;
				}
				moyenne = moyenne/data18.length;
				data.push(moyenne.toString());
			  </script>";

	echo "<script> var data22 = [];</script>";
	while($data22 = $request22 -> fetch()){
		echo "<script> data22.push($data22[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data22.length; i++){
					moyenne = moyenne + parseInt(data22[i]) ;
				}
				moyenne = moyenne/data22.length;
				data.push(moyenne.toString());
				</script>";

	echo "<script> var data00 = [];</script>";
	while($data00 = $request00 -> fetch()){
		echo "<script> data00.push($data00[0]);</script> ";
	}
	echo "<script>
				var i;
				var moyenne = 0;
				for (i=0; i<data00.length; i++){
					moyenne = moyenne + parseInt(data00[i]) ;
				}
				moyenne = moyenne/data00.length ;
				data.push(moyenne.toString());
				 </script>";

	echo "<script>
				var i;
				for (i=0; i<data.length; i++){
					if (data[i] == 'NaN'){
						data[i] = '0';
					}
				}</script>";
 	

	require("view/view_accueil_client.php");

	if (isset($_POST['register_button_ajouter_home'])) {
		add_home($_POST['address'],$_POST['code_postal'],$_POST['area_home'],$_SESSION['id']);
		echo "<script> window.location.replace('routeur.php?cible=controller_Page_Accueil_Client');</script>";
	}

	if (isset($_POST['register_button_ajouter_piece'])) {
		add_room($_POST['prenom'],$_POST['nom'],get_home_id($_POST['homes'])[0]);
		echo "<script> window.location.replace('routeur.php?cible=controller_Page_Accueil_Client');</script>";
	}
	if (isset($_POST['register_button_mod_piece'])) {
		mod_room($_POST['mod_name_piece'],$_POST['mod_area_piece'],$_POST['pieces']);
		echo "<script> window.location.replace('routeur.php?cible=controller_Page_Accueil_Client');</script>";
	}



	if (isset($_POST['on/off'])){
		change_operating_state();
	}


}else{

		echo "YOU ARE NOT LOGGED IN !";
		echo "<br> <a href=\"routeur.php\"> retour </a>";
	}
