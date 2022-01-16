<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Observaciones</title> 
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
<!--header start-->
<?php
 include_once 'conexion.php';
 $con=conectar();
?>
<div class="wrapp2">

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel">
<b><h2 align="center" style="font-family:'typo'; color:#000066">RETROALIMENTACIÓN / INFORMAR UN PROBLEMA</h2></b>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;">&nbsp;'.@$_GET['q'].'</span>';
else
{echo'<center><b> 
Puedes enviarnos un email al siguiente correo: correo@gmail.com <br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
</div><div class="col-md-1"></div></div>
<p>o sencillamente puedes completar el siguiente formulario</p></center></b>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b style="color:white";>Nombre:</b><br /><br /><br /><b style="color:white";>Asunto:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Ingresa tu nombre" class="form-control input-md" type="text" required><br />    
   <input id="name" name="subject" placeholder="Escribe el asunto" class="form-control input-md" type="text" required>    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b style="color:white";>Dirección de correo:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email" required>    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Escribe tus retroalimentaciones aquí" required></textarea>
</div>
<div class="form-group" align="center"><br>
<input type="submit" name="submit" value="Enviar" class="btn btn-primary" />

</form><br></div>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
<!--</div> container end-->
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