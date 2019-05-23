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
    <div id="bloc_page">
        <div id ="conteneur_principal">
            <div id="container_customer_information">
                <div id="choix">
                    <form id="form_choix">
                        <script>
                            function f1(chk){
                                var t = document.getElementById("text_first_name");
                                t.disabled = !chk.checked;
                            }
                        </script>
                        <p class="select">Trier :</p>
                        <div class="select">
                            <input type="radio" name="select" value="all" onchange="show(this.value)"/>
                            <label>All</label>
                        </div>
                        <div class="select">
                            <input type="radio" name="select" onclick="f1(this)"/>
                            <label>First name</label>
                        </div>
                        <div class="select">
                            <input type="search" name="first_name" id="text_first_name" disabled="disabled" onchange="show(this.value)"/> 
                        </div>
                    </form>
                </div>
                <div id="txtHint"></div>
            </div>
        </div>
    </div>
</body>
</html>