<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final S.I</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/43b2119797.js" crossorigin="anonymous"></script>
  </head>
<body>
  <h1 class="text-center p-3">Sistema de registro de alumnos</h1>
  <script>
    function eliminar(){
      let respuesta=confirm("Estas seguro de eliminar?");
      return respuesta;
    }
  </script>
<?php //conexion
  include "modelo/conexion.php";
  include "controlador/eliminarAlu.php";
?>

<div class="container-fluid row text-center">
  <form class="col-4 p-3" method="POST">
      <h3 class="text-center text-secondary">Registro de alumnos</h3>
      <?php 
        include "controlador/registro.php";
      ?>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre(s)</label>
          <input type="text" class="form-control" name="nombre">
      </div>    
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellidos</label>
          <input type="text" class="form-control" name="apellido">
      </div>   
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No. de cuenta</label>
          <input type="text" class="form-control" name="numCta">
      </div>   
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Carrera</label>
          <input type="text" class="form-control" name="carrera">
      </div>   
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Semestre</label>
          <input type="text" class="form-control" name="semestre">
      </div>   
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo institucional</label>
          <input type="text" class="form-control" name="correo">
      </div>   

      <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
  </form>

  <div class="col-8 p-4">
  <table class="table">
    <thead class="bg-info">
      <tr>
        <th scope="col">No. Cuenta</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Carrera</th>
        <th scope="col">Semestre</th>
        <th scope="col">Correo institucional</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        include "modelo/conexion.php";
        $sql=$conexion->query(" select * from Alumnos");
        while($datos=$sql->fetch_object()){?>
          <tr>
            <td><?= $datos-> numCta  ?></td>
            <td><?= $datos->nombre  ?></td>
            <td><?= $datos->apellido  ?></td>
            <td><?= $datos->carrera  ?></td>
            <td><?= $datos->semestre  ?></td>
            <td><?= $datos->correo  ?></td>
            <td>
              <a href="modificarAlu.php?numCta=<?= $datos-> numCta  ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a onclick="return eliminar()" href="index.php?id=<?= $datos-> numCta  ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>