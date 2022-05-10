<?php
require 'ConnectDataBase.php';
$sql='SELECT * FROM filiere';
$statement=$connect->prepare($sql);
$statement->execute();
$filiere=$statement->fetchAll(PDO::FETCH_OBJ);
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
      <th scope="col">Titre de filiere</th>
      <th scope="col">Code de filiere</th>
      <th scope="col">Annee d'accreditation</th>
      <th scope="col">Annee de fin d'accreditation</th>
      <th  colspan="2">Action</th> 
    </tr>
  </thead>
  <?php foreach ($filiere as $f):?>
  <tr>
   <td> <?= $f->titreFiliere ?> </td>
   <td> <?= $f->codeFiliere ?> </td>
   <td> <?= $f->anneeaccreditation ?> </td>
   <td> <?= $f->anneeFinaccreditation ?> </td>
   <td>
    <a href="updateF.php?idF=<?=$f->idFiliere ?>" class="btn btn-info">Update</a>
    <a href="deleteF.php?idF=<?=$f->idFiliere ?>" class="btn btn-danger">Delete</a>
   </td>
   </tr>
   <?php endforeach;?>
   </table>
</div>
</body>