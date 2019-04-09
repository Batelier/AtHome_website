<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" media="screen"  href="view\css\css_accueil.css">
</head>
<body>
	<!-- Logo , Espace texte Slogan, Se connecter, Inscription, mot de passe oublié
			Ratings, Nouvelles, Nous contacter, Footer, fond-->
	<div id="main_div"> <!-- main, centrage + fond-->
		<div id ="conteneur_principal">
			<div class="bloc_colonne1"> <!--  -->
				<img src="res/logo_png.png" id="logo"> <img src="res/slogan.jpeg" id="slogan"> 
				<p class="nouvelle1"> AtHome arrive bientôt chez vous</p>
				<p class="nouvelle2"> Nouveau capteur disponible ! </p>
			</div><!--  -->
			<div class="bloc_colonne2"> 
				<div class="bloc_connexion">
					<form method="post" action="routeur.php" name="login">
   						<input class="input_connexion" type="mail" name="email" placeholder="Email" />
   						<input class="input_connexion" type="password" name="password" placeholder="Mot de passe" />
   						<input class="input_connexion" type="submit" value="connexion">
					</form>
				</div>
				<form method="post" action="routeur.php?cible=controller_Page_Inscription">
   					<input class="input_compte" type="submit" value="Créer un compte">
				</form>
				<div class="bloc_contact">
					<form id = "Contact" method="post" action="connexion.php">
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
