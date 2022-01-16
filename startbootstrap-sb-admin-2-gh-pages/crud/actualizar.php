<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <h1>ACTUALIZAR INFORMACIÓN.</h1>
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                                <label for="basic-url">ID ALUMNO</label>
                                <input type="text" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                                <label for="basic-url">NOMBRE ALUMNO</label>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <label for="basic-url">APELLIDO PATERNO</label>
                                <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido PATERNO" value="<?php echo $row['apellido_paterno']  ?>">
                                <label for="basic-url">APELLIDO MATERNO</label>
                                <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="APELLIDO MATERNO" value="<?php echo $row['apellido_materno']  ?>">
                                <label for="basic-url">CORREO</label>
                                <input type="text" class="form-control mb-3" name="correo" placeholder="CORREO" value="<?php echo $row['correo']  ?>">
                                <label for="basic-url">USUARIO</label>
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="USUARIO" value="<?php echo $row['usuario']  ?>">
                                <label for="basic-url">CONTRASEÑA</label>
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="CONTRASEÑA" value="<?php echo $row['contrasena']  ?>">
                                <label for="basic-url">ROL</label>
                                <select  type="text" class="form-select  mb-3" name="id_rol" value="<?php echo $row['id_rol']  ?>">
                                <option value= "1">Administrador</option>
                                <option value= "2">Alumno</option>
                                <option value="3">Profesor </option>
                                </select>
                                    
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>

<style>
label{
    font-weight: bold;
}

</style>
