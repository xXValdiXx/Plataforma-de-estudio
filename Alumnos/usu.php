<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Examenes </title>


 
<link  rel="stylesheet" href="assets/css/bootstrap.min.css">
<link  rel="stylesheet" href="assets/css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
 <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="assets/css/estilos.css">    
<style type="text/css">
.barraGobmx-enlaces{
	float: right;
	display: inline-block;
	margin:0px 5px;
}
.wrapp2 {
background-image: url("assets/image/fondex.jpg");
width:100%;
margin:auto;
padding: 20px 70px 0px 70px;
overflow: hidden;
}
form{
	width:500px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#800040;
}
.btn-primary {
  float: right;
    color: #fff;
    background-color: #168ac7 !important;
}

</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link  rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

<script src="assets/js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
<header >
<nav class="navbar navbar-expand-lg header-nav fixed-top " style="background-color:#dfdfdf;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/gobmxlogo.svg" class="img-fluid" width="100px" height="100px"></a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
	  <span></span>
	  <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarScroll">
      <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" >
        <li class="nav-item" >
          <a class="nav-link" aria-current="page" href="ind.php">Inicio</a>
        </li >
        <li <?php if(@$_GET['q']==1) echo'class="nav-item"'; ?>>
          <a class="nav-link" href="usu.php?q=1">Examenes Disponibles</a>
        </li>
		<li <?php if(@$_GET['q']==2) echo'class="nav-item"'; ?>>
          <a class="nav-link" href="usu.php?q=2">Calificaciones</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="feedback.php">Observaciones</a>
        </li>
      </ul>

	  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
	  <a class="nav-link" href="logout.php">Cerrar Sesión</a>
        </li>
	  </ul>
      
    </div>
  </div>
</nav>        			
</header>   
<br>
<br>	
        <!-- Encabezado principal -->
        <div class="u-noPaddingContainer contenedorGobierno">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="d-inline-block ipnLogo-enlace">
                            <img src="images/pleca-gob.png" alt=" Pleca de Gobierno " class="plecaGob_2">
                            <a href="https://www.ipn.mx" class="">
                                <img src="images/pleca-ipn.jpg"  alt=" Logo IPN " class="plecaGob">
                            </a>
                        </div>
                    </div>
                  </div>
                </div>
              </div> 
</head>
<body>
 <?php
    session_start();
    include_once 'conexion.php';
    $con=conectar();
    $correo = $_SESSION['correo'];
?>

<div class="wrapp2">
<!--home start-->
<?php if(@$_GET['q']==1) {
$result = mysqli_query($con,"SELECT * FROM detallequiz JOIN quiz ON detallequiz.eid=quiz.eid 
JOIN semestres ON detallequiz.id_semestre=semestres.id_semestre 
JOIN materias ON detallequiz.id_materias=materias.id_materias ORDER BY semestre") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Tema o Parcial</b></td><td><b>Semestre</b></td>
<td><b>Materia</b></td><td><b>Total de Preguntas</b></td>><td><b>Tiempo Límite</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
  $semestre=$row['semestre'];
  $materia=$row['nom_materia'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$correo'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$semestre.'</td><td>'.$materia.'</td><td>'.$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="usu.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><span class="title1"><b>&nbsp;Examen</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$semestre.'</td><td>'.$materia.'</td><td>'.$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="Examenes/up.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span><span class="title1"><b>&nbsp;Otra vez</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table></div></div>';
}?>

<!--quiz start-->
<?php
$con=conectar();
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " )or die('Error12');
echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<center><b>Pregunta &nbsp;'.$sn.'&nbsp;:&nbsp;'.$qns.'</b></center><br/>';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " )or die('Error14');
echo '<form action="Examenes/up.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br/>';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<p style="color:white"; "text-align:right";><input type="radio" name="ans" value="'.$optionid.'">'.$option.'</p>';
}
echo'<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Enviar</button><br><br></form><br></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}

//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$correo' " )or die('Error157');
echo  '<div class="panel" style="margin:5%">
<center><h1 class="title" style="color:#660033">Resultados</h1></center><br><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total de Preguntas</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>Respuestas Correctas&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Respuestas Equivocadas&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Calificación&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$correo' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
//echo '<tr style="color:#990000"><td>Calificación General&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';
}
?>

<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$correo' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Tema o Parcial</b></td><td><b>Semestre</b></td><td><b>Materia</b></td><td><b>Preguntas Resueltas</b></td><td><b>Buenas</b></td><td><b>Equivocadas<b></td><td><b>Puntaje</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT * FROM detallequiz JOIN quiz ON detallequiz.eid=quiz.eid 
JOIN semestres ON detallequiz.id_semestre=semestres.id_semestre
JOIN materias ON detallequiz.id_materias=materias.id_materias WHERE quiz.eid='$eid'" )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
$semestre=$row['semestre'];
$materia=$row['nom_materia'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$semestre.'</td><td>'.$materia.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}
?>
</div>
</div>
<br>
   <footer class="piePagina">
            
            <!-- Aviso IPN -->
            <div class="bg--guinda">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 pl-7 piePagina-texto">
                            <h3 class="text-center piePagina-titulo">INSTITUTO POLITÉCNICO NACIONAL</h3>
                            <p>
                                D.R. Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Alcaldía Gustavo A. Madero, C.P. 07738, Ciudad de México, 2019. Conmutador: 55 57 29 60 00 / 55 57 29 63 00.
                            </p>
                            <br>
    <p> Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-lg-12 pl-7">
                            <img src="images/educacion2.png" alt="SEP" class="EducacionplecaGob gob">
                         </div>
                    </div>
                </div>
            </div>

            <!-- Boton para regresar al inicio de la pagina -->
            <span id="top-contenedor">
                <a href="#" class="top-link" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </span>
        </footer>
</body>
</html>