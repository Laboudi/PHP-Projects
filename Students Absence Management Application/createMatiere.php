<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de matiere</title>
</head>
<body>
<form action="ConnectMatiere.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
    <input type="hidden" name="idMat" class="form-control" id="id"  placeholder="id">
  </div>
  <div class="form-group">
    <label for="nom">Nom de matiere:</label>
    <input type="text" name="nomM" class="form-control" id="nom"  placeholder="entrer le nom de matiere">
  </div>
  <div class="form-group">
    <label for="password">Code de matiere:</label>
    <input type="text" name="codeMat" class="form-control" id="password"  placeholder="entrer le code de matiere">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="createMat">Create</button>
  </div>
</form>
</body>
</html>

