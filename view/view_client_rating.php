<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_accueil_client.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_def_page.css">
</head>
<body>
	<div id="popup_add_">
		<div class="header_popup">
			<h1>Ajouter une note et un commentaire public</h1>
		</div>
		<div class="body_popup">
			<form method="post" action="" class="formulaire" name="form_modifier">
				<table>
					<tr>
						<td><label for="question">Note sur 5</label></td>
						<td>
							<select name="note">
								<option value="5">5 étoiles :D</option>
								<option value="4">4 étoiles</option>
								<option value="3">3 étoiles</option>
								<option value="2">2 étoiles</option>
								<option value="1">1 étoile</option>
								<option value="0">0 étoiles :(</option>
							</select>

						</td>
					</tr>
					<tr>
						<td><label for="answer">Commentaire</label></td>
						<td ><textarea required class="input_body" name="comment" id="answer" placeholder="Votre commentaire ici"></textarea></td>
					</tr>
				</table>
				<div class="bloc_register_button">
					<input type="submit" value="Poster ce commentaire" name="add_comment" class="register_button"  >
				</div>
			</form>
		</div>
	</div>
</body>
</html>