<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
</head>
<body>
<form action="ConnectNiveau.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
    <input type="hidden" name="idN" class="form-control" id="id"  placeholder="id">
  </div>
  <div class="form-group">
    <label for="a">Alias de niveau:</label>
    <input type="text" name="alias" class="form-control" id="a"  placeholder="entrer l'alia">
  </div>
  <div class="form-group">
    <label for="title">Titre :</label>
    <input type="text" name="titreN" class="form-control" id="title"  placeholder="entrer le titre">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="createN">Create</button>
  </div>
</form>
</body>
</html>
