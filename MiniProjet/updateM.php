<?php
require 'ConnectDataBase.php';

if(isset($_GET['idM'])){
    $id=$_GET['idM'];
    $sql='SELECT * FROM module WHERE idModule=:idM';
    try{
        $statement=$connect->prepare($sql);
        $statement->execute(array(':idM'=>$id));
        $module=$statement->fetch();
        
    }catch (Exception $e){ echo "error !!!". $e;}
    
    ?>
<html>
<head>
  <meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de module</title>
</head>
<body>
<form action="updateM.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
   <input type="hidden" name="idM" class="form-control" id="id"  placeholder="id"  value="<?php echo $module['idModule'] ;?>" >
  </div>
  <div class="form-group">
    <label for="title">Titre de Module:</label>
    <input type="text" name="titre" class="form-control" id="title"  placeholder="entrer le titre du module" value="<?php echo $module['Titre'] ;?>">
  </div>
  <div class="form-group">
    <label for="password">Code de module:</label>
    <input type="text" name="code" class="form-control" id="password"  placeholder="entrer le code du module" value="<?php echo $module['Code'] ;?>">
  </div>
  <div class="form-group">
    <label for="niv">Niveau:</label>
    <input type="text" name="niveau" class="form-control" id="niv"  placeholder="entrer le niveau" value="<?php echo $module['Niveau'] ;?>">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="modifier">Update</button>
  </div>
</form>
</body>
</html>
<?php }else if(isset($_POST['titre']) && isset($_POST['code']) && isset($_POST['niveau']) && isset($_POST['modifier'])){
    try{ 
    $id=$_POST['idM'];
    $title=$_POST['titre'];
    $psw=$_POST['code'];
    $n=$_POST['niveau'];
    $sql='UPDATE module SET Titre=:titre, Code=:code ,Niveau=:niveau WHERE idModule=:idM';
    $statement=$connect->prepare($sql);
    $statement->execute(array(':titre'=>$title ,':code'=>$psw,':niveau'=>$n,':idM'=>$id));
    header("Location:afficherModule.php ");
    }catch(Exception $e){
        echo $e;
    }
}

else{
    header('Location:afficherModule.php');
}


?>

   