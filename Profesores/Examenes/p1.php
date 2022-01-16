<?php
//header("Content-Type: text/html;charset=utf-8");
header("Content-Type: text/html; charset=iso-8859-1");
include_once '../conexion.php';
$con=conectar();

//empieza lista
$semestre=$_POST['id'];
$sql="SELECT id_materias, id_semestre, nom_materia  from materias where id_semestre='$semestre'";
	$result=mysqli_query($con,$sql);
	$cadena="<select id='lista2' name='lista2' placeholder='Escoge la materia' class='form-control input-md' style='font-size:16px;'>
	<br>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_decode($ver[2]).'</option>';
	}
	echo  $cadena."</select>";

?>