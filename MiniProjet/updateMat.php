<?php
require 'ConnectDataBase.php';

if(isset($_GET['idMat'])){
    $id=$_GET['idMat'];
    $sql='SELECT * FROM matiere WHERE idMatiere=:idMat';
    try{
        $statement=$connect->prepare($sql);
        $statement->execute(array(':idMat'=>$id));
        $matiere=$statement->fetch();
        
    }catch (Exception $e){ echo "error !!!". $e;}
    
    ?>
<html>
<head>
  <meta charset="UTF_8">  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de filiere</title>
</head>
<body>
<form action="updateMat.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
   <input type="hidden" name="idMat" class="form-control" id="id"  placeholder="id"  value="<?php echo $matiere['idMatiere'] ;?>" >
  </div>
  <div class="form-group">
    <label for="nom">Nom de matiere:</label>
    <input type="text" name="nomM" class="form-control" id="nom"  placeholder="entrer le nom de matiere" value="<?php echo $matiere['NomMat'] ;?>">
  </div>
  <div class="form-group">
    <label for="password">Code de matiere:</label>
    <input type="text" name="codeMat" class="form-control" id="password"  placeholder="entrer le code de matiere" value="<?php echo $matiere['CodeMat'] ;?>">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="modifier">Update</button>
  </div>
</form>
</body>
</html>
<?php }else if(isset($_POST['nomM']) && isset($_POST['codeMat'])&& isset($_POST['modifier'])){
    try{ 
    $id=$_POST['idMat'];
    $nom=$_POST['nomM'];
    $psw=$_POST['codeMat'];
    $sql='UPDATE matiere SET NomMat=:nomM, CodeMat=:codeMat WHERE idMatiere=:idMat';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':nomM'=>$nom ,':codeMat'=>$psw,':idMat'=>$id));
    header("Location:afficherMatiere.php ");
    }catch(Exception $e){
        echo $e;
    }
}

else{
    //header('Location:afficherModule.php');
}


?>

