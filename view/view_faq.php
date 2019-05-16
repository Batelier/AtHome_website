<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css_header.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<title>FAQ</title>
	<script type="text/javascript" src="controller/ajax_recherche.js"></script>

</head>
<body>
	<div id="corps">
		<div id="entete">
			<?php
			if ($_SESSION['isAdminConnected']){
				?>
				<div id="ajout">
					<form method="post" action="routeur.php?cible=controller_faq">
						<input type="submit" name="ajout" value="+ ajouter">
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
			<section class="question">
				<article>
					<p><strong><?php echo $data['question']; ?></strong></p>
					<p><?php echo utf8_decode($data['answer']); ?></p>
				</article>
				<div class="pied_article">
					<aside>
						<p><strong>Utilité : </strong><?php echo $data['useful'] ?></p>
					</aside>
					<?php
					if ($_SESSION['isAdminConnected']){
						?>
						<div class="gerer">
							<form method="post" action="routeur.php?cible=controller_faq">
								<input type="submit" name="suppr" value="Supprimer">
								<input type="submit" name="modif" value="Modifier">
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
</body>
</html>