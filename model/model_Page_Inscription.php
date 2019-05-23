<?php
require('model/model_connexion_db.php');

function register($name, $first_name, $mail, $password, $phone, $mobile, $registration, $user_type)
{
	db_connect();
	//enregistrement de la personne dans la database
	global $db;
	$req = $db-> prepare('INSERT INTO user(name, first_name, password, mail, phone, mobile, registration, user_type) VALUES (?, ?,?,?,?,?,?,?)');
	$req-> execute([$name,$first_name,$password,$mail,$phone,$mobile,$registration,$user_type]);

}

function getUserId($name,$first_name,$mail)
{
    db_connect();
    //enregistrement de la personne dans la database
    global $db;
    $req = $db-> prepare('SELECT user_id from user where name=? and first_name=? and mail=?');
    $req->execute([$name,$first_name,$mail]);
    $values = $req -> fetch();
    return $values["user_id"];
}

function register_image($name,$first_name,$mail)
{
        db_connect();
        //enregistrement de la personne dans la database
        global $db;
        $form_data_name = $_FILES['image']['name'];
        $form_data_size = $_FILES['image']['size'];
        $form_data_type = $_FILES['image']['type'];
        $form_data = $_FILES['image']['tmp_name'];
        $data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));
        $req = $db->prepare('INSERT INTO image(bin_data,filename,filesize,file_type,user_id) VALUES (?,?,?,?,?)');
        $req->execute([$data, $form_data_name, $form_data_size, $form_data_type, getUserId($name, $first_name, $mail)]);

}




