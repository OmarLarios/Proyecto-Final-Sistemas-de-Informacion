<?php
    if(!empty($_POST["registrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numCta"]) and !empty($_POST["carrera"]) and !empty($_POST["semestre"]) and !empty($_POST["correo"])){
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $numCta=$_POST["numCta"];
            $carrera=$_POST["carrera"];
            $semestre=$_POST["semestre"];
            $correo=$_POST["correo"];
            $sql = $conexion->query("update Alumnos set nombre='$nombre',apellido='$apellido',numCta='$numCta',carrera='$carrera',semestre='$semestre',correo='$correo' where numCta=$id ")
        }else{
            echo "<div class='alert-danger> Campos vacíos </div>";
        }
    }
?>