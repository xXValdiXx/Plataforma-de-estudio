<?php require_once "vistas/parte_superior.php" ?>

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
                                           
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            <th>Asunto</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>Inicio</th>
                                            <th>Termino</th>
                                            <th>INICIAR</th>
                                            
                                

                                            
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            <th>Asunto</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>Inicio</th>
                                            <th>Termino</th>
                                            <th>INICIAR</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                            <tr>
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['apellido_paterno']?></td>
                                                <td><?php  echo $row['rol']?></td>
                                                <td><?php  echo $row['asunto']?></td> 
                                                <td><?php  echo $row['iniciar']?></td>  
                                                <td><?php  echo $row['duracion']?></td> 
                                                <td><?php  echo $row['clave']?></td> 
                                                <td><?php  echo $row['fecha_ini']?></td> 
                                                <td><?php  echo $row['fecha_ter']?></td> 
                                                
                                                <td><a href="<?php  echo $row['iniciar']?>" target="_blank" class="btn btn-danger">INICIAR.</a></td>
                                                
                                          
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

    <?php require_once "vistas/parte_inferior.php" ?>