<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>page d'inscription</title>
		<link rel="stylesheet" href="view\css\css_Page_Inscription.css">
	</head>
	<body>
		<div id="main_div">
			<div id="bloc_formulaire">
			<!-- balise de formulaire, method='post/get', action = adresse de la page qui va récupérer les données -->
				<form method="post" action="" id="formulaire">

					<fieldset>
						<legend>Formulaire d'inscription</legend>
						<table>
							<tr>
								<td><label for="prenom">Prénom</label></td>
								<td><input type="text" name="prenom" id="prenom" maxlength="20" placeholder="Jean" autofocus required
								value="<?php if(isset($prenom)) {echo($prenom);} ?>"></td>
							</tr>
							<tr>
								<td><label for="nom">Nom</label></td>
								<td><input type="text" name="nom" id="nom" maxlength="20" placeholder="Dupont" required></td>
							</tr>
						<tr>
							<td><label for="email">Mail</label></td>
							<td><input type="email" name="email" id="email" placeholder="exemple@gmail.com" required></td>
						</tr>
						<tr>
							<td><label for="password">Mot de passe</label></td>
							<td><input type="password" name="password" id="password" required></td>
						</tr>
						<tr>
							<td><label for="password_check">Vérifier mot de passe</label></td>
							<td><input type="password" name="password_check" id="password" required></td>
						</tr>
						<tr>
							<td><label for="telFixe">Téléphone fixe</label></td>
							<td><input type="tel" name="telFixe" id="telFixe" maxlength="10" required></td>
						</tr>
						<tr>
							<td><label for="portable">Téléphone portable</label></td>
							<td><input type="tel" name="portable" id="portable" maxlength="10" required></td>	
						</tr>
						<tr>
							<td><label for="date">Date d'inscription</label></td>
							<td><input type="date" name="date" id="date" required></td>
						</tr>
						<tr>
							<td><label for="date">Type d'utilisateur</label></td>
							<td>
								<select required name='type'>
									<option value="utilisateur_principal">Utilisateur Principal</option>
									<option value="gestionnaire">Gestionnaire d'immeuble</option>
									<option value="administrateur">Administrateur</option>
									<option value="technicien">Technicien</option>
								</select>
							</td>
						</tr>
						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Envoyer le formulaire" name="register" id="register_button">
						</div>
						
					</fieldset>
				</form>
			</div>
			<figure>
				<img src="\AtHome\res\join_us.png" id="img"/>
			</figure>
		</div>
	</body>
</html>
