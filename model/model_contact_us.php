<?php
require('C:/wamp64/www/AtHome/model/model_connexion_db.php');


function contact_us($complete_name,$mail,$message)
{

    try {
        db_connect(); //function from model_connexion_db.php
        global $db; //pour pouvoir utiliser l'objet db -> database

        $sql = "INSERT INTO contact_us(complete_name,mail,message) VALUES ('$complete_name','$mail','$message')";

      //  $req = $db->prepare = "INSERT INTO  contact_us(complete_name, mail, message) VALUES (?,?,?)";
      //  $req->excute([$complete_name,$mail,$message]);
        $db->exec($sql);
    }

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
}