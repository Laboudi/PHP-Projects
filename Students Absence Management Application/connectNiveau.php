<?php
require 'ConnectDataBase.php';
//insertion des donnees dans la base de donnee:
if(isset($_POST['alias']) && isset($_POST['titreN']) && isset($_POST['createN'])){
    $alias=$_POST['alias'];
    $title=$_POST['titreN'];
    $sql='INSERT INTO niveau (Alias,TitreNiveau) VALUES (:alias,:titreN)';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':alias'=>$alias ,':titreN'=>$title));
    $_SESSION['message']="saved";
    $_SESSION['msg_type']="success";
    header('location: afficherNiveau.php');
}