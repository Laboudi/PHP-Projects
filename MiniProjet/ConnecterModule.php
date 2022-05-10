<?php
require 'ConnectDataBase.php';
//insertion des donnees dans la base de donnee:
if(isset($_POST['titre']) && isset($_POST['code']) && isset($_POST['niveau']) && isset($_POST['createM'])){
    $title=$_POST['titre'];
    $psw=$_POST['code'];
    $n=$_POST['niveau'];
    
    $sql='INSERT INTO module(Titre,Code,Niveau) VALUES (:titre, :code ,:niveau)';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':titre'=>$title ,':code'=>$psw,':niveau'=>$n));
    $_SESSION['message']="saved";
    $_SESSION['msg_type']="success";
    header('location: afficherModule.php');
}