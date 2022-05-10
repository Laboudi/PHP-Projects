<?php
require 'ConnectDataBase.php';
$id = $_GET['idN'];
$sql='delete from NIVEAU where idNiveau=:idN';
$statement = $connect->prepare($sql);
if(  $statement->execute(array('idN' => $id))){
    header("Location:afficherNiveau.php");
}
