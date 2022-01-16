<?php
session_start();
if(!isset($_SESSION['Sesion_activa'])){
    header ("location: ../login-register/index.php");
}
?>

<?php 
    session_start();

    $id = $_SESSION['id'];
?>

<?php 
    include("conexion.php");
    $con=conectar();
    $sqlJoin25 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =25";
    $query25 = mysqli_query($con, $sqlJoin25) or die(mysqli_error($con));


    $sqlJoin26 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =26";
    $query26 = mysqli_query($con, $sqlJoin26) or die(mysqli_error($con));

    $sqlJoin27 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =27";
    $query27 = mysqli_query($con, $sqlJoin27) or die(mysqli_error($con));
   
    $sqlJoin28 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =28";
    $query28 = mysqli_query($con, $sqlJoin28) or die(mysqli_error($con));

    $sqlJoin29 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =29";
    $query29 = mysqli_query($con, $sqlJoin29) or die(mysqli_error($con));

    $sqlJoin30 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =30";
    $query30 = mysqli_query($con, $sqlJoin30) or die(mysqli_error($con));
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#menu-manual" data-offset="120" >
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
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="ind2.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex.php">Examenes</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Material_apoyo.php">Material de Apoyo</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="cursos.php">Cursos</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="asesorias.php">Asesorias</a>
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
<br>	       			
</header>
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
<br>

<div class="container-map" >
    <img id="Image-Maps" src="https://www.image-maps.com/m/private/0/816j99g6pisfr7leulk8sc1k4s_navbar.png" border="0"  width="1110" height="100" usemap="#image-maps-2021-05-26-141255" alt="" />
    <map name="image-maps-2021-05-26-141255" id="ImageMapsCom-image-maps-2021-05-26-141255">
    <area  alt="" title="" href="Material_apoyo.php" shape="rect" coords="76,19,186,77" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo2.php" shape="rect" coords="199,18,309,76" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo3.php" shape="rect" coords="321,18,431,76" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo4.php" shape="rect" coords="447,19,557,77" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo5.php" shape="rect" coords="565,18,675,76" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo6.php" shape="rect" coords="688,16,798,74" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo7.php" shape="rect" coords="815,18,925,76" style="outline:none;" target="_self"     />
    <area  alt="" title="" href="Material_apoyo8.php" shape="rect" coords="943,18,1056,71" style="outline:none;" target="_self"     />
    <area shape="rect" coords="1108,98,1110,100" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
    </map>
</div>
<br>
<br>


<section class="main">
<div class="container-modals" >
<button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mimodal" style="margin-bottom: 50px">Análisis de Algoritmos</button>
    <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="modalTitle">Análisis de Algoritmos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                    <?php
                     while($row25=mysqli_fetch_array($query25)){
                    ?>
                        <td><?php  echo $row25['autor']?></td>,                   
                        <td><?php  echo $row25['titulo']?></td>,
                        <td><?php  echo $row25['nom_editorial']?></td>
                        <td><?php  echo $row25['edición']?></td>
                        <td><?php  echo $row25['nom_pais']?></td>,
                        <td><?php  echo $row25['anio_public']?></td>.
                        <td><?php  echo $row25['no_pag']?></td>
                       
                        <br>
                        <td><?php  echo $row25['archivo']?></td>
                        <hr>
                                          
                        <?php 
                        }
                        ?>
        
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  
    
    
 <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal2"style="margin-bottom: 50px">Análisis de Señales</button>
    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Análisis de Señales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row26=mysqli_fetch_array($query26)){
                                ?>
                                    <td><?php  echo $row26['autor']?></td>,                   
                                    <td><?php  echo $row26['titulo']?></td>,
                                    <td><?php  echo $row26['nom_editorial']?></td>
                                    <td><?php  echo $row26['edición']?></td>
                                    <td><?php  echo $row26['nom_pais']?></td>,
                                    <td><?php  echo $row26['anio_public']?></td>.
                                    <td><?php  echo $row26['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row26['archivo']?></td>
                                    <hr>
                                                      
                                    <?php 
                                    }
                                    ?>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>    
    
    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal3"style="margin-bottom: 50px">Compiladores</button>
    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Compiladores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row27=mysqli_fetch_array($query27)){
                                ?>
                                    <td><?php  echo $row27['autor']?></td>,                   
                                    <td><?php  echo $row27['titulo']?></td>,
                                    <td><?php  echo $row27['nom_editorial']?></td>
                                    <td><?php  echo $row27['edición']?></td>
                                    <td><?php  echo $row27['nom_pais']?></td>,
                                    <td><?php  echo $row27['anio_public']?></td>.
                                    <td><?php  echo $row27['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row27['archivo']?></td>
                                    <hr>
                                                      
                                    <?php 
                                    }
                                    ?>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal4"style="margin-bottom: 50px">Humanidades V</button>
    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Humanidades V</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row28=mysqli_fetch_array($query28)){
                                ?>
                                    <td><?php  echo $row28['autor']?></td>,                   
                                    <td><?php  echo $row28['titulo']?></td>,
                                    <td><?php  echo $row28['nom_editorial']?></td>
                                    <td><?php  echo $row28['edición']?></td>
                                    <td><?php  echo $row28['nom_pais']?></td>,
                                    <td><?php  echo $row28['anio_public']?></td>.
                                    <td><?php  echo $row28['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row28['archivo']?></td>
                                    <hr>
                                                      
                                    <?php 
                                    }
                                    ?>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal5"style="margin-bottom: 50px">Organización de <br> Computadoras</button>
    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Organización de Computadoras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row29=mysqli_fetch_array($query29)){
                                ?>
                                    <td><?php  echo $row29['autor']?></td>,                   
                                    <td><?php  echo $row29['titulo']?></td>,
                                    <td><?php  echo $row29['nom_editorial']?></td>
                                    <td><?php  echo $row29['edición']?></td>
                                    <td><?php  echo $row29['nom_pais']?></td>,
                                    <td><?php  echo $row29['anio_public']?></td>.
                                    <td><?php  echo $row29['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row29['archivo']?></td>
                                    <hr>
                                                      
                                    <?php 
                                    }
                                    ?>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal6" style="margin-bottom: 50px">Probabilidad y Estadistica </button>
    <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Probabilidad y Estadistica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row30=mysqli_fetch_array($query30)){
                                ?>
                                    <td><?php  echo $row30['autor']?></td>,                   
                                    <td><?php  echo $row30['titulo']?></td>,
                                    <td><?php  echo $row30['nom_editorial']?></td>
                                    <td><?php  echo $row30['edición']?></td>
                                    <td><?php  echo $row30['nom_pais']?></td>,
                                    <td><?php  echo $row30['anio_public']?></td>.
                                    <td><?php  echo $row30['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row30['archivo']?></td>
                                    <hr>
                                                      
                                    <?php 
                                    }
                                    ?>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> 
    
</div>
</section>         
<br>
<br>

<?php require_once "vistas/parte_inferior.php" ?>