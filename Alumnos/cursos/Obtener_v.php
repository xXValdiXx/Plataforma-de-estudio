<?php
include("../conexion.php");
$con=conectar();

$video =$_POST["id"];

$sql= "SELECT * FROM videos WHERE id_curso = $video";
$query2=mysqli_query($con, $sql);

$r = [];

while ($row = mysqli_fetch_assoc($query2)){
 $r[]=$row;
}
echo json_encode($r);
?>