<!DOCTYPE html>
<html>
	<head>
		<title>view_page_admin</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view/css/css_accueil_admin.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<?php global $id; ?>
		<script type="text/javascript" src="res\js\admin_popup_modifier.js"></script>
		<script type="text/javascript" src="controller\ajax_admin_userList.js" ></script>
		
		<div id="ajax_search">
			<form method="post" name="tri">
				<label class="lbl">Afficher :</label>
				<select name="user">
					<option value="">Choisir un type d'utilisateur</option>
					<option value="utilisateur_principal">Utilisateur Principal</option>
					<option value="utilisateur_secondaire">Utilisateur Secondaire</option>
					<option value="administrateur">Administrateur</option>
					<option value="gestionnaire">Gestionnaire d'immeuble</option>
				</select>
				<input class="btn" type="submit" value="Actualiser" name="sub_type" ></input>
			</form>
		</div>
		<div id="main_div" >
			<table class="w3-table w3-bordered">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Mail</th>
					<th>Type d'utilisateur</th>
					<th>Date d'enregistrement</th>
					<th>Fixe</th>
					<th>Portable</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
				<?php
					foreach ($all_users as $user) {
						//foreach entries in the table, create a line
						//balise <tr -> ligne   td -> colonne
						?>
						<tr id="user_row">
							<td> <?php echo $user['first_name'];  ?> </td>
							<td> <?php echo $user['name'];  ?> </td>
							<td> <?php echo $user['mail'];  ?> </td>
							<td> <?php echo $user['user_type'];  ?> </td>
							<td> <?php echo $user['registration'];  ?> </td>
							<td> <?php echo $user['phone'];  ?> </td>
							<td> <?php echo $user['mobile'];  ?> </td>
							<td>
							<form method="post" name="sub_id">
								<input type="submit" id="button_modifier" value="Modifier" name="show_modifier[<?php echo($user['user_id']); ?>]" >
							</form>
							</td>
							<form onsubmit="really()" method="post">
								<td> <input type="submit" id="button_delete" name="del[<?php echo($user['user_id']); ?>]" value="Supprimer"></input> </td>
							</form>
							
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
				<form method="post" action="" id="formulaire" name="form_modifier">
						<table id="table_modifier">
							<tr>
								<td><label for="prenom">Prénom</label></td>
								<td><input class="input_field" type="text" name="prenom" id="prenom" maxlength="20" autofocus value=""></td>
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
								<td><label for="type">Type d'utilisateur</label></td>
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
							<input type="submit" value="Modifier les informations" name="register" class="register_button" >
						</div>
				</form>
			</div>
			<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
		<?php
		if (isset($_POST['show_modifier'])) {
			?> 
			<script type="text/javascript">popup(); </script>
			<?php
		} 
		?>		
	</body>
</html>