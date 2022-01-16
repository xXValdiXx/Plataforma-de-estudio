<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


session_start();

include("../conexion.php");
$con=conectar();

    $nombre_curso=$_POST['nombre_curso'];
    $fecha_inicio=$_POST['fecha_inicio'];
    $estado=$_POST['estado'];
    $id_materias=$_POST['id_materias'];
    $id=$_SESSION['id'];


$sql="INSERT INTO cursos(nombre_curso, fecha_inicio, estado, id, id_materias) 
VALUES('$nombre_curso', '$fecha_inicio', '$estado','$id', '$id_materias')";
$query= mysqli_query($con,$sql) or die(mysqli_error($con));

if($query){
Header("Location: ../cursos.php");
}else {
}
?>

