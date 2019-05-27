<!DOCTYPE html>
<html>
<head>
  <title>Nous contacter</title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="screen"  href="view/css/css_accueil.css">
</head>
<body>
  <div class="bloc_contact">
    <span id="txt_contact">Nous contacter</span>
    <script>
      function contact_us_alert()
      {
        alert("Merci de nous contacter! ");
      }
    </script>
    <form id = "Contact" action="routeur.php?cible=controller_contact_us" method="post" onsubmit="contact_us_alert()">
      <br>
      <label>Nom complet</label>
      <input class="input_contact" type="text" name="nom_complet" placeholder="Jean Dupont" required="required"/>
      <label>Adresse mail</label>
      <input class="input_contact" type="text" name="mail" placeholder="exemple@gmail.com" required="required" />
      <label>Message</label>
      <textarea name="text_area" required="required"></textarea>
      <input class="input_contact" type="submit" value="Envoyer" >

    </form>
  </div>
</body>
</html>

