<!DOCTYPE html>
<html>
<head>
	<title>Modifier Profil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_accueil_admin.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_profil.css">
</head>
<body>
	<h1 class="title">Information de profil</h1>
	<div id="main_info">
		<form method="post" action="" id="formulaire" name="form_modifier">
			<table id="table_modifier">
				<tr>
					<td><label for="prenom">Prénom</label></td>
					<td><input class="input_field" type="text" name="prenom" id="prenom" maxlength="20" autofocus value="<?php echo($user_info['first_name']) ?>"></td>
				</tr>
				<tr>
					<td><label for="nom">Nom</label></td>
					<td><input class="input_field" type="text" name="nom" id="nom" maxlength="20" 
						value="<?php echo($user_info['name']) ?>"></td>
				</tr>
				<tr>
					<td><label for="mail">Mail</label></td>
					<td><input class="input_field" type="text" name="mail"
						value="<?php echo($user_info['mail']) ?>"></td>
				</tr>
				<tr>
					<td><label for="telFixe">Téléphone fixe</label></td>
					<td><input class="input_field" type="tel" name="telFixe" id="telFixe" maxlength="10"
						value="<?php echo($user_info['phone']) ?>"></td>
				</tr>
				<tr>
					<td><label for="portable">Téléphone portable</label></td>
					<td><input class="input_field" type="tel" name="portable" id="portable" maxlength="10"
						value="<?php echo($user_info['mobile']) ?>"></td>	
				</tr>
				<tr>
					<td><label for="portable">Date d'inscription</label></td>
					<td><span ><?php echo($user_info['registration']) ?></span></td>
				</tr>
				<tr>
					<td><label for="portable">Type d'utilisateur</label></td>
					<td><span ><?php echo($user_info['user_type']) ?></span></td>
				</tr>
			</table>

			<div class="bloc_register_button">
				<input type="submit" value="Modifier les informations" name="mod" class="register_button" >
			</div>
		</form>
		<div class="bloc_register_button">
			<form method="post">
				<input class="register_button" type="submit" value="Actualiser"></input>
			</form>
		</div>
		
	</div>
</body>
</html>