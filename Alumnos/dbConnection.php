
<?php
$con = new mysqli("localhost", "root", "root", "login_register_db");
mysqli_set_charset($con,'utf8'); 
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}

?>
