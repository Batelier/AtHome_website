<?php
require("model/model_contact_us.php");

    if (isset($_POST['nom_complet']) AND isset($_POST['mail']))
    {
        $nom_complet = $_POST['nom_complet'];
        $email = $_POST['mail'];
        $text = $_POST['text_area'];
        contact_us($nom_complet,$email,$text);
} else {
        ?>
        <script type="text/javascript">
            alert("No complete information!")
        </script>
        <?php

    }


require("view/view_connexion.php");
