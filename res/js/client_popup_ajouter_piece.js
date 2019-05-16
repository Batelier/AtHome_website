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
function refresh() {
	$.ajax({
    url: "/AtHome/controller/controller_Page_Accueil_Client.php", // Ton fichier ou se trouve ton chat
    success:
        function(retour){
        $('#listeMaison').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
		}
	}); 
}