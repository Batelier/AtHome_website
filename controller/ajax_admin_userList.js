function modifier_btn(){
	/*
	donner en argument l'id du machin pour tout afficher correctement
	*/
	//connexion au serveur
	var xhttp = new XMLHttpRequest();

	//this function is executed when it receives a response from the server
	xhttp.onreadystatechange() {
		//has to be 4 and 200 (see documentation)
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("txt_header_modifier").innerHTML = this.responseText;
		}
	}

	xhttp.open("GET", "athome_db" , true);
	xhttp.send();
}

