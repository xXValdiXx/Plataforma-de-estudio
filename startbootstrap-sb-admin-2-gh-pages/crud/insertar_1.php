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
        <div class="container mt-5">
            <h1>AÑADIR NUEVO USUARIO.</h1>
                <form action="insertar.php" method="POST">

                    <label for="basic-url">ID ALUMNO</label>
                    <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                    <label for="basic-url">NOMBRE ALUMNO</label>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE">
                    <label for="basic-url">APELLIDO PATERNO</label>
                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="APELLIDO PATERNO">
                    <label for="basic-url">APELLIDO MATERNO</label>
                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="APELLIDO MATERNO">
                    <label for="basic-url">CORREO</label>
                    <input type="text" class="form-control mb-3" name="correo" placeholder="CORREO">
                    <label for="basic-url">USUARIO </label>
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="USUARIO">
                    <label for="basic-url">CONTRASEÑA</label>
                    <input type="text" class="form-control mb-3" name="contrasena" placeholder="CONTRASENA">
                    <label for="basic-url">ROL</label>
                    <select  type="text" name="id_rol" class="form-select mb-3" aria-label="Default select example">
                            <option value= "1">Administrador</option>
                            <option value= "2">Alumno</option>
                            <option value="3">Profesor </option>
                    </select>

                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
        </div>
    </body>
</html>
<style>
label{
    font-weight: bold;
}

</style>