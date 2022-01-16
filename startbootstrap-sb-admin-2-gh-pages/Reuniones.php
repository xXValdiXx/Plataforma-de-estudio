<?php
session_start();
if(!isset($_SESSION['Sesion_activa'])){
    header ("location: ../login-register/index.php");
}
?>

<?php 
    include("conexion.php");
    $con=conectar();

    $sqlJoin = "SELECT * FROM usuarios JOIN reuniones ON usuarios.id = reuniones.id ";
    $query = mysqli_query($con, $sqlJoin) or die(mysqli_error($con));
?>

<?php require_once "vistas/parte_superior.php"?>

<section class="main">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="m-0 font-weight-bold text-primary" id="title">ASESORIAS (HORARIOS)</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable"   style="margin 0 auto;">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Asunto</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Terminó</th>
                                           
                                

                                            
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Asunto</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Terminó</th>
                                           
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                            <tr>
                                                <td><?php  echo $row['id_reunion']?></td>
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['apellido_paterno']?></td>
                                               <td><?php  echo $row['asunto']?></td> 
                                                <td><?php  echo $row['iniciar']?></td>  
                                                <td><?php  echo $row['duracion']?></td> 
                                                <td><?php  echo $row['clave']?></td> 
                                                <td><?php  echo $row['fecha_ini']?></td> 
                                                <td><?php  echo $row['fecha_ter']?></td> 
                                                
                                          
                                            </tr>
                                        <?php 
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	
	</section>
                    <style>
table th{
    text-align: center;
    color: black;
}
table td{
    text-align: center;
    color: black;
}
#title{
    color: #682444 !important;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #682444 !important;
  border-color: #682444 !important;
}

</style>

<?php require_once "vistas/parte_inferior.php" ?>