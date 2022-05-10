<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF_8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Gestion de filiere</title>
</head>
<body>
<form action="ConnectFiliere.php" method="POST">
<div class="container col-md-6 mt-5">
  <div class="form-group">
    <input type="hidden" name="idF" class="form-control" id="id"  placeholder="id">
  </div>
  <div class="form-group">
    <label for="title">Titre de Filiere:</label>
    <input type="text" name="titreF" class="form-control" id="title"  placeholder="entrer le titre du filiere">
  </div>
  <div class="form-group">
    <label for="password">Code de Filiere:</label>
    <input type="text" name="codeF" class="form-control" id="password"  placeholder="entrer le code du filiere">
  </div>
  <div class="form-group">
    <label for="year">Annee d'accreditation:</label>
    <input type="text" name="annee1" class="form-control" id="year"  placeholder="entrer l'annee d'accreditation">
  </div>
  <div class="form-group">
    <label for="year1">Annee de fin d'accreditation:</label>
    <input type="text" name="annee2" class="form-control" id="year1"  placeholder="entrer l'annee de fin d'accreditation">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="createF">Create</button>
  </div>
</form>
</body>
</html>
