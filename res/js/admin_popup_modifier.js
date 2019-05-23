function popup(){
    
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_modifier').style.display = "block";
}
function close_popup(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_modifier').style.display = "none";
   // document.getElementById('mod').style.display = "none";
    document.getElementById('popup_add').style.display = "none";
}
function really(){
    alert("Cet utilisateur va être supprimé.");
}
function equip_del(){
    alert("Cet capteur va être supprimé.");
}
function popup_add(){
    document.getElementById('fond_noir').style.display = "block";
    document.getElementById('popup_add').style.display = "block";
}
function popup_mod(){
    document.getElementById('fond_noir').style.display = "block";
    document.getElementById('popup_modifier').style.display = "block";
}

/*Ajax function*/
function ajax(str)
            {
                if (str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    xmlhttp= new XMLHttpRequest();
                } else {
                    if (window.ActiveXObject)
                        try {
                            xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                return NULL;
                            }
                        }
                }

                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "getuser.php?q=" + str, true);
                xmlhttp.send();
            }