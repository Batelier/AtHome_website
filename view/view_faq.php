<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<title>FAQ</title>
	<script type="text/javascript" src="controller/ajax_recherche.js"></script>
	<script type="text/javascript">
		function popup_modif(){
			document.getElementById('fond_noir').style.display = "block";
			document.getElementById('popup_modifier').style.display = "block";
		}
		function popup_add(){
			document.getElementById('fond_noir').style.display = "block";
			document.getElementById('popup_add').style.display = "block";
		}
		function close_popup(){
			document.getElementById('fond_noir').style.display = "none";
			document.getElementById('popup_modifier').style.display = "none";
			document.getElementById('popup_add').style.display = "none";
		}
	</script>

</head>
<body>
	<div id="corps">
		<div id="entete">
			<?php
			if ($_SESSION['isAdminConnected']){
				?>
				<div id="ajout">
					<form method="post" name="add">
						<input type="submit" name="show_add" value="+ Ajouter">
					</form>
				</div>
			<?php
			}
			?>
			<div id="recherche">
				<form method="post" action="routeur.php?cible=controller_faq" id="recherche">
			   		<input type="search" name="recherche" placeholder="Vos questions ..." onchange="recherche_dynamique(this.value)"/>
			   		<!--recherche_dynamique dans ajax_recherche-->
				</form>
				<br/>
				<div id="txtHint"><!-- Les suggestions s'affichent ici --></div>
			</div>
		</div>
		<div id="questions_frequentes">
			<?php
				foreach ($req as $data) {
			?>
			<section class="questions">
				<article>
					<p><strong><?php echo $data['question']; ?></strong></p>
					<p><?php echo $data['answer']; ?></p>
				</article>
				<div class="pied_article">
					<aside>
						<p><strong>Utilité : </strong><?php echo $data['useful'] ?></p>
					</aside>
					<?php
					if ($_SESSION['isAdminConnected']){
						?>
						<div class="gerer">
							<form method="post" name="suppr">
								<input type="submit" id="button_delete" name="suppr[<?php echo($data['question_id']); ?>]" value="Supprimer">
							</form>
							<form method="post" name="modif">
								<input type="submit" id="button_modifier" name="show_modifier[<?php echo($data['question_id']); ?>]" value="Modifier">
							</form>
						</div>
					<?php
					}
					?>
				</div>
			</section>
			<?php 
				}
			 ?>
		</div>
	</div>
	<div id="fond_noir"></div>

	<div id="popup_add">
		<div class="header_popup">
			<div class="txt_header">Modifier une Question-Réponse</div>
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
						<input type="submit" value="Modifier" name="register" class="register_button" >
					</div>
			</form>
		</div>
	</div>

	<div id="popup_modifier">
		<div class="header_popup">
			<div class="txt_header">Modifier une Question-Réponse</div>
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
						<input type="submit" value="Modifier" name="register" class="register_button" >
					</div>
			</form>
		</div>
	</div>

	<?php
		if (isset($_POST['show_modifier'])) {
			?> 
			<script type="text/javascript">popup_modif();</script>
		<?php
		} 
		?>
	<?php
		if (isset($_POST['show_add'])) {
			?> 
			<script type="text/javascript">popup_add();</script>
		<?php
		} 
		?>
</body>
</html>