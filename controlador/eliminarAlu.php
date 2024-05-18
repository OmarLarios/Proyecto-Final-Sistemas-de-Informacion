<?php

if(!empty($_GET["id"])) {

    $id = $_GET["id"];
    $sql = $conexion->query(" delete from Alumnos where numCta=$id ");

    if ($sql==1) {
        echo '<div class="alert alert-success">Alumno Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al Eliminar Alumno</div>';
    }
}
?>