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

    $query_rec= "SELECT * FROM tipo_recurso ORDER BY id_tipo_rec";
     $rec=mysqli_query($con,$query_rec);

      
     $query2_rec= "SELECT * FROM pais ORDER BY id_pais";
     $p=mysqli_query($con,$query2_rec);

     $query3_rec= "SELECT * FROM idioma ORDER BY id_idioma";
     $i=mysqli_query($con,$query3_rec);

     $query4_rec= "SELECT * FROM editorial ORDER BY id_editorial";
     $e=mysqli_query($con,$query4_rec);

     $query5_rec= "SELECT id_materias, nom_materia FROM materias ORDER BY id_materias";
     $mat=mysqli_query($con,$query5_rec);

    $sqlJoin = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =1 AND `id_tipo_rec` =1";
    $query = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin1_1 = "SELECT * FROM material_apoyo WHERE `id_materias` =1  AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query1_1 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

    $sqlJoin2 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` = 2 AND `id_tipo_rec` =1";
    $query2 = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin2_2 = "SELECT * FROM material_apoyo WHERE `id_materias` =2  AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query2_2 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

    $sqlJoin3 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =3 AND `id_tipo_rec` =1";
    $query3 = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin3_3 = "SELECT * FROM material_apoyo WHERE `id_materias` =3  AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query3_3 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

    $sqlJoin4 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =4 AND `id_tipo_rec` =1";
    $query4 = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin4_4 = "SELECT * FROM material_apoyo WHERE `id_materias` = 4 AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query4_4 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

    $sqlJoin5 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =5 AND `id_tipo_rec` =1";
    $query5 = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin5_5 = "SELECT * FROM material_apoyo WHERE `id_materias` =5  AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query5_5 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

    $sqlJoin6 = "SELECT * FROM material_apoyo JOIN editorial ON material_apoyo.id_editorial = editorial.id_editorial INNER JOIN pais ON material_apoyo.id_pais = pais.id_pais WHERE `id_materias` =6 AND `id_tipo_rec` =1";
    $query6 = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));

    $sqlJoin6_6 = "SELECT * FROM material_apoyo WHERE `id_materias` =6  AND `id_tipo_rec` =2 OR  `id_tipo_rec` =3  ";
    $query6_6 = mysqli_query($con, $sqlJoin1_1) or die(mysqli_error($con));

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
          <a class="nav-link" href="crearexa.php">Examenes</a>
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
<button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mimodal" style="margin-bottom: 50px">Calculo Diferencial<br> e Integral</button>
    <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="  modal-title text-center w-100" id="modalTitle">Calculo Diferencial e Integral.</h5> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
               
                <br>


                <h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
                <br>
                    
                <div class="table-responsive">
                                
                    <?php
                     while($row=mysqli_fetch_array($query)){
                    ?>
                                       
                        <td><?php  echo $row['titulo']?></td>,
                        <td><?php  echo $row['nom_editorial']?></td>
                        <td><?php  echo $row['edición']?></td>
                        <td><?php  echo $row['nom_pais']?></td>,
                        <td><?php  echo $row['anio_public']?></td>.
                       
                        <br>
                        <td><a href="<?php  echo $row['archivo']?>"  class=""><?php  echo $row['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                <h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
                <br>
                <?php
                     while($row1_1=mysqli_fetch_array($query1_1)){
                    ?>
                                       
                        <td><?php  echo $row1_1['titulo']?></td>

                        <br>
                        <td><a href="../RECURSOS/<?php  echo $row1_1['archivo']?>"  class=""><?php  echo $row1_1['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                         
        
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">SUBIR RECURSO</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SUBIR RECURSO</h5>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" id="subirRecursosFormulario"> 
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="">
            <label for="recipient-name" class="col-form-label">Año</label>
            <input type="text" class="form-control" id="anio_public" name="">
            <label for="recipient-name" class="col-form-label">Pàginas</label>
            <input type="text" class="form-control" id="no_pag" name="">
            <label for="recipient-name" class="col-form-label">Edición</label>
            <input type="text" class="form-control" id="edición" name="">
            
            <label for="basic-url">recurso</label>
                    <select id="id_tipo_rec" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($rec1 =mysqli_fetch_array($rec)){
                        echo '<option value="'.$rec1['id_tipo_rec'].'">'.$rec1['recurso'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">pais</label>
                    <select id="id_pais" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($p1 =mysqli_fetch_array($p)){
                        echo '<option value="'.$p1['id_pais'].'">'.$p1['nom_pais'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">idioma</label>
                    <select id="id_idioma" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($i1 =mysqli_fetch_array($i)){
                        echo '<option value="'.$i1['id_idioma'].'">'.$i1['nom_idioma'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">editorial</label>
                    <select id="id_editorial" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($e1 =mysqli_fetch_array($e)){
                        echo '<option value="'.$e1['id_editorial'].'">'.$e1['nom_editorial'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">materias</label>
                    <select id="id_materias" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($mat1 =mysqli_fetch_array($mat)){
                        echo '<option value="'.$mat1['id_materias'].'">'.$mat1['nom_materia'].'</option>';
                    }
                    ?>
                    </select>
                    <label for="file">ARCHIVO.</label>
                    <input type="file" class="form-control mb-3"  id="file" name="" placeholder="">
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="Subir_r" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
<style>
label{
    font-weight: bold;
    color: black;
}
</style>    
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  
    
    
 <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal2"style="margin-bottom: 50px">Física Clásica</button>
    <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Física Clásica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">

                <br>
                <h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
                <br>
                    
                <div class="table-responsive">
                          
                    <?php
                     while($row2=mysqli_fetch_array($query2)){
                    ?>
                                       
                        <td><?php  echo $row2['titulo']?></td>,
                        <td><?php  echo $row2['nom_editorial']?></td>
                        <td><?php  echo $row2['edición']?></td>
                        <td><?php  echo $row2['nom_pais']?></td>,
                        <td><?php  echo $row2['anio_public']?></td>.
                       
                        <br>
                        <td><a href="<?php  echo $row2['archivo']?>"  class=""><?php  echo $row2['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                <h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
                <br>
                <?php
                     while($row2_2=mysqli_fetch_array($query2_2)){
                    ?>
                                       
                        <td><?php  echo $row2_2['titulo']?></td>

                        <br>
                        <td><a href="../RECURSOS/<?php  echo $row2_2['archivo']?>"  class=""><?php  echo $row2_2['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>    
    
    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal3"style="margin-bottom: 50px">Fundamentos de Algebra</button>
    <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Fundamentos de Algebra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <br>


                <h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
                <br>
                    
                <div class="table-responsive">
                                
                    <?php
                     while($row3=mysqli_fetch_array($query3)){
                    ?>
                                       
                        <td><?php  echo $row3['titulo']?></td>,
                        <td><?php  echo $row3['nom_editorial']?></td>
                        <td><?php  echo $row3['edición']?></td>
                        <td><?php  echo $row3['nom_pais']?></td>,
                        <td><?php  echo $row3['anio_public']?></td>.
                       
                        <br>
                        <td><a href="<?php  echo $row3['archivo']?>"  class=""><?php  echo $row3['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                <h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
                <br>
                <?php
                     while($row3_3=mysqli_fetch_array($query3_3)){
                    ?>
                                       
                        <td><?php  echo $row3_3['titulo']?></td>

                        <br>
                        <td><a href="../RECURSOS/<?php  echo $row3_3['archivo']?>"  class=""><?php  echo $row3_3['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal4"style="margin-bottom: 50px">Fundamentos<br>de Programación</button>
    <div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Fundamentos de Programación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <br>


<h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
<br>
    
<div class="table-responsive">
                
    <?php
     while($row4=mysqli_fetch_array($query4)){
    ?>
                       
        <td><?php  echo $row4['titulo']?></td>,
        <td><?php  echo $row4['nom_editorial']?></td>
        <td><?php  echo $row4['edición']?></td>
        <td><?php  echo $row4['nom_pais']?></td>,
        <td><?php  echo $row4['anio_public']?></td>.
       
        <br>
        <td><a href="<?php  echo $row4['archivo']?>"  class=""><?php  echo $row4['archivo']?></a></td>
        <br>
        <br>
       
                          
        <?php 
        }
        ?>
        <hr>
<h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
<br>
<?php
     while($row4_4=mysqli_fetch_array($query4_4)){
    ?>
                       
        <td><?php  echo $row4_4['titulo']?></td>

        <br>
        <td><a href="../RECURSOS/<?php  echo $row4_4['archivo']?>"  class=""><?php  echo $row4_4['archivo']?></a></td>
        <br>
        <br>
       
                          
        <?php 
        }
        ?>
        <hr>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal5"style="margin-bottom: 50px">Humanidades I</button>
    <div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Humanidades I</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <br>


<h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
<br>
    
<div class="table-responsive">
                
    <?php
     while($row5=mysqli_fetch_array($query5)){
    ?>
                       
        <td><?php  echo $row5['titulo']?></td>,
        <td><?php  echo $row5['nom_editorial']?></td>
        <td><?php  echo $row5['edición']?></td>
        <td><?php  echo $row5['nom_pais']?></td>,
        <td><?php  echo $row5['anio_public']?></td>.
       
        <br>
        <td><a href="<?php  echo $row5['archivo']?>"  class=""><?php  echo $row5['archivo']?></a></td>
        <br>
        <br>
       
                          
        <?php 
        }
        ?>
        <hr>
<h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
<br>
<?php
     while($row5_5=mysqli_fetch_array($query5_5)){
    ?>
                       
        <td><?php  echo $row1_1['titulo']?></td>

        <br>
        <td><a href="../RECURSOS/<?php  echo $row5_5['archivo']?>"  class=""><?php  echo $row5_5['archivo']?></a></td>
        <br>
        <br>
       
                          
        <?php 
        }
        ?>
        <hr>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <button type="button" class="mt-5 mx-5 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal6" style="margin-bottom: 50px">Química Básica</button>
    <div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Química Básica</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                </div>
                <div class="modal-body">
                <br>


                <h5 class=" col-6 modal-title w-100" id="modalTitle">LIBROS.</h5> 
                <br>
                    
                <div class="table-responsive">
                                
                    <?php
                     while($row6=mysqli_fetch_array($query6)){
                    ?>
                                       
                        <td><?php  echo $row6['titulo']?></td>,
                        <td><?php  echo $row6['nom_editorial']?></td>
                        <td><?php  echo $row6['edición']?></td>
                        <td><?php  echo $row6['nom_pais']?></td>,
                        <td><?php  echo $row6['anio_public']?></td>.
                       
                        <br>
                        <td><a href="<?php  echo $row6['archivo']?>"  class=""><?php  echo $row6['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
                <h5 class=" col-6 modal-title w-100" id="modalTitle">OTROS RECURSOS.</h5> 
                <br>
                <?php
                     while($row6_6=mysqli_fetch_array($query6_6)){
                    ?>
                                       
                        <td><?php  echo $row6_6['titulo']?></td>

                        <br>
                        <td><a href="../RECURSOS/<?php  echo $row6_6['archivo']?>"  class=""><?php  echo $row6_6['archivo']?></a></td>
                        <br>
                        <br>
                       
                                          
                        <?php 
                        }
                        ?>
                        <hr>
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Subir_r').click(function() {
                if($('#titulo').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un asunto',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#anio_public').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un enlace',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#no_pag').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha seleccionado un semestre',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#edición').val()=="") {
                    Swal.fire({
                        icon: 'duracion',
                        title: 'No se ha seleccionado una materia',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#id_tipo_rec').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una duración',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#id_pais').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una clave',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#id_idioma').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de inicio',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#id_editorial').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de termino',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#id_materias').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de termino',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#file').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de termino',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } 

                /* cadena="titulo=" + $('#titulo').val() +
                        "&anio_public=" + $('#anio_public').val() +
                        "&no_pag=" + $('#no_pag').val() +
                        "&edición=" + $('#edición').val() +
                        "&id_tipo_rec=" + $('#id_tipo_rec').val() +
                        "&id_pais=" + $('#id_pais'). val() +
                        "&id_idioma=" + $('#id_idioma'). val() +
                        "&id_editorial=" + $('#id_editorial').val() +
                        "&id_materias=" + $('#id_materias'). val() +
                        "&file=" + $('#file'). val() ; */

                        /* [
                                "titulo": $('#titulo').val(),
                                "anio_public": $('#anio_public').val(),
                                "no_pag": $('#no_pag').val(),
                                "edición": $('#edición').val(),
                                "id_tipo_rec": $('#id_tipo_rec').val(),
                                "id_pais": $('#id_pais').val(),
                                "id_idioma": $('#id_idioma').val(),
                                "id_editorial": $('#id_editorial').val(),
                                "id_materias": $('#id_materias').val(),
                                "file": $('#file').val(),
                            ] */

                       /* var formUpload = new FormData( document.getElementById("subirRecursosFormulario") );
                        formUpload.append("titulo", $('#titulo').val()); 
                         */

                        $.ajax({
                            type:"POST",
                            url:"material_apoyo/insertar_rec1.php",
                            data: {
                                "titulo": $('#titulo').val(),
                                "anio_public": $('#anio_public').val(),
                                "no_pag": $('#no_pag').val(),
                                "edición": $('#edición').val(),
                                "id_tipo_rec": $('#id_tipo_rec').val(),
                                "id_pais": $('#id_pais').val(),
                                "id_idioma": $('#id_idioma').val(),
                                "id_editorial": $('#id_editorial').val(),
                                "id_materias": $('#id_materias').val(),
                                "file": $('#file')[0],
                            },
                            dataType: "json",
                            cache: false,
                            success: function(r){
                                console.log(r);
                                if (r==2){
                                    Swal.fire({
                                    icon: 'success',
                                    title: 'REGISTRO COMPLETADO!',
                                    text: 'Su reunion ha sido agregada con exito!',
                                    })
                                    $('#titulo').val('');
                                    $('#anio_public').val('');
                                    $('#no_pag').val('');
                                    $('#edición').val('');
                                    $('#id_tipo_rec').val('');
                                    $('#id_pais').val('');
                                    $('#id_idioma').val('');
                                    $('#id_editorial').val('');
                                    $('#id_materias').val('');
                                    $('#file').val('');
                                    
                                }else {
                                    Swal.fire({
                                    icon: 'error',
                                    title: 'NO SE HA COMPLETADO EL REGISTRO!',
                                    text: 'Intentalo de nuevo!',
                                    })
                                }
                            }

                        });
            });
        });

</script>


<?php require_once "vistas/parte_inferior.php" ?>