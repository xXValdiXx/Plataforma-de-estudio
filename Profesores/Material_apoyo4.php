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
    $sqlJoin19 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =19";
    $query19 = mysqli_query($con, $sqlJoin19) or die(mysqli_error($con));


    $sqlJoin20 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =20";
    $query20 = mysqli_query($con, $sqlJoin20) or die(mysqli_error($con));

    $sqlJoin21 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =21";
    $query21 = mysqli_query($con, $sqlJoin21) or die(mysqli_error($con));
   
    $sqlJoin22 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =22";
    $query22 = mysqli_query($con, $sqlJoin22) or die(mysqli_error($con));

    $sqlJoin23 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =23";
    $query23 = mysqli_query($con, $sqlJoin23) or die(mysqli_error($con));

    $sqlJoin24 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =24";
    $query24 = mysqli_query($con, $sqlJoin24) or die(mysqli_error($con));
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
<button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mimodal" style="margin-bottom: 50px">Análisis Numerico</button>
    <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="modalTitle">Análisis Numerico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                    <?php
                     while($row19=mysqli_fetch_array($query19)){
                    ?>
                        <td><?php  echo $row19['autor']?></td>,                   
                        <td><?php  echo $row19['titulo']?></td>,
                        <td><?php  echo $row19['nom_editorial']?></td>
                        <td><?php  echo $row19['edición']?></td>
                        <td><?php  echo $row19['nom_pais']?></td>,
                        <td><?php  echo $row19['anio_public']?></td>.
                        <td><?php  echo $row19['no_pag']?></td>
                       
                        <br>
                        <td><?php  echo $row19['archivo']?></td>
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
    
    
 <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal2"style="margin-bottom: 50px">Circuitos Lógicos II</button>
    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Circuitos Lógicos II</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row20=mysqli_fetch_array($query20)){
                                ?>
                                    <td><?php  echo $row20['autor']?></td>,                   
                                    <td><?php  echo $row20['titulo']?></td>,
                                    <td><?php  echo $row20['nom_editorial']?></td>
                                    <td><?php  echo $row20['edición']?></td>
                                    <td><?php  echo $row20['nom_pais']?></td>,
                                    <td><?php  echo $row20['anio_public']?></td>.
                                    <td><?php  echo $row20['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row20['archivo']?></td>
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
    
    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal3"style="margin-bottom: 50px">Electrónica Analogica</button>
    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Electrónica Analogica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row21=mysqli_fetch_array($query21)){
                                ?>
                                    <td><?php  echo $row21['autor']?></td>,                   
                                    <td><?php  echo $row21['titulo']?></td>,
                                    <td><?php  echo $row21['nom_editorial']?></td>
                                    <td><?php  echo $row21['edición']?></td>
                                    <td><?php  echo $row21['nom_pais']?></td>,
                                    <td><?php  echo $row21['anio_public']?></td>.
                                    <td><?php  echo $row21['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row21['archivo']?></td>
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

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal4"style="margin-bottom: 50px">Humanidades IV</button>
    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Humanidades IV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row22=mysqli_fetch_array($query22)){
                                ?>
                                    <td><?php  echo $row22['autor']?></td>,                   
                                    <td><?php  echo $row22['titulo']?></td>,
                                    <td><?php  echo $row22['nom_editorial']?></td>
                                    <td><?php  echo $row22['edición']?></td>
                                    <td><?php  echo $row22['nom_pais']?></td>,
                                    <td><?php  echo $row22['anio_public']?></td>.
                                    <td><?php  echo $row22['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row22['archivo']?></td>
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

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal5"style="margin-bottom: 50px">Teoria de Automatas</button>
    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Teoria de Automatas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row23=mysqli_fetch_array($query23)){
                                ?>
                                    <td><?php  echo $row23['autor']?></td>,                   
                                    <td><?php  echo $row23['titulo']?></td>,
                                    <td><?php  echo $row23['nom_editorial']?></td>
                                    <td><?php  echo $row23['edición']?></td>
                                    <td><?php  echo $row23['nom_pais']?></td>,
                                    <td><?php  echo $row23['anio_public']?></td>.
                                    <td><?php  echo $row23['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row23['archivo']?></td>
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

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal6" style="margin-bottom: 50px">Variable Compleja </button>
    <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Variable Compleja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                                
                                <?php
                                 while($row24=mysqli_fetch_array($query24)){
                                ?>
                                    <td><?php  echo $row24['autor']?></td>,                   
                                    <td><?php  echo $row24['titulo']?></td>,
                                    <td><?php  echo $row24['nom_editorial']?></td>
                                    <td><?php  echo $row24['edición']?></td>
                                    <td><?php  echo $row24['nom_pais']?></td>,
                                    <td><?php  echo $row24['anio_public']?></td>.
                                    <td><?php  echo $row24['no_pag']?></td>
                                   
                                    <br>
                                    <td><?php  echo $row24['archivo']?></td>
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