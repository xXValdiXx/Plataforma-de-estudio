<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Observaciones</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
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
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
<header class="d-none d-md-block">
                <div class="container u-noPaddingContainer">
                <div class="wrapp">
			<div class="logo">
				<a href="#"><img src="gobmxlogo.svg"></a>
			</div>
			<nav>
				<ul>
        <li><a href="ind.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Inicio<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?> ><a href="usu.php?q=0">&nbsp;Examenes disponibles</a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="usu.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Calificaciones</a></li>
        <li><a href="feedback.php">&nbsp;Observaciones</a></li>
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
<!--header start-->
<?php
 include_once 'dbConnection.php';
?>
<div class="wrapp2">

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel">
<h2 align="center" style="font-family:'typo'; color:#000066">RETROALIMENTACIÓN / INFORMAR UN PROBLEMA</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;">&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
Puedes enviarnos un email al siguiente correo: correo@gmail.com <br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
</div><div class="col-md-1"></div></div>
<p>o sencillamente puedes completar el siguiente formulario</p>
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
<div class="form-group" align="center">
<input type="submit" name="submit" value="Enviar" class="btn btn-primary" />
</div>
</form>';}?>
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