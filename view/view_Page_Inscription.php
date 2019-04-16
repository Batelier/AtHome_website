<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>page d'inscription</title>
		<link rel="stylesheet" href="css/css_Page_Inscription.css">
	</head>
	<body>
		<div id="main_div">
			<div id="formulaire">
			<!-- balise de formulaire, method='post/get', action = adresse de la page qui va récupérer les données -->
				<form method="post" action="">

					<fieldset>
						<legend>Formulaire d'inscription</legend>
						<p>
							<label for="prenom">Prénom</label>
							<input type="text" name="prenom" id="prenom" maxlength="20" placeholder="Jean" autofocus required
								value="<?php if(isset($prenom)) {echo($prenom);} ?>">
						</p>
						<p>
							<label for="nom">Nom</label>
							<input type="text" name="nom" id="nom" maxlength="20" placeholder="Dupont" required>
						</p>
						<p>
							<label for="email">Mail</label>
							<input type="email" name="email" id="email" placeholder="exemple@gmail.com" required>
						</p>
						<p>
							<label for="password">Mot de passe</label>
							<input type="password" name="password" id="password" required>
						</p>
						<p>
							<label for="password_check">Vérification du mot de passe</label>
							<input type="password" name="password_check" id="password" required>
						</p>
						<p>
							<label for="telFixe">Téléphone fixe</label>
							<input type="tel" name="telFixe" id="telFixe" maxlength="10" required>
						</p>
						<p>
							<label for="portable">Téléphone portable</label>
							<input type="tel" name="portable" id="portable" maxlength="10" required>
						</p>
						<p>
							<label for="date">Date d'inscription</label>
							<input type="date" name="date" id="date" required>
						</p>
						<p>
							<label for="date">Type d'utilisateur</label>
							<select required name='type'>
								<option value="utilisateur_principal">Utilisateur Principal</option>
								<option value="gestionnaire">Gestionnaire d'immeuble</option>
								<option value="administrateur">Administrateur</option>
								<option value="technicien">Technicien</option>
							</select>
						</p>
						<p> 
							<input type="submit" value="Envoyer le formulaire" name="register">
						</p>
						
					</fieldset>
				</form>
			</div>
			<figure>
				<img src="\AtHome\res\fond1.jpg" id="img"/>
			</figure>
		</div>
	</body>
</html>
