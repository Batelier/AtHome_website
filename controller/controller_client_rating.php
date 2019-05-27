<?php
session_start();
require("model/model_client_rating.php");
if (isset($_SESSION['isUserConnected']) and $_SESSION['isUserConnected'] == true) {
	include("view/view_header.php");
	require("view/view_client_rating.php");

	if (isset($_POST['add_comment'])) {
		insert_comment($_POST['comment'], $_POST['note']);
		?> <script type="text/javascript">alert("Votre commentaire a bien été posté !");</script>
		<?php	
	}
	
}else{
	echo "YOU ARE NOT LOGGED IN !";
	echo "<br> <a href=\"routeur.php\"> retour </a>";
}