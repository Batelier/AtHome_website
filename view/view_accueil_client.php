<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page maison utilisateur principal ou secondaire</title>
	<link rel="stylesheet" href="/AtHome/view/css/css_accueil_client.css" />
</head>
<body>
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
					<li class="notLastLi"><a href="">Supprimer pièce</a></li>
					<li><a href="">Gestion routines</a></li>
					
				</ul>
			</div>
			<div id="favoris">
				<span id="titleMenu" class="notLastLi">Favoris</span>
			</div>
		</div>
		<div id = "rightSide"> <!-- contient barre de recherche, navigation et les différentes habitations -->	
			<div id="barreSearchNav">
				ici barre de navigation et de recherche
			</div>
			<div id="listeMaison">
				<div class="piece">
					<div class="infos_principales">
						<div class="nom_piece">
							<p>Cuisine <p>
						</div>
						<div class="pb">
							<div class="pb_img">
								<img  src="/AtHome/res/pb_jpg.jpg" width="20em" height="20em">
							</div>
							<div class="pb_lien">
								<a href="lienpbs">Problèmes</a>
							</div>
						</div>
						<div class="routine">
							<p>Routine : Eco</p>
						</div>
					</div>
					<div class="infos_supplementaires">
						<div class="bloc1">
							<div class="piece_img">
								<img src="/AtHome/res/cuisine.jpg" width="70em" height="70em"> 
							</div>
							<div class="gestion_piece">
								<a href="">Gérer pièce</a>
							</div>
						</div>
						<div class="liste_capteurs">
						<?php 
						while ($donnees = $reponse->fetch()){
						?>
							<div class="capteur">
								<p> <?php echo ($donnees['model'])?> </p>
									<label class="switch">
										<input type="checkbox">
										<span class="slider round"></span>
									</label>
								<form method="post">
									<input name="id_capteur" type="hidden" value=" <?php echo ($donnees['equipment_id'])?>">
									<input name="supprimer_capteur" type="submit" value="Supprimer">
								</form>
							</div>
						<?php } ?>
							
						</div class="ajouter_capteur">
						<!--
						<div class="ajouter_capteur">
							<a href="routeur.php?cible=controller_ajouter_capteur">Ajouter Capteur</a>
						</div>
						-->

							<form method="post" > <!-- action="/AtHome/model/model_ajouter_capteur.php"-->
								<select name="capteurs" size="1">
									<option>Choisir</option>
									<option>Luminosité</option>
									<option>Température</option>
									<option>Fumée</option>
								</select>
								<input type="submit" value="Ajouter" name="add_sensor">
							</form>
					</div>
				</div>
				
			</div>
		</div>
		<div id="fond_noir"></div>
		<div id="popup_ajouter_piece">
			<div id="header_ajouter_piece">
				<div id="txt_header_ajouter_piece">Ajouter une pièce</div>
				<div id="close_header_ajouter_piece" onclick="close_popup()"> &#10006 </div>
			</div>
			<div id="body_popup_ajouter_piece">
				<form method="post" action="" id="formulaire">
						<table id="table_ajouter_piece">
							<tr>
								<td><label for="prenom">Nom de la pièce</label></td>
								<td><input class="input_field" type="text" name="prenom" id="prenom" maxlength="20" autofocus></td>
							</tr>
							<tr>
								<td><label for="nom">Superficie de la pièce</label></td>
								<td><input class="input_field" type="number" step="0.1" name="nom" id="nom" maxlength="20" ></td>
							</tr>
						</table>
						<div id="bloc_register_button">
							<input type="submit" value="Valider" name="register" id="register_button">
						</div>
				</form>
			</div>
		<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
		
</body>