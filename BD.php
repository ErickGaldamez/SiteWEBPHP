<?php
class DB{
  private $connect;

  function __construct(){
    /* Connexion à mon serveur */
    $dsn = 'mysql:dbname=nuevappp;host=localhost';
    $user = 'root';
    $password = '';

    $this -> connect = new PDO($dsn, $user, $password);
  }
}
