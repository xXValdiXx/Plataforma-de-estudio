<?php require_once "vistas/parte_superior.php" ?>

	<section class="main">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                            <h1 class="m-0 font-weight-bold text-primary" id="title">ASESORIAS (HORARIOS)</h1>

                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">REGISTRO reunion</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO REUNIÓN</h5>
      </div>
      <div class="modal-body">
        <form > 
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Asunto</label>
            <input type="text" class="form-control" id="asunto" name="">
            <label for="recipient-name" class="col-form-label">Enlace Reunion</label>
            <input type="text" class="form-control" id="iniciar" name="">
            <label for="recipient-name" class="col-form-label">Semestre</label> <br>
            <select id="semestre" type="text" name="" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($semestre1 =mysqli_fetch_array($semestre)){
                        echo '<option value="'.$semestre1['id_semestre'].'">'.$semestre1['semestre'].'</option>';
                    }
                    ?>
            </select>
            <br>
            <label for="recipient-name" class="col-form-label">Materia</label> <br>
            <select id="materias" type="text" name="" class="form-select mb-3" disabled="disabled" aria-label="Default select example">
            <option value="" disabled selected>Elige un semestre...</option>
            </select> <br>
            <label for="recipient-name" class="col-form-label">Duración</label>
            <input type="text" class="form-control" id="duracion" name="">
            <label for="recipient-name" class="col-form-label">Clave</label>
            <input type="text" class="form-control" id="clave" name="">
            <label for="recipient-name" class="col-form-label">Fecha de Inicio</label>
            <input type="datetime-local" class="form-control" id="fecha_ini" name="">
            <label for="recipient-name" value="2018-07-22" min="2020-01-01" max="2040-12-31" class="col-form-label">Fecha de Termino</label>
            <input type="datetime-local" value="2018-07-22" min="2020-01-01" max="2040-12-31" class="form-control" id="fecha_ter" name="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="Registro_r" class="btn btn-primary">Enviar</button>
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

    <th><a href="asesorias_2.php" class="btn btn-success"> SERVIDOR jitsi meet.</a></th>
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
                                            <th>Materia</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>F. Inicio</th>
                                            <th>F. Termino</th>
                                            <th>INICIAR</th>
                                            <th>ELIMINAR</th>
                                

                                            
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            <th>Asunto</th>
                                            <th>Materia</th>
                                            <th>ENLACE</th>
                                            <th>Duración</th>
                                            <th>Clave</th>
                                            <th>F. Inicio</th>
                                            <th>F. Termino</th>
                                            <th>INICIAR</th>
                                            <th>ELIMINAR</th>
                                            
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
                                                <td><?php  echo $row['nom_materia']?></td> 
                                                <td><?php  echo $row['iniciar']?></td>  
                                                <td><?php  echo $row['duracion']?></td> 
                                                <td><?php  echo $row['clave']?></td> 
                                                <td><?php  echo $row['fecha_ini']?></td> 
                                                <td><?php  echo $row['fecha_ter']?></td> 
                                                
                                                <td><a href="<?php  echo $row['iniciar']?>" target="_blank" class="btn btn-danger">INICIAR.</a></td>
                                               <td><a href="reuniones/delete.php?id_reunion=<?php echo $row['id_reunion'] ?>" class="btn btn-danger">ELIMINAR.</a></td>  
                                          
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $("#semestre").on('change', (e) => {
                var id = e.target.value;

                $.ajax({
                    type:"POST",
                    url:"reuniones/insertar_1.php",
                    data: {
                        ID:id,
                        Accion: 1
                    },
                    success: function(r){
                        r = jQuery.parseJSON(r);

                        $("#materias").empty().append(
                            '<option disabled selected value="">Elige una materia...</option>'
                        ).prop('disabled', false);
                        $.each(r, (index, val) => {
                            $("#materias").append(
                            '<option value="'+val['id_materias']+'">'+val['nombre']+'</option>'
                            );
                        });
                    }

                });

            });
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Registro_r').click(function() {
                
                if($('#asunto').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un asunto',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#iniciar').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un enlace',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#semestre').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha seleccionado un semestre',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#materias').val()=="") {
                    Swal.fire({
                        icon: 'duracion',
                        title: 'No se ha seleccionado una materia',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#duracion').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una duración',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#clave').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una clave',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#fecha_ini').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de inicio',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#fecha_ter').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una fecha de termino',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }

                cadena="asunto=" + $('#asunto').val() +
                        "&iniciar=" + $('#iniciar').val() +
                        "&semestre=" + $('#semestre').val() +
                        "&materias=" + $('#materias').val() +
                        "&duracion=" + $('#duracion').val() +
                        "&clave=" + $('#clave'). val() +
                        "&fecha_ini=" + $('#fecha_ini'). val() +
                        "&fecha_ter=" + $('#fecha_ter').val();

                        $.ajax({
                            type:"POST",
                            url:"reuniones/insertar_1.php",
                            data:cadena,
                            success: function(r){
                                console.log(r);
                                if (r==2){
                                    Swal.fire({
                                    icon: 'success',
                                    title: 'REGISTRO COMPLETADO!',
                                    text: 'Su reunion ha sido agregada con exito!',
                                    })
                                    $('#asunto').val('');
                                    $('#iniciar').val('');
                                    $('#semestre').val('');
                                    $('#materias').val('');
                                    $('#duracion').val('');
                                    $('#clave').val('');
                                    $('#fecha_ini').val('');
                                    $('#fecha_ter').val('');
                                    
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
    