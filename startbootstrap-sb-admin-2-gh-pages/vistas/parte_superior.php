<?php 
    session_start();

    $nombre = $_SESSION['nombre'];

    $apellido_paterno = $_SESSION['apellido_paterno'];
    $correo=$_SESSION['correo'];

    
?>

<?php
session_start();
if(!isset($_SESSION['Sesion_activa'])){
    header ("Location: ../../login-register/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
     <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-desktop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PECC ADMIN <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard PECC</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Información
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>USUARIOS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">USUARIOS:</h6>
                        <a class="collapse-item" href="Administradores.php">ADMINISTRADORES</a>
                        <a class="collapse-item" href="Alumnos.php">ALUMNOS</a>
                        <a class="collapse-item" href="Profesor.php">PROFESORES</a>
                    </div>
                </div>
            </li>

              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">
              
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReuniones"
                    aria-expanded="true" aria-controls="collapseReuniones">
                    <i class="fas fa-calendar-alt"></i>
                    <span>REUNIONES</span>
                </a>
                <div id="collapseReuniones" class="collapse" aria-labelledby="headingReuniones" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">ASESORIAS.</h6>
                        <a class="collapse-item" href="Reuniones.php">HORARIOS</a>
    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReuniones"
                    aria-expanded="true" aria-controls="collapseReuniones">
                    <i class="fas fa-calendar-alt"></i>
                    <span>MATERIAL APOYO</span>
                </a>
                <div id="collapseReuniones" class="collapse" aria-labelledby="headingReuniones" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MAT. APOYO..</h6>
                        <a class="collapse-item" href="#">RECURSOS</a>
    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReuniones"
                    aria-expanded="true" aria-controls="collapseReuniones">
                    <i class="fas fa-calendar-alt"></i>
                    <span>CURSOS</span>
                </a>
                <div id="collapseReuniones" class="collapse" aria-labelledby="headingReuniones" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">CURSOS.</h6>
                        <a class="collapse-item" href="#">CURSOS</a>
    
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <center>
            <img src="img/image_2.png" width=100px  alt=" Pleca de Gobierno" id="img" class="plecaGob gob">
            </center>
          
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  

        
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="ipnLogo-enlace">
                                    <a href="https://www.ipn.mx" class="">
                                    <img src="img/pleca-ipn.jpg"  width=210px height= 70px alt=" Logo IPN " id="ipnLogo2" class="plecaGob">
                                    </a>
                                </div>
                            </div>
                        </div>
                        

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $apellido_paterno;?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    SALIR
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<style>
    #accordionSidebar{
        background: #682444 !important;
    }

 

}




</style>