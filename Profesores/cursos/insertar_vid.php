<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');




include("../conexion.php");
$con=conectar();

    $nombre_video=$_POST['nombre_video'];
    $sinopsis=$_POST['sinopsis'];
    $id_curso=$_POST['id_curso'];
    
    $file_name = ( isset($_FILES['file']['name']) ) ? $_FILES['file']['name'] : 'error22';
    $file_tmp = $_FILES['file']['tmp_name'];
    $db_url_a= "videos/".$file_name;
    
    move_uploaded_file($file_tmp, $db_url_a);


$sql="INSERT INTO videos(nombre_video, sinopsis, archivo, id_curso) 
VALUES('$nombre_video', '$sinopsis', '$file_name', '$id_curso')";
$query= mysqli_query($con,$sql) or die(mysqli_error($con));

if($query){
    Header("Location: ../cursos.php");
}else {
}

?>
