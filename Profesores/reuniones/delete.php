<?php

include("../conexion.php");
$con=conectar();

$id_reu=$_GET['id_reunion'];

$sql="DELETE FROM reuniones  WHERE id_reunion='$id_reu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../asesorias.php");
    }
?>
