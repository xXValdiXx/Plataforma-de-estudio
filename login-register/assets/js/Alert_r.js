var cadena = document.querySelector(".formulario__register");

$(document).ready(function() {
            $('#Registro_l').click(function() {
                
                if($('#nombre').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUN NOMBRE',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#apellido_p').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUN APELLIDO PATERNO',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#apellido_m').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUN APELLIDO MATERNO',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#correo').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUN CORREO',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#usuario').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUN USUARIO',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                }else if ($('#contrasena').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE HA AGREGADO NINGUNA CONTRASEÑA',
                        text: 'Rellena el campo de nuevo!',
                         });
                    return false;
                } else if ($('#rol').val()=="") {
                    Swal.fire({
                        icon: 'question',
                        title: 'NO SE AGREGADO NINGUN ROL',
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


