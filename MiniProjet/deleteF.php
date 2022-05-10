<?php
require 'ConnectDataBase.php';
$id = $_GET['idF'];
$sql='delete from filiere where idFiliere=:idF';
$statement = $connect->prepare($sql);
if(  $statement->execute(array('idF' => $id))){
    header("Location:afficherFiliere.php");
}
