<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Examenes </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
  <link rel="stylesheet" href="miest.css">
<link rel="stylesheet" href="seleimp.css">
<style type="text/css">
.barraGobmx-enlaces{
	float: right;
	display: inline-block;
	margin:0px 5px;
}
.wrapp2 {
background-image: url("fondex.jpg");
width:100%;
margin:auto;
padding: 20px 70px 0px 70px;
overflow: hidden;
}
</style>

<header class="d-none d-md-block">
                <div class="container u-noPaddingContainer">
                <div class="wrapp">
			<div class="logo">
				<a href="#"><img src="gobmxlogo.svg"></a>
			</div>
			<nav>
				<ul>
        <li><a href="ind.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Inicio<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="crearexa.php?q=0">Examenes<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="crearexa.php?q=4">Agregar examen</a></li>
        <li <?php if(@$_GET['q']==5) echo'class="active"'; ?>><a href="crearexa.php?q=5">Eliminar examen</a></li>
        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="crearexa.php?q=3">Observaciones</a></li> 
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <!--  </nav>
navigation menu closed-->
				</ul>
			</nav>
		</div>
        </header>
        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        
        <!-- Encabezado principal -->
        <div class="u-noPaddingContainer contenedorGobierno">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="d-inline-block ipnLogo-enlace">
                            <img src="pleca-gob.png" alt=" Pleca de Gobierno " class="plecaGob gob">
                            <a href="https://www.ipn.mx" class="">
                                <img src="pleca-ipn.jpg"  height= 130px alt=" Logo IPN " class="plecaGob">
                            </a>
                        </div>
                    </div>
                </div>
</head>
<body>
<?php
// include_once 'dbConnection.php';
//session_start();
//$email=$_SESSION['email'];
 // if(!(isset($_SESSION['email']))){
//header("location:index.php");
//}
//else
//{
//$name = $_SESSION['name'];;

include_once 'dbConnection.php';
?>

<div class="container"><!--container start-->

<div class="row">
<div class="col-md-12">
<div class="wrapp2">
<!--home start-->
<?php if(@$_GET['q']==0) {
$result = mysqli_query($con,"SELECT title,nombre_semestre,nombremateria,time,total FROM detallequiz JOIN quiz ON detallequiz.eid=quiz.eid 
JOIN semestre ON detallequiz.semestre_id=semestre.semestre_id 
JOIN materias ON detallequiz.materias_id=materias.materias_id ORDER BY nombre_semestre"  ) or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Tema o Parcial</b></td><td><b>Semestre</b></td><td><b>Materia</b></td><td><b>Total de Preguntas</b></td><td><b>Tiempo Límite</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	//$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
  $semestre=$row['nombre_semestre'];
  $materia=$row['nombremateria'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$semestre.'</td><td>'.$materia.'</td><td>'.$total.'</td><td>'.$time.'&nbsp;min</td>
	<!--<td><b><a href="usu.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Examen</b></span></a></b></td>--></tr>';  
}
$c=0;
echo '</table></div></div>';
}

?>
<!--home closed-->


<!--feedback start-->
<?php if(@$_GET['q']==3) {
$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Asunto</b></td><td><b>Correo Electrónico</b></td><td><b>Fecha</b></td><td><b>Hora</b></td><td><b>Enviado por</b></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$subject = $row['subject'];
	$name = $row['name'];
	$email = $row['email'];
	$id = $row['id'];
	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Clic para ver la observación" href="crearexa.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Abrir observación" href="crearexa.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Eliminar observación" href="up.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
}
echo '</table></div></div>';
}
?>
<!--feedback closed-->

<!--feedback reading portion start-->
<?php if(@$_GET['fid']) {
echo '<br />';
$id=@$_GET['fid'];
$result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$subject = $row['subject'];
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$feedback = $row['feedback'];
	
echo '<div class="panel"<a title="Back to Archive" href="up.php?q1=2"></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
 echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>Fecha:</b>&nbsp;'.$date.'</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Hora:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>Enviado por:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
}?>
<!--Feedback reading portion closed-->

<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 

