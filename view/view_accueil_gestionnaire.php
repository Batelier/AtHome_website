<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>accueil_gestionnaire</title>
    <link href="view/css/css_accueil_gestionnaire.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="main_div">
    <div id = "leftSide"> <!-- contient : menu-->
        <div id="menu">
            <ul class="menul">
                <span id="titleMenu" class="notLastLi"> Menu </span>
                <li class="notLastLi"><a href="">Alerte Automatique</a></li>
                <li class="notLastLi"><a href="">Desactivite alerte</a></li>
            </ul>
        </div>
    </div>
    <div id="slogan">
        <span >Espace gestionnaire d'immeuble</span>
    </div>

    <div class="container_search">
            <form action="" class="parent_search">
                <input type="text">
                <input type="button" value="search">
            </form>
    </div>

    <div id="container_customer_information">
        <?php
        require("model/model_Page_gestionnaire.php");
        get_user();
        ?>
    </div>

</div>

</body>

</html>