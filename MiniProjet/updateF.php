<?php
require 'ConnectDataBase.php';

if(isset($_GET['idF'])){
    $id=$_GET['idF'];
    $sql='SELECT * FROM filiere WHERE idFiliere=:idF';
    try{
        $statement=$connect->prepare($sql);
        $statement->execute(array(':idF'=>$id));
        $filiere=$statement->fetch();
        
    }catch (Exception $e){ echo "error !!!". $e;}
    
    ?>
<html>
<head>
  <meta charset="UTF_8">  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de filiere</title>
</head>
<body>
<form action="updateF.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
   <input type="hidden" name="idF" class="form-control" id="id"  placeholder="id"  value="<?php echo $filiere['idFiliere'] ;?>" >
  </div>
  <div class="form-group">
    <label for="title">Titre de Filiere:</label>
    <input type="text" name="titreF" class="form-control" id="title"  placeholder="entrer le titre du filiere" value="<?php echo $filiere['titreFiliere'] ;?>">
  </div>
  <div class="form-group">
    <label for="password">Code de Filiere:</label>
    <input type="text" name="codeF" class="form-control" id="password"  placeholder="entrer le code du filiere" value="<?php echo $filiere['codeFiliere'] ;?>">
  </div>
  <div class="form-group">
    <label for="year">Annee d'accreditation:</label>
    <input type="text" name="annee1" class="form-control" id="year"  placeholder="entrer l'annee d'accreditation" value="<?php echo $filiere['anneeaccreditation'] ;?>">
  </div>
  <div class="form-group">
    <label for="year1">Annee de fin d'accreditation:</label>
    <input type="text" name="annee2" class="form-control" id="year1"  placeholder="entrer l'annee de fin d'accreditation" value="<?php echo $filiere['anneeFinaccreditation'] ;?>">
  </div>

  <br>
  <button type="submit" class="btn btn-primary" name="modifier">Update</button>
  </div>
</form>
</body>
</html>
<?php }else if(isset($_POST['titreF']) && isset($_POST['codeF']) && isset($_POST['annee1']) && isset($_POST['annee2']) && isset($_POST['modifier'])){
    try{ 
    $id=$_POST['idF'];
    $title=$_POST['titreF'];
    $psw=$_POST['codeF'];
    $a1=$_POST['annee1'];
    $a2=$_POST['annee2'];
    $sql='UPDATE filiere SET titreFiliere=:titreF, codeFiliere=:codeF ,anneeaccreditation=:annee1, anneeFinaccreditation=:annee2 WHERE idFiliere=:idF';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':titreF'=>$title ,':codeF'=>$psw,':annee1'=>$a1,':annee2'=>$a2,':idF'=>$id));
    header("Location:afficherFiliere.php ");
    }catch(Exception $e){
        echo $e;
    }
}

else{
    //header('Location:afficherModule.php');
}


?>

