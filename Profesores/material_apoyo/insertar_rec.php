<?php
	 include("../conexion.php");
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>INSERTAR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>

    <body>
        <div class="container mt-5" >
            <h1>AÑADIR NUEVA REUNION.</h1>
                <form action="insertar_rec1.php" method="POST" enctype="multipart/form-data">
                
                    <label for="basic-url">TITULO.</label>
                    <input type="text" class="form-control mb-3" id="titulo" name="titulo" placeholder="NOMBRE DEL ARCHIVO">
                    <label for="basic-url">año.</label>
                    <input type="text" class="form-control mb-3" id="anio_public" name="anio_public" placeholder="NOMBRE DEL ARCHIVO">
                    <label for="basic-url">pag.</label>
                    <input type="text" class="form-control mb-3" id="no_pag" name="no_pag" placeholder="NOMBRE DEL ARCHIVO">
                    <label for="basic-url">edicion .</label>
                    <input type="text" class="form-control mb-3" id="edición" name="edición" placeholder="NOMBRE DEL ARCHIVO">

                    <label for="basic-url">recurso</label>
                    <select id="id_tipo_rec" type="text" name="id_tipo_rec" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($rec1 =mysqli_fetch_array($rec)){
                        echo '<option value="'.$rec1['id_tipo_rec'].'">'.$rec1['recurso'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">pais</label>
                    <select id="id_pais" type="text" name="id_pais" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($p1 =mysqli_fetch_array($p)){
                        echo '<option value="'.$p1['id_pais'].'">'.$p1['nom_pais'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">idioma</label>
                    <select id="id_idioma" type="text" name="id_idioma" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($i1 =mysqli_fetch_array($i)){
                        echo '<option value="'.$i1['id_idioma'].'">'.$i1['nom_idioma'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">editorial</label>
                    <select id="id_editorial" type="text" name="id_editorial" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($e1 =mysqli_fetch_array($e)){
                        echo '<option value="'.$e1['id_editorial'].'">'.$e1['nom_editorial'].'</option>';
                    }
                    ?>
                    </select>

                    <label for="basic-url">materias</label>
                    <select id="id_materias" type="text" name="id_materias" class="form-select mb-3" aria-label="Default select example">
                    <?php
                    echo '<option selected="selected" disabled="disabled">Eliga una opcion</option>';
                    while($mat1 =mysqli_fetch_array($mat)){
                        echo '<option value="'.$mat1['id_materias'].'">'.$mat1['nom_materia'].'</option>';
                    }
                    ?>
                    </select>
                   
                  

                    <label for="file">ARCHIVO.</label>
                    <input type="file" class="form-control mb-3"  id="file" name="file" placeholder="">
                    
                    


                    
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        </body>
</html>
