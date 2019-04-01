<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>page d'inscription</title>
		<link rel="stylesheet" type="text/css" href="css_view_Page_Inscription.css">
	</head>
	<body>
		<!-- balise de formulaire, method='post/get', action = adresse de la page qui va récupérer les données -->
		<form method="post" action="control_Page_Incription.php">

			<fieldset>
				<legend>Formulaire d'inscription</legend>
				<p>
					<label for="prenom">Prénom</label>
					<input type="text" name="prenom" id="prenom" maxlength="20" placeholder="Joe" autofocus required>
				</p>
				<p>
					<label for="nom">Nom</label>
					<input type="text" name="nom" id="nom" maxlength="20" placeholder="De La Vega" required>
				</p>
				<p>
					<label for="email">Mail</label>
					<input type="email" name="email" id="email" placeholder="GigaBaiseurDu93@gmail.com" required>
				</p>
				<p>
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" required>
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
					<select required>
						<option value="utilisateur_principal">Utilisateur Principal</option>
						<option value="gestionnaire">Gestionnaire d'immeuble</option>
						<option value="administrateur">Administrateur</option>
						<option value="technicien">Technicien</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Envoyer le formulaire">
				</p>
			</fieldset>
		</form>
	</body>
</html>
