<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Page maison utilisateur principal ou secondaire</title>
	<link rel="stylesheet" href="css/css_accueil_client.css" />
</head>
<body>
	<!-- Insérer ici le code factorisé de l'entête et du menu --> 

	<div id= "main_div">
		<div id = "leftSide"> <!-- contient : menu et favoris -->
			<div id="menu">
				<ul class="menul">
					<span id="titleMenu" class="notLastLi"> Menu </span>
					<li class="notLastLi"><a href="">Modifier pièce</a></li>
					<li class="notLastLi"><a href="view_ajouter_piece.php">Ajouter pièce</a></li>
					<li class="notLastLi"><a href="">Supprimer pièce</a></li>
					<li><a href="">Gestion routines</a></li>
					
				</ul>
			</div>
			<div id="favoris">
				<span id="titleMenu" class="notLastLi">Favoris</span>
			</div>
		</div>
		<div id = "rightSide"> <!-- contient barre de recherche, navigation et les différentes habitations -->	
			<div id="barreSearchNav">
                <form action="" method="post">
                    <div class="search">
                        <input type="text" class="search_key" placeholder="rechercher"  />
                        <input type="submit" class="submit" value="rechercher">
                    </div>
                </form>
			</div>
			<div id="listeMaison">
				<div class="piece">
					<div class="infos_principales">
						<div class="nom_piece">
							<p>Cuisine <p>
						</div>
						<div class="pb">
							<img class="pb_img" src="/AtHome/res/pb_jpg.jpg" width="20em" height="20em">
							<a href="lienpbs">Problèmes</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Insérer ici le code factorisé du menu et du footer --> 
</body>