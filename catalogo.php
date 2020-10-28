<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Catálogo de manuales online</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>
<div class="alert alert-primary" role="alert">
  Catálogo de manuales online
</div>
</ul>
	<div class="container mt-2">
		<div class="row">
  <form action="resultados.php" method="post" name="form" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Elige Tipo Busqueda:</label>
    <select name="tipobusqueda" class="form-control" id="exampleFormControlSelect1" >
      <option value="autor">Autor</option>
      <option value="titulo">Título</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Término busqueda</label>
    <input name="terminobusqueda" type="text"  class="form-control" id="exampleFormControlInput1">
  </div>
  <button type="submit" class="btn btn-primary" value="buscar">Buscar</button>
</form>
</body>
</html>