
<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT * FROM nametabla";
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="table table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                            <tr>
                                                <td><?php  echo $row['id']?></td>
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['apellido']?></td>
                                            </tr>
                                        <?php 
                                        }
                                    ?>
                                    </tbody>
                                </table>


</body>
</html>