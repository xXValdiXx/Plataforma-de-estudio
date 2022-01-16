<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


session_start();

include("../conexion.php");
$con=conectar();

    $titulo=$_POST['titulo'];
    $anio_public=$_POST['anio_public'];
    $no_pag=$_POST['no_pag'];
    $edicion=$_POST['edición'];
    $id=$_SESSION['id'];
    $id_tipo_rec=$_POST['id_tipo_rec'];
    $id_pais=$_POST['id_pais'];
    $id_idioma=$_POST['id_idioma'];
    $id_editorial=$_POST['id_editorial'];
    $id_materias=$_POST['id_materias'];
    
    $file_name = ( isset($_FILES['file']['name']) ) ? $_FILES['file']['name'] : 'error22';
    $file_tmp = $_FILES['file']['tmp_name'];
    $db_url_a= "../../RECURSOS/".$file_name;
    
    move_uploaded_file($file_tmp, $db_url_a);


$sql="INSERT INTO material_apoyo(titulo, anio_public, no_pag, edición, archivo, id, id_tipo_rec, id_pais, id_idioma, id_editorial, id_materias) 
VALUES('$titulo', '$anio_public', '$no_pag','$edicion', '$file_name', '$id', '$id_tipo_rec', '$id_pais', '$id_idioma', '$id_editorial', '$id_materias')";
$query= mysqli_query($con,$sql) or die(mysqli_error($con));

echo 2;




?>