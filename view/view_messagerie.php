<!DOCTYPE html>
<html>
<head>
	<title>Messagerie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/css_admin_def_page.css">
	<link rel="stylesheet" type="text/css" href="view/css/css_faq.css">
	<link rel="stylesheet" href="view/css/css_accueil_admin.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<h1>Messages reçus</h1>
	<div id="bloc_msg">
		<?php
		foreach ($msg as $msg) {
				//boucler chaque bail
			?>
			<div id="news">
				<span class="news_title">Expéditeur : <?php echo $msg['complete_name']; ?> / Mail : <?php echo $msg['mail']; ?> </span>
				<span class="news_body"><?php echo $msg['message']; ?></span>
			</div>

			<?php
		}
		?>
	</div>
</body>
</html>