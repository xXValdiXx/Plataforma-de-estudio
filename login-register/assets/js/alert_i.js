var cadena = document.querySelector(".formulario__login");
$(document).ready(function(){
    $('#Ingreso_l').click(function(){
        if($('#correo2').val()==""){
            Swal.fire({
                    icon: 'question',
                    title: 'NO SE HA AGREGADO NINGUN CORREO',
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
                            window.location="prueba2.php";
                        }else if(r==3){
                            window.location="prueba1.php";
                        }
                        else{
                            console.log(r)
                            Swal.fire({
                                icon: 'error',
                                title: 'NO HAS PODIDO INCIAR SESIÓN!',
                                text: 'Verifica que tus datos sean correctos!',
                                })
                        }
                    }
                });
    });	
});