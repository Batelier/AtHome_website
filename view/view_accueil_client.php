<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Page maison : utilisateur principal ou secondaire</title>
	<link rel="stylesheet" href="/AtHome/view/css/css_accueil_client.css" />
	
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="/AtHome/res/js/client_popup_ajouter_piece.js"></script>
	<!-- Insérer ici le code factorisé de l'entête et du menu --> 
	<div id= "main_div">
		<div id = "leftSide"> <!-- contient : menu et favoris -->
			<div id="menu">
				<ul class="menul">
					<span id="titleMenu" class="notLastLi"> Menu </span>
					<li class="notLastLi"><a href="">Modifier pièce</a></li>
					<div class="inner_button">
						<button id="button_ajouter_piece" name="ajouter_piece" onclick="popup()" >Ajouter piece</button> </td>
					</div>
					<div class="inner_button">
						<button id="button_ajouter_home" name="ajouter_home" onclick="popup_add_home()" >Ajouter Home</button> </td>
					</div>
					<li><a href="">Gestion routines</a></li>
					
				</ul>
			</div>
			<div id="favoris">
				<span id="titleMenu" class="notLastLi">Favoris</span>
			</div>
		</div>
		<div id = "rightSide"> <!-- contient barre de recherche, navigation et les différentes habitations -->	
			<div id="barreSearchNav">
				<?php
				while ($donnees_adresses = $reponse2->fetch()){?>
				<div class="address">
					<input type="button" onclick="showUser(this.value)" class="choix_home" value="<?php echo $donnees_adresses[0];?>">
				</div>
				<?php } ?>
			</div>
			<div id="listeMaison">
				
			</div>
		</div>
		<div id="fond_noir"></div>
		<div id="popup_ajouter_piece">
			<div id="header_ajouter_piece">
				<div id="txt_header_ajouter_piece">Ajouter une pièce</div>
				<div id="close_header_ajouter_piece" onclick="close_popup()"> &#10006 </div>
			</div>
			<div id="body_popup_ajouter_piece">
				<form method="post" action="" class="formulaire">
						<table id="table_ajouter_piece">
							<tr>
								<td><label for="wich_home">Logement : </label></td>
								<td><select name="homes" id="homes">
									<?php 
									while ($donnees2 = $reponse4->fetch()){
									?>
									<option><?php echo $donnees2[0];?></option>
									<?php } ?>
								</select></td>
							</tr>
							<tr>
								<td><label for="prenom">Nom de la pièce : </label></td>
								<td><input class="input_field" type="text" name="prenom" id="prenom" maxlength="20" autofocus></td>
							</tr>
							<tr>
								<td><label for="nom">Superficie de la pièce : </label></td>
								<td><input class="input_field" type="number" step="0.1" name="nom" id="nom" maxlength="20" ></td>
							</tr>
						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Valider" name="register_button_ajouter_piece" id="register_button_ajouter_piece">
						</div>
				</form>
			</div>
		<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
	</div>
	<div id="popup_ajouter_home">
			<div id="header_ajouter_home">
				<div id="txt_header_ajouter_home">Ajouter un logement</div>
				<div id="close_header_ajouter_home" onclick="close_popup_add_home()"> &#10006 </div>
			</div>
			<div id="body_popup_ajouter_home">
				<form method="post"  class="formulaire">
						<table id="table_ajouter_home">
							<tr>
								<td><label for="address">Adresse de la maison : </label></td>
								<td><input class="input_field" type="text" name="address" id="address" maxlength="20" autofocus></td>
							</tr>
							<tr>
								<td><label for="code_postal">Code postal : </label></td>
								<td><input class="input_field" type="number" name="code_postal" id="code_postal" maxlength="20" ></td>
							</tr>
							<tr>
								<td><label for="area_home">Superficie de la maison : </label></td>
								<td><input class="input_field" type="number" name="area_home" id="area_home" maxlength="20" ></td>
							</tr>
						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Valider" name="register_button_ajouter_home" id="register_button_ajouter_home">
						</div>
				</form>
			</div>
		<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
	
</body>