<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" media="screen"  href="view/css/css_accueil.css">
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
						<span id="text_slogan">Bienvenue sur AtHome !</span>
					</div>
				</div>
				<div id="bloc_text_annonce_ratings">
					<span id="text_annonce_ratings"> Ce qu'en disent nos utilisateurs :</span>
				</div>
				<div id="bloc_ratings">
					<div id="bloc_pics_rating">
						<div id="div_star">
							<?php 
								//select a random coment within those which are availables
								//model + controller import les variables 
								$star_nb = 4; //sera plus tard tiré de la bdd
								$user_name = "Joe ";
								$txt = "AtHome c'est vraiment le feu !";

								for ($i=0; $i < $star_nb; $i++) {
									?>
										<img src="res/star_rating.png" id="rating">
									<?php
								}
								for ($i=0; $i < 5- $star_nb; $i++) { 
									?>
										<img src="res/star_null.png" id="rating">
									<?php
								}
							 ?>	
					 	</div> <!-- fin div_star -->
					 	<div id="div_profil_pic">
					 		<img src="res/profil_pic.png" id="profil_pic">
					 	</div>
					</div>
					<div id="bloc_text_rating">
						<span id="comment"> <?php echo ($user_name) ?> nous dit : <?php echo ($txt) ?> </span>
					</div>
							
				</div>
				<div id="bloc_news">
					<fieldset>
						<legend>Catalogue des nouvelles</legend>
						<?php
							//foreach news create a new bloc
							//model + controller à faire  --> news LIMIT 5
							$news_1 = "Un nouveau capteur est disponible";
							//foreach ($variable as $key) {
								//pour chaque news, créer un nouveau machin, à mettre dans la boucle
							//}
						?>
						<div id="news">
							<?php echo($news_1)?> 
						</div>
						<div id="news">
							<?php echo($news_1)?> 
						</div>
					</fieldset>
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
					<form id = "Contact" method="post">
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
