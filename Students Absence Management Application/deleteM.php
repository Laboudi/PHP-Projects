<?php
require 'ConnectDataBase.php';
$id = $_GET['idM'];
$sql='delete from module where idModule=:idM';
$statement = $connect->prepare($sql);
if(  $statement->execute(array('idM' => $id))){
    header("Location:afficherModule.php");
}