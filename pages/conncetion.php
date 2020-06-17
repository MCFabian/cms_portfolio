<?php 
    /*  USE FOR DOMAIN   $servername = "127.0.0.1:3306"; */
    $servername = "localhost:3306";
    $username = "Web";
    $password = "W_9bdb23";
    $database = "mainstage"; 
    $connection = new PDO("mysql:host=$servername; dbname=$database; charset=utf8", $username, $password);
?>