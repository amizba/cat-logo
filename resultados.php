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
<div class="alert alert-primary" role="alert">
	<?php

	$termino = $_POST['terminobusqueda']; 
    $tipo = $_POST['tipobusqueda']; 
   

	trim ($tipo);

	if(!$tipo || !$termino)
	{

		echo "Nos has introducido los detalles de la busqueda. Por favor, intentalo de nuevo";

		exit;
	}

	$tipo=addslashes($tipo);
	$termino=addslashes($termino);

	$obj_conexion=mysqli_connect('localhost', 'root', 'root', 'ebook');
    if(!$obj_conexion)
    {
        echo "<h4>No podemos conectar con la base de datos en estos momentos. Disculpe las molestia</h4><br>";

        exit;
    }
    

	$consulta="select * from manuales where ".$tipo." like'%".$termino."%'";
	$resultado= $obj_conexion->query($consulta);
	$num_resultados=mysqli_num_rows($resultado);
	echo "<p>Numero de manuales encontrados: ".$num_resultados."</p>";
	for($i=0; $i<$num_resultados; $i++)
	{
		$row=mysqli_fetch_array($resultado);

		echo "<p><strong>".($i+1).". Titulo: ";
		echo stripcslashes($row["Titulo"]);
		echo "</strong><br>Autor: ";
		echo stripcslashes($row["Autor"]);
	}


	?>

	</div>
	
</body>
</html>