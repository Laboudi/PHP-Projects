<?php
require 'ConnectDataBase.php';
$sql='SELECT * FROM matiere';
$statement=$connect->prepare($sql);
$statement->execute();
$matiere=$statement->fetchAll(PDO::FETCH_OBJ);
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
      <th scope="col">Nom de matiere</th>
      <th scope="col">Code de matiere</th>
      <th  colspan="2">Action</th> 
    </tr>
  </thead>
  <?php foreach ($matiere as $mat):?>
  <tr>
   <td> <?= $mat->NomMat ?> </td>
   <td> <?= $mat->CodeMat ?> </td>
   <td>
    <a href="updateMat.php?idMat=<?=$mat->idMatiere ?>" class="btn btn-info">Update</a>
    <a href="deleteMat.php?idMat=<?=$mat->idMatiere ?>" class="btn btn-danger">Delete</a>
   </td>
   </tr>
   <?php endforeach;?>
   </table>
</div>
</body>