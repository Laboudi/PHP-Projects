<?php
require 'ConnectDataBase.php';
$id = $_GET['idMat'];
$sql='delete from matiere where idMatiere=:idMat';
$statement = $connect->prepare($sql);
if(  $statement->execute(array('idMat' => $id))){
    header("Location:afficherMatiere.php");
}
