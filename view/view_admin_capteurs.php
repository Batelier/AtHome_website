<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" media="screen"  href="view/css/css_accueil.css">
</head>
<body>
	<form action="/AtHome/controller/controller_admin_capteurs.php" method="post">
		<input type="text" name="nom">
		<input type="text" name="description">
		<input type="submit" value="Ajouter">
	</form>
</body>
