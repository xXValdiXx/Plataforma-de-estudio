<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

include("../conexion.php");
$con=conectar();


if( isset($_POST['Accion']) && $_POST['Accion'] == 1 ){
    
    $sql="SELECT * FROM materias WHERE id_semestre = " . $_POST['ID'];
    $query= mysqli_query($con,$sql) or die(mysqli_error($con));

    while($row=mysqli_fetch_array($query)){
        $respuesta[ $row['id_materias'] ] = array(
            "id_materias" =>  $row['id_materias'], 
            "nombre" =>  $row['nom_materia'],
        );
    }

    echo json_encode($respuesta);
}else{
        
    $asunto=$_POST['asunto'];
    $inicio=$_POST['iniciar'];
    $duracion=$_POST['duracion'];
    $clave=$_POST['clave'];
    $fecha_ini=$_POST['fecha_ini'];
    $fecha_ter=$_POST['fecha_ter'];
    $materias=$_POST['materias'];
    $id=$_SESSION['id'];

    $sql="INSERT INTO reuniones(asunto, iniciar, duracion, clave, fecha_ini, fecha_ter, id, id_materias) VALUES('$asunto','$inicio','$duracion','$clave','$fecha_ini','$fecha_ter', '$id', '$materias')";
    $query= mysqli_query($con,$sql) or die(mysqli_error($con));
    
    echo 2;

}


?>