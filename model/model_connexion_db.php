<?php
//fonction pour se connecter à la database
function db_windows(){
  global $db;
  if (!isset($db)) {
    $db = get_db_windows();
  }
}
function db_mac(){
  global $db;
  if (!isset($db)) {
    $db = get_db_mac();
  }
}
function get_db_mac() {
  return new PDO('mysql:host=localhost; dbname=athome_db', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
function get_db_windows() {
  return new PDO('mysql:host=localhost; dbname=athome_db', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

