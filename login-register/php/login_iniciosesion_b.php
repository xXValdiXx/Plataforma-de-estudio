<?php
session_start();
/* llamar a BD */
include 'conexion_b.php';

/* VARIABLES */
$correo2 = $_POST['correo2'];
$contrasena2 = $_POST['contrasena2'];
$contrasena_encriptada = password_hash($contrasena2, PASSWORD_DEFAULT);

/*Validar lo del login y contraseña */
$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo2' ");
$row = mysqli_fetch_array($validar_login);

$contrasena_b= $row['contrasena'];

/*verifica si el correo y la contraseña encriptada concuerda con la contrasena ademas de los roles */
if(mysqli_num_rows($validar_login) > 0 && password_verify($contrasena2, $contrasena_b) && $row['id_rol']==1){
    
    $_SESSION['Sesion_activa'] = 1;
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido_paterno'] = $row['apellido_paterno'];
    $_SESSION['correo'] = $row['correo'];

    echo 1;
}else if (mysqli_num_rows($validar_login) > 0 && password_verify($contrasena2, $contrasena_b) && $row['id_rol']==2){
    
    $_SESSION['Sesion_activa'] = 1;
    $_SESSION['id'] = $row['id'];
    $_SESSION['id_rol'] = $row['id_rol'];
    $_SESSION['correo'] = $row['correo'];
    echo 2;
}
else if (mysqli_num_rows($validar_login) > 0 && password_verify($contrasena2, $contrasena_b) && $row['id_rol']==3){
    
    $_SESSION['Sesion_activa'] = 1;
    $_SESSION['id'] = $row['id'];
    $_SESSION['id_rol'] = $row['id_rol'];
    $_SESSION['correo'] = $row['correo'];
    echo 3;
}     
else{
    
   echo 0;
}

?>