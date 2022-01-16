<?php

include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
$rol=$_POST['id_rol'];

$sql="UPDATE usuarios SET  nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno', correo='$correo',usuario='$usuario', contrasena='$contrasena_encriptada',id_rol='$rol'   WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>