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
?>
<!-- Button trigger modal -->



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SUBIR RECURSO</h5>
      </div>
      <div class="modal-body">
      
                
           
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<script src="sweetalert2.all.min.js"></script>
    
    
