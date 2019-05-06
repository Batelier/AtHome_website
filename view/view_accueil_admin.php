<!DOCTYPE html>
<html>
	<head>
		<title>view_page_admin</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view\css\css_accueil_admin.css">
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
						<tr>
							<td> <?php echo $user[2];  ?> </td>
							<td> <?php echo $user[1];  ?> </td>
							<td> <?php echo $user[0];  ?> </td>
							<td> <?php echo $user[3];  ?> </td>
							<td> <?php echo $user[4];  ?> </td>
							<td> <button id="button_modifier" name="modifier[<?php echo($user[5]); ?>]"
							 		onclick="popup()" onclick="modifier_btn()">Modifier</button> </td>
							<td> <button id="button_delete">Supprimer</button> </td>
							<td> <?php echo("");  ?> </td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
		<div id="popup_modifier">
			<div id="header_modifier">
				<div id="txt_header_modifier">Modifier un élément</div>
				<div id="close_header_modifier" onclick="close_popup()"> &#10006 </div>
			</div>
			ceci est le popup_modifier
			<!-- code page supprimer/ modifier, appliquer l'id css de position relative --> 
		</div>
	</body>
</html>