<div class="row">
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="up.php?q=addquiz"  method="POST">
 <span class="title1" style="margin-left:40%;font-size:30px;"><center><b style="color:white";>Detalles del examen</b></center></span><br /><br />
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Ingrese el tema del examen o el parcial del examen" class="form-control input-md" type="text" required>
    
  </div>
</div>'
?>
      <select id='lista1' name='lista1' placeholder="Escoge el semestre " class="form-control input-md">
      <?php
      include_once 'dbConnection.php';
      $sql2="SELECT * from semestre";
    	$result2=mysqli_query($con,$sql2);
      ?>
      <option value="0">Selecciona un semestre</option>
      <?php foreach ($result2 as $opc1): ?>
        <option value="<?php echo $opc1['semestre_id'] ?>" selected='selected'> <?php echo $opc1['nombre_semestre']?> </option>
        <?php endforeach ?>
	</select>

			<br/>
			<div id="select2lista"></div>
      <script type="text/javascript">
      $(document).ready(function(){
        $('#lista1').val(0);
        recargarLista();
    
        $('#lista1').change(function(){
          recargarLista();
        });
      })
    </script>
    <script type="text/javascript">
      function recargarLista(){
        var semestre_id = $("#lista1").val();
        $.ajax({
          type:"POST",
          url:"p1.php",
          data: {"id":semestre_id},
          success:function(r){
            $('#select2lista').html(r);
          }
        });
      }
    </script>
<br>

<?php
echo '<!-- Text input-->

<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Ingrese el número total de preguntas" class="form-control input-md" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Ingrese el número de puntaje en la respuesta correcta" class="form-control input-md" min="0" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Ingrese el número de puntaje en la respuesta incorrecta sin signo" class="form-control input-md" min="0" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Ingrese el límite de tiempo para la prueba en minutos" class="form-control input-md" min="1" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="tag"></label>  
  <div class="col-md-12">
  <input id="tag" name="tag" placeholder="Ingrese una etiqueta para que puedan buscar el examen" class="form-control input-md" type="text" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Escribe una descripción acá..." required></textarea>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Enviar" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div><br><br>';
}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
echo ' 
<div class="row">
<div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="up.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
 <span class="title1" style="margin-left:40%;font-size:30px;"><center><b style="color:white";>Ingrese los detalles  de las preguntas</b></center></span><br /><br />
 <fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b style="color:white";>Pregunta número&nbsp;'.$i.'&nbsp;:</b><br /><br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Escribe la pregunta número '.$i.' acá..."></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="Ingresa la opción a" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="Ingresa la opción b" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="Ingresa la opción c" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="Ingresa la opción d" class="form-control input-md" type="text">
    
  </div>
</div>
<br />
<b style="color:white";>Escoge la respuesta correcta:</b><br/><br>
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Escoge la respuesta correcta " class="form-control input-md" >
   <option value="a">Seleccione la respuesta a la pregunta '.$i.'</option>
  <option value="a">opción a</option>
  <option value="b">opción b</option>
  <option value="c">opción c</option>
  <option value="d">opción d</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Enviar" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';
}
?><!--add quiz step 2 end-->

<!--remove quiz-->
<?php if(@$_GET['q']==5) {

$result = mysqli_query($con,"SELECT * FROM detallequiz JOIN quiz ON detallequiz.eid=quiz.eid 
JOIN semestre ON detallequiz.semestre_id=semestre.semestre_id 
JOIN materias ON detallequiz.materias_id=materias.materias_id ORDER BY nombre_semestre") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Tema o Parcial</b></td><td><b>Semestre</b></td><td><b>Materia</b></td><td><b>Total de Preguntas</b></td><td><b>Tiempo límite</b></td>
<td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	//$sahi = $row['sahi'];
  $time = $row['time'];
  $semestre=$row['nombre_semestre'];
  $materia=$row['nombremateria'];
	$eid = $row['eid'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$semestre.'</td><td>'.$materia.'</td><td>'.$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="up.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Eliminar</b></span></a></b>
  </td></tr>';
}
$c=0;
echo '</table></div></div>';

}
?>
</div><!--container closed-->
<br><br><br><br>
</div></div>
</div>
</div>
</div>
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
                            <img src="educacion2.png" alt="SEP" class="EducacionplecaGob gob">
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