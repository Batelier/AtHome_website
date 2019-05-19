<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>accueil_gestionnaire</title>
    <link href="view/css/css_accueil_gestionnaire.css" rel="stylesheet" type="text/css">
    <script>
        function show(str)
        {

            if (str=="")
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest)
            {
                // IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {

                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                }
            }

            xmlhttp.open("GET","model/model_Page_gestionnaire.php?q="+str,true);
            xmlhttp.send();

        }
    </script>
</head>
<body>
<div id ="conteneur_principal">
<div id="bloc_colonne_left">
    <div id = "leftSide"> <!-- contient : menu-->
        <div id="menu">
            <ul class="menul">
                <span id="titleMenu" class="notLastLi"> Menu </span>
                <li class="notLastLi"><a href="">Alerte Automatique</a></li>
                <li class="notLastLi"><a href="">Desactivite alerte</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="bloc_colonne_right"
    <div id="slogan_searche">
        <div id="slogan">
        <span>Espace gestionnaire d'immeuble</span>
        </div>
    <div class="container_search">
            <form action="" class="parent_search">
                <input type="text">
                <input type="button" value="search">
            </form>
    </div>
    </div>

    <div id="container_customer_information">
        <div id="choix">
            <form id="form_choix">
                <script>
                    function f1(chk){
                        var t = document.getElementById("text_first_name");
                        t.disabled = !chk.checked;
                    }
                </script>
                all<input type="radio" name="select" value="all" onchange="show(this.value)"><br>
                first name:<input type="radio" name="select" onclick="f1(this)">
                <input type="text" name="first_name" id="text_first_name" disabled="disabled" onchange="show(this.value)">
            </form>
        </div>
        <div id="txtHint"></div>
</div>
</div>




</body>

</html>