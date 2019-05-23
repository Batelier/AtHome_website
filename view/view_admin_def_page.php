<!DOCTYPE html>
<html>
<head>
	<title>def_page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_def_page.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_def_page.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="res\js\admin_popup_modifier.js"></script>
</head>
<body>
	<div id="ajax_search">
		<h1>Catalogue des nouvelles</h1>
		<button class="btn btn2" onclick="popup_add()">Ajouter une nouvelle</button>
		<form method="post" name="tri">
			<input class="btn btn2" type="submit" value="Actualiser" name="sub_type" ></input>
		</form>
	</div>
	<div id="bloc_news">
		<?php
		$variable = array(0);
		foreach ($variable as $news) {
				//boucler chaque bail
			?>
			<div id="news">
				<span class="news_title">WTF MEC</span>
				<span class="news_body">coucou les amis</span>
			</div>

			<?php
		}
		?>
	</div>
	<div id="fond_noir"></div>
	<!-- ===================================popup=================================== -->
	<div id="popup_add">
		<div class="header_popup">
			<div class="txt_header">Ajouter une Question-Réponse</div>
			<div class="close_header" onclick="close_popup()"> &#10006 </div>
		</div>
		<div class="body_popup">
			<form method="post" action="" class="formulaire" name="form_modifier">
					<table>
						<tr>
							<td><label for="question">Question</label></td>
							<td><textarea class="input_field" name="question" id="question" autofocus value=""></textarea></td>
						</tr>
						<tr>
							<td><label for="answer">Réponse</label></td>
							<td class="answ"><textarea class="input_field" name="answer" id="answer" value="" ></textarea></td>
						</tr>
					</table>
					<div class="bloc_register_button">
						<input type="submit" value="Ajouter" name="add" class="register_button"  >
					</div>
			</form>
		</div>
	</div>

	<!-- ===================================popup=================================== -->
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
						<td><input class="input_field" type="tel" name="sensor_name" maxlength="20" value="<?php echo($current_sensor['name']) ?>"></td>
					</tr>
					<tr>
						<td><label for="sensor_name">Description</label></td>
						<td><input class="input_field" type="tel" name="description" maxlength="20" value="<?php echo($current_sensor['description']) ?>"></td>
					</tr>
					<tr>
						<td><label for="prenom">Modèle</label></td>
						<td><input class="input_field" type="text" name="model" id="prenom" maxlength="20" autofocus value="<?php echo($current_sensor['model']) ?>"></td>
					</tr>
					<tr>
						<td><label for="nom">Constructeur</label></td>
						<td><input class="input_field" type="text" name="constructeur" id="nom" maxlength="20" value="<?php echo($current_sensor['manufacturer']) ?>" ></td>
					</tr>
					<tr>
						<td><label for="telFixe">Prix</label></td>
						<td><input class="input_field" type="tel" name="prix" id="telFixe" maxlength="10" value="<?php echo($current_sensor['price']) ?>"></td>
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
</body>
</html>