
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<?php require_once "vistas/parte_superior.php"?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="m-0 font-weight-bold text-primary" id="title">USUARIOS</h1>
                        <th><a href="crud/insertar_1.php" class="btn btn-info">AÑADIR NUEVO USUARIO.</a></th>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin 0 auto;">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombres(s)</th>
                                            <th>A.Paterno</th>
                                            <th>A.Materno</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Rol</th>
                                            <th>EDITAR</th>
                                            <th>ELIMINAR</th>
                                            
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombres(s)</th>
                                            <th>A. Paterno</th>
                                            <th>A. Materno</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Rol</th>
                                            <th>EDITAR</th>
                                            <th>ELIMINAR</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                            <tr>
                                                <td><?php  echo $row['id']?></td>
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['apellido_paterno']?></td>
                                                <td><?php  echo $row['apellido_materno']?></td> 
                                                <td><?php  echo $row['correo']?></td> 
                                                <td><?php  echo $row['usuario']?></td> 
                                                <td><?php  echo $row['id_rol']?></td>   

                                                <th><a href="crud/actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crud/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                                                     

                                                                                       
                                            </tr>
                                        <?php 
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
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

 