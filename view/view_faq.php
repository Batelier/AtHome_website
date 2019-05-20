<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<title>FAQ</title>
	<script type="text/javascript" src="controller/ajax_recherche.js"></script>
	<script type="text/javascript">
		function popup_ajout(){
			document.getElementById('fond_noir').style.display = "block";
			document.getElementById('bloc_popup_ajout').style.display = "flex";
		}
		function popup_modif(){
			document.getElementById('fond_noir').style.display = "flex";
			document.getElementById('bloc_popup_modif').style.display = "flex";
		}
		function close_popup(){
			document.getElementById('fond_noir').style.display = "none";
			document.getElementById('bloc_popup_ajout').style.display = "none";
			document.getElementById('bloc_popup_modif').style.display = "none";
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
					<!--<form method="post" action="routeur.php?cible=controller_faq" name="ajout" id="ajout">-->
						<div name="ajout" id="ajout" onclick="popup_ajout()" >+ Ajouter</div> 
					<!--</form>-->
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
			<section>
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
							<form method="post" action="routeur.php?cible=controller_faq" id="suppr">
								<input type="hidden" name="question_id" value="<?php echo ($data['question_id'])?>">
								<input type="submit" name="suppr" value="Supprimer" id="suppr">
							</form>
							<div id="modif">
							<!--<form method="post" action="routeur.php?cible=controller_faq" id="modif">-->
								<input type="hidden" name="question_id" value="<?php echo ($data['question_id'])?>">
								<div name="modif" id="modif" onclick="popup_modif()" >Modifier</div>
							<!--</form>-->
							</div>
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
		<div id="fond_noir">
			<div id="bloc_popup_ajout">
				<div class="popup">
					<div class="header_popup">
						<p>Ajouter une Question/Réponse</p>
						<div class="close_header" onclick="close_popup()"> &#10006 </div>
					</div>
					<div class="body_popup">
						<form form="ajout">
							<textarea form="ajout" name="question" id="question" placeholder="Question" autofocus></textarea>  
							<textarea form="ajout" name="reponse" id="reponse" placeholder="Réponse" ></textarea> 
							<input form="ajout" type="submit" value="Valider" name="valider" class="valider" >
						</form>
					</div> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>