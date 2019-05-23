<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view/css/css_header.css" />
		<link rel="stylesheet" href="view/css/css_accueil_admin.css" />
	</head>
	<body>
	<div class="header">
		<div class="bandeau">
			<div id="bloc_logo">
				<a href="routeur.php"><img src="res/logo_png.png" id="logo"></a>
			</div>
			<div id="bloc_slogan">
				<span id="text_slogan">Bienvenue sur AtHome !</span>
			</div>
			<div id="bloc_profil">
				<a href="routeur.php?cible=controller_admin_profil"><img id="profil" src="/AtHome/res/profil_pic.png" width="100em" height="100em"></a>
			</div>
		</div>
		<div class="naviguer">
			<ul>
				<li><a href="routeur.php?cible=controller_accueil_admin">Liste utilisateurs</a></li>
				<li><a href="routeur.php?cible=controller_admin_def_sensor">Definir disponibilités</a></li>
				<li><a href="routeur.php?cible=controller_admin_def_page">Catalogue des nouvelles</a></li>
				<li><a href="#messagerie">Messagerie</a></li>
				<li><a href="routeur?cible=controller_faq">FAQ</a></li>
			</ul>
		</div>
	</div>	
	
	</body>
</html>