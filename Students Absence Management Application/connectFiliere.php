<?php
require 'ConnectDataBase.php';
//insertion des donnees dans la base de donnee:
if(isset($_POST['titreF']) && isset($_POST['codeF']) && isset($_POST['annee1']) && isset($_POST['annee2']) && isset($_POST['createF'])){
    $title=$_POST['titreF'];
    $psw=$_POST['codeF'];
    $a1=$_POST['annee1'];
    $a2=$_POST['annee2'];
    $sql='INSERT INTO filiere (titreFiliere,codeFiliere,anneeaccreditation,anneeFinaccreditation) VALUES (:titreF, :codeF ,:annee1,:annee2)';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':titreF'=>$title ,':codeF'=>$psw,':annee1'=>$a1,':annee2'=>$a2));
    $_SESSION['message']="saved";
    $_SESSION['msg_type']="success";
    //header('location: afficherFiliere.php');
}