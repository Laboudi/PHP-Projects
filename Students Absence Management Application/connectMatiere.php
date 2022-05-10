<?php
require 'ConnectDataBase.php';
//insertion des donnees dans la base de donnee:
if(isset($_POST['nomM']) && isset($_POST['codeMat']) && isset($_POST['createMat'])){
    $nom=$_POST['nomM'];
    $psw=$_POST['codeMat'];
    $sql='INSERT INTO matiere (NomMat,CodeMat) VALUES (:nomM,:codeMat)';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':nomM'=>$nom ,':codeMat'=>$psw));
    $_SESSION['message']="saved";
    $_SESSION['msg_type']="success";
    header('location: afficherMatiere.php');
}