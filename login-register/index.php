
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
  
    
</head>

<body>

        
        <!-- Encabezado principal -->
        <div class="u-noPaddingContainer contenedorGobierno">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="d-inline-block ipnLogo-enlace">
                            <img src="assets/images/pleca-gob.png"   alt=" Pleca de Gobierno " class="plecaGob gob">
                            <a href="https://www.ipn.mx" class="">
                                <img src="assets/images/pleca-ipn.jpg"   alt=" Logo IPN " class="plecaGob_1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		  <br>


  <div class="contenedor_images">
      <img id ="foto1" src="assets/images/image_2.png" alt="">     
  </div>
     
  <div class="Letras">
    <h1 class="lines-effect">PECC (Plataforma de Estudio para la Carrera de Computación) </h1>    
  </div>
    


    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera__todo">  <!-- caja guinda -->

                <div class="caja__trasera-login"> <!-- caja login -->
                    <h3> ¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina.</p>
                    <button id="btn__inicio-sesion">Iniciar sesión</button> <!-- boton -->
                </div>

                <div class="caja__trasera-register" > <!-- caja Register -->
                    <h3 id="registro"> ¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para poder entrar a la pagina.</p>
                    <button id="btn__registrarse">Registrarse</button> <!-- boton -->
                </div>

            </div>

            <!-- FORMULARIO DE LOGIN Y REGISTRO  -->
            <!-- Inicio Sesion -->
            <div class="contenedor__login-register"> <!-- caja formularios blanca  -->
                <!-- LOGIN  -->
                <form   class="formulario__login">
                    <h2> Iniciar Sesión</h2>
                    <input type="text"  autocomplete="username" placeholder="Correo electronico"  id="correo2" name="">
                    <input type="password" autocomplete="current-password"  placeholder="Contraseña"   id="contrasena2" name="">
                    <button  type="button" id="Ingreso_l">Entrar</button> <!-- boton -->
                </form>

                <!-- REGISTRO -->
                <form  class="formulario__register" id="frm_r">
                    <h2> Registrarse</h2>
                    <input type="text" placeholder="Nombre " id="nombre" name="">
                    <input type="text" placeholder="Apellido Paterno" id="apellido_p" name="">
                    <input type="text" placeholder="Apellido Materno" id="apellido_m" name="">
                    <input type="text"  autocomplete="username" placeholder="Correo electronico" id="correo"name="">
                    <input type="text"  autocomplete="username" placeholder="Usuario" id="usuario"name="">
                    <input type="password" autocomplete="current-password" placeholder="Contraseña"id="contrasena" name="">
                    <div class="contenedor_ls">  
                        <label class="label">Tipo Usuario:</label>  
                        <select name="" id="rol">
                            <option value= "2">Alumno</option>
                            <option value="3">Profesor </option>
                        </select>
                    </div>
                    <button type="button" id="Registro_l">Registrarse</button> <!-- boton -->
                </form>
            </div>
        </div>
    </main>
    
    <footer class="piePagina">
            
            <!-- Aviso IPN -->
            <div class="bg--guinda">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-lg-12 pl-7 piePagina-texto">
                            <h3 class="text-center piePagina-titulo">INSTITUTO POLITÉCNICO NACIONAL</h3>
                            <p>
                                D.R. Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Alcaldía Gustavo A. Madero, C.P. 07738, Ciudad de México, 2019. Conmutador: 55 57 29 60 00 / 55 57 29 63 00.
                            </p>
                            <br>
                            <p>
                                Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-lg-12 pl-7">
                            <img src="assets/images/educacion2.png" alt="SEP" class="EducacionplecaGob gob">
                         </div>
                    </div>
                </div>
            </div>

            <!-- Boton para regresar al inicio de la pagina -->
            <span id="top-contenedor">
                <a href="#" class="top-link" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </span>
           
        
    </footer>
    
    <script src="assets/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Registro_l').click(function() {
                
                if($('#nombre').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un nombre',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#apellido_p').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un apellido',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#apellido_m').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un apellido',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#correo').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un correo',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#usuario').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un usuario',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#contrasena').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado una contraseña',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#rol').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'No se ha agregado un rol',
                        text: 'Escoge uno de nuevo!',
                         });
                    return false;
                }

                cadena="nombre=" + $('#nombre').val() +
                        "&apellido_p=" + $('#apellido_p').val() +
                        "&apellido_m=" + $('#apellido_m').val() +
                        "&correo=" + $('#correo').val() +
                        "&usuario=" + $('#usuario').val() +
                        "&contrasena=" + $('#contrasena'). val() +
                        "&rol=" + $('#rol').val();

                        $.ajax({
                            type:"POST",
                            url:"php/registro_usuario_b.php",
                            data:cadena,
                            success: function(r){
                                console.log(r);
                                if (r==2){
                                    Swal.fire({
                                    icon: 'error',
                                    title: 'USUARIO YA EN USO!',
                                    text: 'Intenta con otro usuario!',
                                    })

                                }else if(r==3){
                                    Swal.fire({
                                    icon: 'error',
                                    title: 'CORREO YA EN USO!',
                                    text: 'Intento con otro correo!',
                                    })
                                }else if(r==1){
                                    Swal.fire({
                                    icon: 'success',
                                    title: 'REGISTRO COMPLETADO!',
                                    text: 'Ya puedes Iniciar Sesión!',
                                    })
                                    $('#nombre').val('');
                                    $('#apellido_p').val('');
                                    $('#apellido_m').val('');
                                    $('#correo').val('');
                                    $('#usuario').val('');
                                    $('#contrasena').val('');
                                    
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


<script type="text/javascript">
	$(document).ready(function(){
		$('#Ingreso_l').click(function(){
			if($('#correo2').val()==""){
				Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO UN CORREO',
                        text: 'Rellena el campo de nuevo!',
                         });
				return false;
			}else if($('#contrasena2').val()==""){
				Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUNA CONTRASEÑA',
                        text: 'Rellena el campo de nuevo!',
                         });
				return false;
			}

			cadena="correo2=" + $('#correo2').val() + 
					"&contrasena2=" + $('#contrasena2').val();

					$.ajax({
						type:"POST",
						url:"php/login_iniciosesion_b.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="../startbootstrap-sb-admin-2-gh-pages/index.php";
							}else if(r==2){
                                window.location="../Alumnos/ind.php";
                            }else if(r==3){
                                window.location="../Profesores/ind2.php";
                            }
                            else{
                                console.log(r)
								Swal.fire({
                                    icon: 'error',
                                    title: 'NO HAS PODIDO INICIAR SESIÓN!',
                                    text: 'Verifica que tus datos sean correctos!',
                                    })
							}
						}
					});
		});	
	});
</script>
   
</body>
</html>

