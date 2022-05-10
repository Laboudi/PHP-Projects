<?php
require 'ConnectDataBase.php';
$sql='SELECT * FROM module';
$statement=$connect->prepare($sql);
$statement->execute();
$module=$statement->fetchAll(PDO::FETCH_OBJ);
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
      <th scope="col">Titre de module</th>
      <th scope="col">Code de module</th>
      <th scope="col">Niveau</th>
      <th  colspan="2">Action</th> 
    </tr>
  </thead>
  <?php foreach ($module as $m):?>
  <tr>
   <td> <?= $m->Titre ?> </td>
   <td> <?= $m->Code ?> </td>
   <td> <?= $m->Niveau ?> </td>
   <td>
    <a href="updateM.php?idM=<?=$m->idModule ?>" class="btn btn-info">Update</a>
    <a href="deleteM.php?idM=<?=$m->idModule ?>" class="btn btn-danger">Delete</a>
   </td>
   </tr>
   <?php endforeach;?>
   </table>
</div>
</body>