<?php 
    if(!empty($_POST["registrar"])){
        if(!empty($_POST["nombre"])and !empty($_POST["apellido"]) and !empty($_POST["numCta"]) and !empty($_POST["carrera"]) and !empty($_POST["semestre"]) and !empty($_POST["correo"])){
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $numCta=$_POST["numCta"];
            $carrera=$_POST["carrera"];
            $semestre=$_POST["semestre"];
            $correo=$_POST["correo"];

            $sql=$conexion->query("insert into alumnos(nombre, apellido, noCta, carrera, semestre, correo)values('$nombre','$apellido','$numCta','$carrera','$semestre','$correo')");
            if($sql==1){
                echo '<div class="alert-success">Alumno registrado</div>';
            }else{
                echo '<div class="alert-danger">Error al registrar</div>';
            }
        }else{
            echo '<div class="alert-warning">Algun campo está vacío</div>';
        }
    }
?>