<?php
 include_once 'conexion.php';
    class crudInsert{
        public static function guardarEstudiante() {
            $objetoconexion= new conexion();
            $conn= $objetoconexion->conectar();
            $cedula=$_POST['cedula'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $guardarestudiante= "INSERT INTO estudiantes VALUES('$cedula','$nombre','$apellido','$direccion','$telefono') ";
            $result=$conn->prepare($guardarestudiante);
            $result->execute();
            print_r("se guardo correctamente ");
        }
    }
?>