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
								$star_nb = $daily_comment["rating"]; //sera plus tard tiré de la bdd
								$user_name = $daily_comment['user_id'];
								$txt = $daily_comment["comment"];

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
						<span id="comment"> Anonyme : <?php echo ($txt) ?> </span>
					</div>
							
				</div>
				<div id="bloc_news">
					<fieldset>
						<legend>Catalogue des nouvelles</legend>
						<?php
						foreach ($news as $news) {
						//boucler chaque bail
							?>
							<div id="news" class="news_">
								<span class="news_title"><?php echo $news['title']; ?></span>
								<span class="news_body"><?php echo $news['text']; ?></span>
							</div>

							<?php
						}
						?>
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
					<span id="txt_contact">Nous contacter</span>
					<script>
						function contact_us_alert()
						{
							alert("Merci de nous contacter! ");
						}
					</script>
					<form id = "Contact" action="routeur.php?cible=controller_contact_us" method="post" onsubmit="contact_us_alert()">
						<br>
						<label>Nom complet</label>
						<input class="input_contact" type="text" name="nom_complet" placeholder="Jean Dupont" required="required"/>
						<label>Adresse mail</label>
						<input class="input_contact" type="text" name="mail" placeholder="exemple@gmail.com" required="required" />
						<label>Message</label>
						<textarea name="text_area" required="required"></textarea>
						<input class="input_contact" type="submit" value="Envoyer" >
					</form>
				</div>
			</div><!-- Se connecter, mdp oublié, inscription, Nous contacter -->
		</div>
		<footer>
			
		</footer>
	</div>
</body>
