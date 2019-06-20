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

function popup_details(){
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_details').style.display = "block";
}
function close_popup_details(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_details').style.display = "none";
}
function popup_mod_piece(){
	document.getElementById('fond_noir').style.display = "block";
	document.getElementById('popup_mod_piece').style.display = "block";
}
function close_popup_mod_piece(){
	document.getElementById('fond_noir').style.display = "none";
	document.getElementById('popup_mod_piece').style.display = "none";
}




function graphique(id, data){
	var ctx = document.getElementById(id).getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['6h', '10h', '14h', '18h', '22h', '00h'],
	    datasets: [{
	      label: 'Luminosité',
	      data: data,
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
		}
	});
}

function graphique1(id, data){
	var ctx = document.getElementById(id).getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['14h10','14h20','14h30','14h40', '14h50', '15h00'],
	    datasets: [{
	      label: 'Luminosité',
	      data: data,
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
		}
	});
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

function showOpS(str){
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
