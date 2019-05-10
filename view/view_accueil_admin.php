<!DOCTYPE html>
<html>
	<head>
		<title>view_page_admin</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view/css/css_accueil_admin.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<script type="text/javascript" src="res\js\admin_popup_modifier.js"></script>
		<script type="text/javascript" src="controller\ajax_admin_userList.js" ></script>

		<div id="main_div" >
			<table class="w3-table w3-bordered">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Mail</th>
					<th>Type d'utilisateur</th>
					<th>Date d'enregistrement</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
				<?php
					foreach ($all_users as $user) {
						//foreach entries in the table, create a line
						//balise <tr -> ligne   td -> colonne
						?>
						<tr id="user_row">
							<td> <?php echo $user[1];  ?> </td>
							<td> <?php echo $user[2];  ?> </td>
							<td> <?php echo $user[0];  ?> </td>
							<td> <?php echo $user[3];  ?> </td>
							<td> <?php echo $user[4];  ?> </td>
							<td> <button id="button_modifier" name="modifier[<?php echo($user[5]); ?>]"
							 		onclick="popup()" onclick="modifier_btn() ">Modifier</button> </td>
							<td> <button id="button_delete">Supprimer</button> </td>
							<td> <?php echo("");  ?> </td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>

		<div id="fond_noir"></div>

		<div id="popup_modifier">
			<div id="header_modifier">
				<div id="txt_header_modifier">Modifier un élément</div>
				<div id="close_header_modifier" onclick="close_popup()"> &#10006 </div>
			</div>
			<div id="body_popup_modifier">
				<form method="post" action="" id="formulaire">
						<table id="table_modifier">
							<tr>
								<td><label for="prenom">Prénom</label></td>
								<td><input class="input_field" type="text" name="prenom" id="prenom" maxlength="20" autofocus></td>
							</tr>
							<tr>
								<td><label for="nom">Nom</label></td>
								<td><input class="input_field" type="text" name="nom" id="nom" maxlength="20" ></td>
							</tr>
							<tr>
								<td><label for="telFixe">Téléphone fixe</label></td>
								<td><input class="input_field" type="tel" name="telFixe" id="telFixe" maxlength="10"></td>
							</tr>
							<tr>
								<td><label for="portable">Téléphone portable</label></td>
								<td><input class="input_field" type="tel" name="portable" id="portable" maxlength="10"></td>	
							</tr>
							
							<tr>
								<td><label for="date">Type d'utilisateur</label></td>
								<td>
									<select class="input_select" name='type'>
										<option value="utilisateur_principal">Utilisateur principal</option>
										<option value="utilisateur_secondaire">Utilisateur secondaire</option>
										<option value="gestionnaire">Gestionnaire d'immeuble</option>
										<option value="administrateur">Administrateur</option>
										<option value="technicien">Technicien</option>
									</select>
								</td>
							</tr>
						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Modifier les informations" name="register" id="register_button">
						</div>
				</form>
			</div>
			<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>		
	</body>
</html>