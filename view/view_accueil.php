<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" media="screen"  href="css\css_accueil.css">
</head>
<body>
	<!-- Logo , Espace texte Slogan, Se connecter, Inscription, mot de passe oublié
			Ratings, Nouvelles, Nous contacter, Footer, fond-->
	<div id="main_div"> <!-- main, centrage + fond-->
		<div id ="conteneur_principal">
			<div class="bloc_colonne1"> <!--  -->
				<img src="res/logo_png.png" id="logo"> <img src="res/slogan.jpeg" id="slogan"> 
				<p class="nouvelle1"> AtHome arrive bientôt chez vous</p>
				<p class="nouvelle2"> Pour niquer des mères </p>
			</div><!--  -->
			<div class="bloc_colonne2"> 
				<div class="bloc_connexion">
					<form method="post" action="connexion.php">
   						<input class="input_connexion" type="text" name="pseudo" placeholder="Email" />
   						<input class="input_connexion" type="password" name="pass" placeholder="Mot de passe" />
   						<input class="input_connexion" type="submit" value="Se connecter">
					</form>
				</div>
				<form method="post" action="controller\controller_Page_Inscription.php">
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
