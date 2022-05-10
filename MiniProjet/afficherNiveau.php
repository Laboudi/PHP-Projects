<?php
require 'ConnectDataBase.php';
$sql='SELECT * FROM niveau';
$statement=$connect->prepare($sql);
$statement->execute();
$niveau=$statement->fetchAll(PDO::FETCH_OBJ);
?>
<head>
<meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid mt-5">
<table class="table table-dark" style="border:1px solid white">
  <thead>
    <tr>
      <th scope="col">l'alias de niveau</th>
      <th scope="col">Titre</th>
      <th  colspan="2">Action</th> 
    </tr>
  </thead>
  <?php foreach ($niveau as $niv):?>
  <tr>
   <td> <?= $niv->Alias ?> </td>
   <td> <?= $niv->TitreNiveau ?> </td>
   <td>
    <a href="updateN.php?idN=<?=$niv->idNiveau ?>" class="btn btn-info">Update</a>
    <a href="deleteN.php?idN=<?=$niv->idNiveau ?>" class="btn btn-danger">Delete</a>
   </td>
   </tr>
   <?php endforeach;?>
   </table>
</div>
</body>
