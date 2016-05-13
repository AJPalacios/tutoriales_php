<?php

    include("conexion.php");

    if (isset($_POST['alumno']) && !empty($_POST['alumno']) &&
        isset($_POST['correo']) && !empty($_POST['correo'])) {

            $con=mysqli_connect($host,$user,$pw,$db);
            mysqli_query($con,("INSERT INTO alumnos (nombre,correo) VALUES ('$_POST[alumno]','$_POST[correo]')"));
            echo "datos insertados";
    }else {
        echo "error al insertar datos";
    }

 ?>
