function popup(){
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_ajouter_piece').style.display = "block";
}
function close_popup(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_ajouter_piece').style.display = "none";
}


function popup_add_home(){
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_ajouter_home').style.display = "block";
}
function close_popup_add_home(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_ajouter_home').style.display = "none";
}


function popup_manage_room(){
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_manage_room').style.display = "block";
}
function close_popup_manage_room(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_manage_room').style.display = "none";
}


function showUser(str){
    if (str == ""){
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        xmlhttp= new XMLHttpRequest();
    } else {
    if (window.ActiveXObject)
		try {
            xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) {
            try {
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                return NULL;
            }
        }
     }

    xmlhttp.onreadystatechange = function (){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
             document.getElementById("listeMaison").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "/AtHome/view/js/get_room.php?q=" + str, true);
    xmlhttp.send();
}
