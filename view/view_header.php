<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/AtHome/view/css/css_header.css" />
	</head>
	<body>
	<div class="header">
		<div class="bandeau">
			<div id="bloc_logo">
				<a href="routeur.php"><img src="/AtHome/res/logo_png.png" id="logo"></a>
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
				<li><a href="routeur.php?cible=controller_Page_Accueil_Client">Home</a></li>
				<li><a href="routeur.php?cible=controller_admin_profil">Compte</a></li>
				<li><a href="routeur.php?cible=controller_client_rating">Nous noter</a></li>
				<li><a href="routeur?cible=controller_faq">FAQ</a></li>
			</ul>
		</div>
	</div>	
	
	</body>
</html>