<!DOCTYPE html>
<html>
<head>
	<title>def_page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_def_page.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<link rel="stylesheet" href="view/css/css_accueil_admin.css">
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
		foreach ($news as $news) {
				//boucler chaque bail
			?>
			<div id="btns">
				<form method="post" name="sub_id">
					<input type="submit" id="button_modifier" class="mod_btn" value="Modifier" name="mod[<?php echo($news['catalogue_id']); ?>]" >
				</form>

				<form onsubmit="equip_del()" method="post">
					<td> <input type="submit" id="button_delete" class="mod_btn" name="del[<?php echo($news['catalogue_id']); ?>]" value="Supprimer"></input> </td>
				</form>
			</div>
			
			<div id="news">
				<span class="news_title"><?php echo $news['title']; ?></span>
				<span class="news_body"><?php echo $news['text']; ?></span>
			</div>

			<?php
		}
		?>
	</div>
	<div id="fond_noir"></div>
	<!-- ===================================popup=================================== -->
	<div id="popup_add">
		<div class="header_popup">
			<div class="txt_header">Ajouter une nouvelle au catalogue</div>
			<div class="close_header" onclick="close_popup()"> &#10006 </div>
		</div>
		<div class="body_popup">
			<form method="post" action="" class="formulaire" name="form_modifier">
				<table>
					<tr>
						<td><label for="question">Titre</label></td>
						<td><input class="input_title" name="title" id="question" autofocus value="" placeholder="Titre de la nouvelle"></input></td>
					</tr>
					<tr>
						<td><label for="answer">Annonce</label></td>
						<td ><textarea class="input_body" name="text" id="answer" value="" placeholder="Nouvelle"></textarea></td>
					</tr>
				</table>
				<div class="bloc_register_button">
					<input type="submit" value="Ajouter" name="add_news" class="register_button"  >
				</div>
			</form>
		</div>
	</div>

	<!-- ===================================popup=================================== -->
	<div id="popup_modifier">
		<div class="header_popup">
			<div class="txt_header">Modifier la nouvelle</div>
			<div class="close_header" onclick="close_popup()"> &#10006 </div>
		</div>
		<div class="body_popup">
			<form method="post" action="" class="formulaire" name="form_modifier">
				<table>
					<tr>
						<td><label for="question">Titre</label></td>
						<td><input class="input_title" name="mod_title" id="question" autofocus value="<?php echo($current_news['title']) ?>" ></input></td>
					</tr>
					<tr>
						<td><label for="answer">Annonce</label></td>
						<td ><textarea class="input_body" name="mod_text" id="answer" value="" ><?php echo($current_news['text']) ?></textarea></td>
					</tr>
				</table>
				<div class="bloc_register_button">
					<input type="submit" value="Modifier" name="mod_news" class="register_button"  >
				</div>
			</form>
		</div>
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