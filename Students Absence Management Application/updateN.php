<?php
require 'ConnectDataBase.php';

if(isset($_GET['idN'])){
    $id=$_GET['idN'];
    $sql='SELECT * FROM niveau WHERE idNiveau=:idN';
    try{
        $statement=$connect->prepare($sql);
        $statement->execute(array(':idN'=>$id));
        $niveau=$statement->fetch();
        
    }catch (Exception $e){ echo "error !!!". $e;}
    
    ?>
<html>
<head>
  <meta charset="UTF_8">  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de filiere</title>
</head>
<body>
<form action="updateN.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
   <input type="hidden" name="idN" class="form-control" id="id"  placeholder="id"  value="<?php echo $niveau['idNiveau'] ;?>" >
  </div>
  <div class="form-group">
    <label for="a">Alias de niveau:</label>
    <input type="text" name="alias" class="form-control" id="a"  placeholder="entrer l'alia" value="<?php echo $niveau['Alias'] ;?>">
  </div>
  <div class="form-group">
    <label for="title">Titre :</label>
    <input type="text" name="titreN" class="form-control" id="title"  placeholder="entrer le titre" value="<?php echo $niveau['TitreNiveau'] ;?>">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="modifier">Update</button>
  </div>
</form>
</body>
</html>
<?php }else if(isset($_POST['alias']) && isset($_POST['titreN'])&& isset($_POST['modifier'])){
    try{ 
    $id=$_POST['idN'];
    $alias=$_POST['alias'];
    $title=$_POST['titreN'];
    $sql='UPDATE niveau SET Alias=:alias, TitreNiveau=:titreN WHERE idNiveau=:idN';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':alias'=>$alias ,':titreN'=>$title,':idN'=>$id));
    header("Location:afficherNiveau.php ");
    }catch(Exception $e){
        echo $e;
    }
}

else{
    header('Location:afficherNiveau.php');
}


?>


