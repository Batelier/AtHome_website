<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" media="screen"  href="view\css\css_accueil.css">
</head>
<body>
	<!-- Logo , Espace texte Slogan, Se connecter, Inscription, mot de passe oublié
			Ratings, Nouvelles, Nous contacter, Footer, fond-->
	<div> <!-- main, centrage + fond-->
		<div id ="conteneur_principal">
			<div class="bloc_colonne1">
				<div id="bloc_logo_slogan">
					<div id="bloc_logo">
						<img src="res/logo_png.png" id="logo">
					</div>
					<div id="bloc_slogan">
						<span id="text_slogan">Avec AtHome, dab plus vite que ton ombre</span>
					</div>
				</div>
				<div id="bloc_ratings">
					<?php //select a random coment within those which are availables  ?>
				</div>
				<div id="bloc_nouvelles">
					
					<?php
						//foreach news create a new bloc
					?>
				</div>
				
			</div><!--  -->
			<div class="bloc_colonne2">
				<div id="bloc_connexion">
					<form method="post" action="routeur.php" name="login">
   						<input class="input_connexion" type="mail" name="email" placeholder="Email" />
   						<input class="input_connexion" type="password" name="password" placeholder="Mot de passe" />
   						<input class="co_button input_connexion" type="submit" value="Se Connecter">
					</form>
					<form method="post" action="routeur.php?cible=controller_Page_Inscription">
	   					<input class="co_button input_connexion" type="submit" value="Créer un compte">
					</form>
				</div>
				
				<div class="bloc_contact">
					<form id = "Contact" method="post" action="connexion.php">
						<br>
						<label>Nom complet</label>
   						<input class="input_contact" type="text" name="nom_complet" placeholder="Jean Dupont" />
   						<label>Adresse mail</label>
   						<input class="input_contact" type="text" name="mail" placeholder="exemple@gmail.com" />
   						<label>Message</label>
   						<textarea></textarea>
   						<input class="input_contact" type="submit" value="Envoyer">
					</form>
				</div>
			</div><!-- Se connecter, mdp oublié, inscription, Nous contacter -->
		</div>
		<footer>
			
		</footer>
	</div>
</body>
