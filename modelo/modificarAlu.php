<?php
    include "conexion.php";
    $id=$_GET["numCta"];
    $sql=$conexion->query(" select* from alumnos where numCta=$id");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
      <h5 class="text-center text-secondary">Modificar alumnos</h5>
      <input type="hidden" name="id" value="<?= $_GET["numCta"] ?>">
      <?php 
      include "controlador/modificarAlu.php";
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" name="nombre" value="<?php $datos->nombre ?>">
            </div>    
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido" value="<?php $datos->apellido ?>">
            </div>   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" value="<?php $datos->numCta ?>">No. de cuenta</label>
                <input type="text" class="form-control" name="numCta">
            </div>   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" value="<?php $datos->carrera ?>">Carrera</label>
                <input type="text" class="form-control" name="carrera">
            </div>   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" value="<?php $datos->semestre ?>">Semestre</label>
                <input type="text" class="form-control" name="semestre">
            </div>   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" value="<?php $datos->correo ?>">Correo institucional</label>
                <input type="text" class="form-control" name="correo">
            </div>    
      <?php  }
      ?>
      

      <button type="submit" class="btn btn-primary" name="registrar" value="ok">Editar</button>
  </form>
</body>
</html>