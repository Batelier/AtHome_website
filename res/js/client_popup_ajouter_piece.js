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




function graphique(id){
	var ctx = document.getElementById(id).getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Ju', 'Jul','Aug','Sept','Oct','Nov','Dec'],
	    datasets: [{
	      label: 'Consommation d eau',
	      data: [12, 19, 3, 17, 6, 3, 7,8,15,11,10,8],
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
		}
	});
}

function graphique1(id){
	var ctx = document.getElementById(id).getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Ju', 'Jul','Aug','Sept','Oct','Nov','Dec'],
	    datasets: [{
	      label: 'Consommation électrique',
	      data: [6, 19, 12, 16, 20, 3, 2,8,1,11,15,15],
	      backgroundColor: "rgba(255,133,10,0.4)"
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
