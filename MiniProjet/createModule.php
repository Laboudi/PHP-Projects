<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de module</title>
</head>
<body>
<form action="ConnecterModule.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
    <input type="hidden" name="idM" class="form-control" id="id"  placeholder="id">
  </div>
  <div class="form-group">
    <label for="title">Titre de Module:</label>
    <input type="text" name="titre" class="form-control" id="title"  placeholder="entrer le titre du module">
  </div>
  <div class="form-group">
    <label for="password">Code de module:</label>
    <input type="text" name="code" class="form-control" id="password"  placeholder="entrer le code du module">
  </div>
  <div class="form-group">
    <label for="niv">Niveau:</label>
    <input type="text" name="niveau" class="form-control" id="niv"  placeholder="entrer le niveau">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="createM">Create</button>
  </div>
</form>
</body>
</html>

