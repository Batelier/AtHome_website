<!DOCTYPE html>
<html>
	<head>
		<title>view_def_sensors</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view/css/css_accueil_admin.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<!-- ===================DEF SENSORS================== -->
	<body>
		<script type="text/javascript" src="res\js\admin_popup_modifier.js"></script>
		
		<!-- Ajouter un capteur -->
		<div id="ajax_search">
			<h1>Définir les capteurs disponibles</h1> 
			<button class="btn btn2" onclick="popup_add();">Ajouter un capteur</button>
			<form method="post">
				<input class="btn" type="submit" value="Actualiser" name="sub_type" ></input>
			</form>
		</div>

		<div id="main_div" >
			<table class="w3-table w3-bordered">
				<tr>
					<th>Nom</th>
					<th>Modèle</th>
					<th>Description</th>
					<th>Constructeur</th>
					<th>Prix</th>
					<th>Activité</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
				<?php
					foreach ($all_sensors as $user) {
						//foreach entries in the table, create a line
						//balise <tr -> ligne   td -> colonne
						?>
						<tr id="user_row">
							<td> <?php echo $user['name'];  ?> </td>
							<td> <?php echo $user['model'];  ?> </td>
							<td> <?php echo $user['description'];  ?> </td>
							<td> <?php echo $user['manufacter'];  ?> </td>
							<td> <?php echo $user['price'] . " €";  ?> </td>
							<td> <?php echo $user['orating_state'];  ?> </td>
							<td>
							<form method="post" name="sub_id">
								<input type="submit" id="button_modifier" value="Modifier" name="mod[<?php echo($user['equipment_id']); ?>]" >
							</form>

							<form onsubmit="equip_del()" method="post">
								<td> <input type="submit" id="button_delete" name="del[<?php echo($user['equipment_id']); ?>]" value="Supprimer"></input> </td>
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
								<td><label for="sensor_name">Nom</label></td>
								<td><input class="input_field" type="text" name="sensor_name" required maxlength="20" value="<?php echo($current_sensor['name']) ?>"></td>
							</tr>
							<tr>
								<td><label for="sensor_name">Description</label></td>
								<td><input required class="input_field" type="text" name="description" value="<?php echo($current_sensor['description']) ?>"></td>
							</tr>
							<tr>
								<td><label for="prenom">Modèle</label></td>
								<td><input required  class="input_field" type="text" name="model" id="prenom" maxlength="20" autofocus value="<?php echo($current_sensor['model']) ?>"></td>
							</tr>
							<tr>
								<td><label for="nom">Constructeur</label></td>
								<td><input  required class="input_field" type="text" name="constructeur" id="nom" value="<?php echo($current_sensor['manufacter']) ?>" ></td>
							</tr>
							<tr>
								<td><label for="telFixe">Prix</label></td>
								<td><input  required class="input_field" type="number" name="prix" id="telFixe" maxlength="10" value="<?php echo($current_sensor['price']) ?>"></td>
							</tr>
							<input type="hidden" name="orating_state" value="<?php echo($current_sensor['orating_state']) ?>">

						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Modifier les informations" name="mod_sensor" class="register_button" >
						</div>
				</form>
			</div>
			<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
		<div id="popup_add">
			<div id="header_modifier">
				<div id="txt_header_modifier">Ajouter un capteur</div>
				<div id="close_header_modifier" onclick="close_popup()"> &#10006 </div>
			</div>
			<div id="body_popup_modifier">
				<form method="post" action="" id="formulaire" name="form_add_sensor">
						<table id="table_modifier">
							<tr>
								<td><label for="sensor_name">Nom</label></td>
								<td><input required  class="input_field" type="tel" name="sensor_name" maxlength="20"></td>
							</tr>
							<tr>
								<td><label for="sensor_name">Description</label></td>
								<td><input  required class="input_field" type="tel" name="description" ></td>
							</tr>
							<tr>
								<td><label for="prenom">Modèle</label></td>
								<td><input required  class="input_field" type="text" name="model" id="prenom" maxlength="20" autofocus value=""></td>
							</tr>
							<tr>
								<td><label for="nom">Constructeur</label></td>
								<td><input required  class="input_field" type="text" name="constructeur" id="nom" maxlength="20" ></td>
							</tr>
							<tr>
								<td><label for="telFixe">Prix</label></td>
								<td><input  required class="input_field" type="number" name="prix" id="telFixe" maxlength="10"></td>
							</tr>
							<input type="hidden" name="orating_state" value="1">

						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Ajouter ce capteur" name="add_sensor" class="register_button" >
						</div>
				</form>
			</div>
			<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>	
		<?php
		if (isset($_POST['mod'])) {
			?> 
			<script type="text/javascript">
				popup_mod();
			</script>
			<?php
		} 
		?>	
	</body>
</html>