<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

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

     $query5_rec= "SELECT id_materias, nom_materia FROM materias ORDER BY id_materias";
     $mat=mysqli_query($con,$query5_rec);

     $sqlJoinv = "SELECT * FROM cursos ORDER BY id_curso";
     $queryv = mysqli_query($con, $sqlJoinv) or die(mysqli_error($con));
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
		<li class="nav-item">
          <a class="nav-link" href="#">Estadisticas</a>
        </li>
      
      </ul>

	  <ul class="navbar-nav ml-auto">
	  <a class="btn" href="logout.php">Cerrar Sesión</a>
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

<?php
$con=conectar();
$sql = "SELECT * FROM cursos ";
$query=mysqli_query($con, $sql);
?>
<br>
<button type="button" class="btn btn-primary b" data-bs-toggle="modal" data-bs-target="#exampleModal-C" data-bs-whatever="@mdo">SUBIR CURSO</button>
<div class="modal fade" id="exampleModal-C" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-C">SUBIR CURSO</h5>
      </div>
      <div class="modal-body">
      <form action="cursos/insertar_cur.php" method="POST" enctype="multipart/form-data">
                
                <label for="basic-url">NOMBRE CURSO.</label>
                <input type="text" class="form-control mb-3" id="nombre_curso" name="nombre_curso" placeholder="NOMBRE DEL ARCHIVO">
                <label for="basic-url">FECHA INICIO.</label>
                <input type="datetime-local" class="form-control mb-3" id="fecha_inicio" name="fecha_inicio" placeholder="NOMBRE DEL ARCHIVO">
                <label for="basic-url">ESTADO.</label>
                <input type="text" class="form-control mb-3" id="estado" name="estado" placeholder="NOMBRE DEL ARCHIVO">
                <label for="basic-url">materias</label>
                <select id="id_materias" type="text" name="id_materias" class="form-select mb-3" aria-label="Default select example">
                <?php
                echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                while($mat1 =mysqli_fetch_array($mat)){
                    echo '<option value="'.$mat1['id_materias'].'">'.$mat1['nom_materia'].'</option>';
                }
                ?>
                </select>
                <input type="submit" class="btn btn-primary" value="Enviar">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<br>
<section class="main">
  <div class="container-cards" >
    <div class="row">
   <?php  while($row=mysqli_fetch_assoc($query)){ ?>

    
      <div class="col-sm-4">
        <div class="card">
        <img src="cursos/imagenes/prueba.jpg" class="img-fluid rounded-start" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php  echo $row['nombre_curso']?></h5>
            <p class="card-text"><?php  echo $row['estado']?> <br> <?php  echo $row['fecha_inicio']?></p>
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" name="openModal" id="<?php  echo $row['id_curso']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
              VER CURSO
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" name="bodyModalShowVideos">
                  
                                              
                  </div>
                  <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-v" data-bs-whatever="@mdo">SUBIR VIDEO</button>
<div class="modal fade" id="exampleModal-v" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-v">SUBIR VIDEO</h5>
      </div>
      <div class="modal-body">
      <form action="cursos/insertar_vid.php" method="POST" enctype="multipart/form-data">
                
                <label for="basic-url">NOMBRE.</label>
                <input type="text" class="form-control mb-3" name="nombre_video" placeholder="NOMBRE DEL ARCHIVO">
                <label for="basic-url">SINOPSIS.</label>
                <input type="text" class="form-control mb-3" id="sinopsis" name="sinopsis" placeholder="NOMBRE DEL ARCHIVO">
               
                <label for="basic-url">CURSO</label>
                <select id="id_curso" type="text" name="id_curso" class="form-select mb-3" aria-label="Default select example">
                <?php
                echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                while($queryv1 =mysqli_fetch_array($queryv)){
                    echo '<option value="'.$queryv1['id_curso'].'">'.$queryv1['nombre_curso'].'</option>';
                }
                ?>
                </select>
              

                <label for="file">ARCHIVO.</label>
                
                <input type="file" data-max-size="26214400"class="form-control mb-3"  id="file" name="file" placeholder="">
                
                


                
                <input type="submit" class="btn btn-primary" value="Enviar">
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
          
        </div>
        <br>
      </div>
      <br>
                                       
    <?php 
    }
    ?>
  </div>
</div>



</section>

 
<style type="text/css">
/*CURSOS*/
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 0.25rem;
    margin-left: 0.25rem;
    flex-direction: row;
    align-content: center;
    justify-content: center;
}

footer p{
  font-size: 98%;
  align-content: center;
}

button.btn.btn-primary.b {
  margin-left: 45% !important;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<script>
  $("button[name='openModal']").on('click', function(e) {
    var curso = e.target.getAttribute("id")

    $.ajax({
      type:"POST",
      url:"cursos/Obtener_v.php",
      data: {id:curso},
      success: function(r){
        r = JSON.parse(r);
        var bodyHTML = '';
        if( Object.keys(r).length > 0 ){
          ;
          $.each(r, function(i, item){
            bodyHTML += `
            <div class="card mb-3" style="max-width: 750px;">
                                        <div class="row g-0">
                                          <div class="col-md-15">
                                            <div class="card-body">
                                              <h5 class="card-title">${item['nombre_video']}</h5>
                                              <p class="card-text">${item['sinopsis']}</p>
                                              <video src="cursos/videos/${item['archivo']}#t=5" controls="controls" width="700px" ></video>
 
                                            </div>
                                          </div>
                                        </div>
                                      </div>       
                                      `
            
          })
          $('div[name="bodyModalShowVideos"]').html(bodyHTML);
        }else{
          $('div[name="bodyModalShowVideos"]').html(`<h1>No hay videos disponibles</h1>`);
        }
      
      }
    });
  });


</script>


<?php require_once "vistas/parte_inferior.php" ?>

