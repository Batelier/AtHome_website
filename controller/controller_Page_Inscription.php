<!DOCTYPE html>
<?php
//controller page d'inscription
/*---------------------------------------
A RAJOUTER
- revoir popup js
- box de confirmation : j'accepte les conditions d'utilisations blablabla
- le css
- bouton come back à la page de connexion
- lors de la validation, affichage d'un popup : gg vous êtes bien inscrit
- lors de la validation, retour à la page de connexion
- un header adapté à la situation
- mot de passe chiffré --> FINISHED
- bdd : registration --> registration_date
- cette adresse mail est déjà utilisée
- ne pas permettre à tout le monde de créer un compte admin --> code unique à valider
- retaper deux fois le mot de passe --> FINISHED
---------------------------------------*/
//require le model
require('model\model_Page_Inscription.php');
//si le formulaire a été rempli, on l'inscrit dans la base de données
$val = 1;

if (isset($_POST['register'])) {
	//vérifier que le password soit le meme que le password_check
	if ($_POST['password'] == $_POST['password_check'])
	{
		$list_mail = get_email();
		foreach ($list_mail as $mail) {
			if ($mail[0] === $_POST['email']) {
				
				//header('Location:routeur.php?cible=controller_Page_Inscription');
				$val = 0;
			}
		}
		if ($val == 1) {
			register($_POST['nom'], $_POST['prenom'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT) , $_POST['telFixe'],$_POST['portable'],$_POST['date'],$_POST['type']);
		//register_image($_POST['nom'], $_POST['prenom'], $_POST['email']);

			?>
			<script type="text/javascript">
				confirm("Vous avez été inscrit !");
			</script>
			<?php
			header('Location:routeur.php');
		}else
		{
			?>
			<script type="text/javascript">
				alert("Cette adresse mail est déjà utilisée !");
			</script>
			<?php
		}
		
	}
	else{
		//alerte windows si le password et check sont différents
		?>
		<script type="text/javascript">
			window.alert("Le mot de passe et la vérification du mot de passe sont différents !");
		</script>
		<?php
	}	
}

//include header (à changer)
include('view/view_header_inscription.php');
//include view Page Inscription
require('view/view_Page_Inscription.php');