
function create_xhttp(){
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
      } else {
        if (window.ActiveXObject)
          try {
            xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
            try {
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
              return NULL;
            }
         }
      }   
}

function recherche_dynamique(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = ""; /* "textHint" est l'Id d'un div dans la view*/
    return;
  }
  xhttp = create_xhttp();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller_faq_client.php?q="+str /*wtf is that ?*/, true);
  xhttp.send();
}