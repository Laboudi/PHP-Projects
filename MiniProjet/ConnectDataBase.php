<?php
$pdo='mysql:host=localhost;dbname=structure_pedagogique';
$username='root';
$password='';
$pdo_options [PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
try{
    //se connecter a la base de donnee
    $connect = new PDO ( $pdo, $username, $password, $pdo_options );
    $connect->exec ( "SET CHARACTER SET utf8" );
    echo 'connection successful';
}catch(Exception $e){
    echo 'error'.$e;
}