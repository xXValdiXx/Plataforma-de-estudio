<?php
/* llamar a BD */
include 'conexion_b.php';
/* VARIABLES */
$nombre = $_POST['nombre'];
$paterno = $_POST['apellido_p'];
$materno = $_POST['apellido_m'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
$t_usuario = $_POST['rol'];


/*Almacernar datos en tablas */
if(buscaRepetido($usuario,$conexion)==1){
    echo 2;
}else if(buscaRepetido2($correo,$conexion)==1){
    echo 3;
}
else {
    $query = "INSERT INTO usuarios(nombre, apellido_paterno, apellido_materno, correo, usuario, contrasena, id_rol) VALUES('$nombre', '$paterno', '$materno', '$correo', '$usuario', '$contrasena_encriptada', '$t_usuario')";
    echo $ejecutar=mysqli_query($conexion, $query);
}

function buscaRepetido($user,$conexion){
    $query="SELECT * from usuarios 
        where usuario='$user'";
    $ejecutar=mysqli_query($conexion,$query);

    if(mysqli_num_rows($ejecutar) > 0){
        return 1;
    }else{
        return 0;
    }
}

function buscaRepetido2($email,$conexion){
    $query="SELECT * from usuarios 
        where correo='$email'";
    $ejecutar=mysqli_query($conexion,$query);

    if(mysqli_num_rows($ejecutar) > 0){
        return 1;
    }else{
        return 0;
    }
}
?>
